<?php
session_start();
// Database connection parameters
$servername = "localhost"; // Change this if your database server is different
$username = "root";
$password = "";
$database = "vm_db";

// Get the order ID from the request body
$data = json_decode(file_get_contents("php://input"));

if(isset($data->product_id)) {
    $product_id = $data->product_id;
    // $quantity = $data->quantity;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Begin a transaction
    $conn->begin_transaction();

    // Retrieve the product ID and quantity from the order
    $sql_product = "SELECT product_id FROM products WHERE product_id = $product_id";
    $result_product = $conn->query($sql_product);

    if ($result_product->num_rows > 0) {
        $row_product = $result_product->fetch_assoc();
        // $product_id = $row_product['product_id'];

        // Update stock quantity in products table
        $sql_delete_order = "DELETE FROM orders WHERE product_id = $product_id";
        if ($conn->query($sql_delete_order) === TRUE) {
            // Delete the order
            $sql_delete_product = "DELETE FROM products WHERE product_id = $product_id";
            if ($conn->query($sql_delete_product) === TRUE) {
                // Commit the transaction
                $conn->commit();
                $response = array("success" => true);
            } else {
                // Rollback the transaction if order deletion fails
                $conn->rollback();
                $response = array("success" => false, "message" => "Failed to delete product.");
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
