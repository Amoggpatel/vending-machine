<?php
 session_start();
// Database connection parameters
$servername = "localhost"; // Change this if your database server is different
$username = "root";
$password = "";
$database = "vm_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch orders from the database
$sql = 'SELECT o.order_id as order_id, p.product_name, o.username, p.price, o.total_amount 
        FROM orders o 
        INNER JOIN products p ON o.product_id = p.product_id
        WHERE o.username = "' . $_SESSION["username"] . '"'; // Assuming your tables are named 'orders' and 'products'
$result = $conn->query($sql);

$ordersData = array();

if ($result->num_rows > 0) {
    // Fetch rows and add them to the orders data array
    while ($row = $result->fetch_assoc()) {
        $ordersData[] = $row;
    }
}

// Close connection
$conn->close();

// Output orders data as JSON
header('Content-Type: application/json');
echo json_encode($ordersData);
?>
