<?php
session_start();
// Database connection parameters
$servername = "localhost"; // Change this if your database server is different
$username = "root";
$password = "";
$database = "vm_db";

// Get the order ID from the request body
$data = json_decode(file_get_contents("php://input"));

if(isset($data->order_id)) {
    $order_id = $data->order_id;
    $quantity = $data->quantity;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Begin a transaction
    $conn->begin_transaction();

    // Retrieve the product ID and quantity from the order
    $sql_order = "SELECT product_id FROM orders WHERE order_id = $order_id";
    $result_order = $conn->query($sql_order);

    if ($result_order->num_rows > 0) {
        $row_order = $result_order->fetch_assoc();
        $product_id = $row_order['product_id'];

        // Update stock quantity in products table
        $sql_update_stock = "UPDATE products SET stock_quantity = stock_quantity + $quantity WHERE product_id = $product_id";
        if ($conn->query($sql_update_stock) === TRUE) {
            // Delete the order
            $sql_delete_order = "DELETE FROM orders WHERE order_id = $order_id";
            if ($conn->query($sql_delete_order) === TRUE) {
                // Commit the transaction
                $conn->commit();
                $response = array("success" => true);
            } else {
                // Rollback the transaction if order deletion fails
                $conn->rollback();
                $response = array("success" => false, "message" => "Failed to delete order.");
            }
        } else {
            // Rollback the transaction if stock update fails
            $conn->rollback();
            $response = array("success" => false, "message" => "Failed to update stock quantity.");
        }
    } else {
        $response = array("success" => false, "message" => "Order not found.");
    }

    // Close connection
    $conn->close();

    // Send JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // Send error response if order ID is not provided
    $response = array("success" => false, "message" => "Order ID not provided");
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
