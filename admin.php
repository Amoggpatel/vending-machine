<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vending Machine Products</title>
    <style>
        /* Basic CSS for styling */
        body{
            background-color: rgb(119,158,238);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .delete-btn {
            background-color: #ff0000;
            color: #fff;
            padding: 6px 10px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>Vending Machine Products</h2>
    <!-- Form to add a new product -->
    <form action="vm_add.php" method="POST">
        <label for="productName">Product Name:</label>
        <input type="text" id="productName" name="productName" required><br><br>
        <label for="productName">Product Id:</label>
        <input type="text" id="productid" name="productid" required><br><br>
        <label for="machineID">Machine ID:</label>
        <input type="text" id="machineID" name="machineID" required><br><br>
        <label for="productType">Product Type:</label>
        <input type="text" id="productType" name="productType" required><br><br>
        <label for="productPrice">Product Price:</label>
        <input type="text" id="productPrice" name="productPrice" required><br><br>
        <label for="productStock">Product Stock:</label>
        <input type="text" id="productStock" name="productStock" required><br><br>        
        <input type="submit" value="send" name="send">
    </form>
    
    <!-- Table to display products -->
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>productid</th>
                <th>Machine ID</th>
                <th>Product Type</th>
                <th>Product Price</th>
                <th>Product Stock</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="products-table-body">
            <!-- Products will be dynamically added here -->
        </tbody>
    </table>

    <!-- JavaScript code -->
    <script>
        // Function to fetch orders data from the server
        function fetchProducts() {
            fetch('fetch_products.php')
            .then(response => response.json())
            .then(data => {
                populateProductsTable(data);
            })
            .catch(error => {
                console.error('Error fetching orders:', error);
            });
        }

        // Function to populate the table with orders data
        function populateProductsTable(productsData) {
            const productsTableBody = document.getElementById("products-table-body");
            // Clear existing table rows
            productsTableBody.innerHTML = '';

            // Loop through orders data and create table rows
            productsData.forEach(product => {
                // const quantity = order.total_amount / order.price
                const row = `
                    <tr>
                        <td>${product.product_name}</td>
                        <td>${product.product_id}</td>
                        <td>${product.machine_id}</td>
                        <td>${product.product_type_id}</td>
                        <td>${product.price}</td>
                        <td>${product.stock_quantity}</td>
                        <td><button onclick="deleteProduct(${product.product_id})">Delete</button></td>
                    </tr>
                `;
                productsTableBody.innerHTML += row;
            });
        }

        function deleteProduct(product_id) {
        if (confirm("Are you sure you want to delete this Product?")) {
            fetch('delete_product.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ product_id: product_id }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert("Product deleted successfully!");
                    // Update the table after successful deletion
                    fetchProducts();
                } else {
                    alert("Failed to delete product.");
                }
            })
            .catch(error => {
                console.error('Error deleting product:', error);
                alert("An error occurred while deleting the product.");
            });
        }
        }

        // Populate the table initially
        fetchProducts();
    </script>
</body>
</html>
