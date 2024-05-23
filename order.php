<!DOCTYPE html>
<html>
  <head>
    <title>Machine Selection</title>
    <style>
      
      body {
        font-family: Arial, sans-serif;
      }
      .container {
        width: 900px;
        margin: 0 auto;
        height: 400px;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        position: relative;
        top: 70px;
      }
      .input-group {
        position: relative;
        top: 30px;
        margin-bottom: 20px;
      }
      .input-group label {
        display: block;
        margin-bottom: 10px;
      }
      .input-group select {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
      }
      .button-group {
        position: relative;
        top: 50px;
        text-align: center;
      }
      .button-group button {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: #4CAF50;
        color: #fff;
        cursor: pointer;
      }
      .button-group button:hover {
        background-color: #3e8e41;
      }
    </style>
  </head>
  <?php
session_start();
?>
  <body>
    <div class="container">
      <h1>Orders</h1>
      <form action="vm_order.php" method="post">
      <p></p>
      Machine ID: <?php
                    if(isset($_SESSION["machine_id"])){
                        $machine_id = $_SESSION["machine_id"];
                        echo "<input type='text' value='$machine_id' readonly name='$machine_id'>";
               
                    }
                ?>  
      <!-- <input type="text" value='$machine_id' readonly name='$machine_id'> -->
      <br><br>
      Item Name:<?php
                    if(isset($_SESSION["product_name"])){
                        $product_name = $_SESSION["product_name"];
                        echo "<input type='text' value='$product_name' readonly name='$product_name'>";
               
                    }
                ?>   
      <!-- <input type="text" value='$product_name' readonly name='$product_name'> -->
      <br><br>
      <div class="input-group">
        <label for="no_ofitems">No. of item(s)</label>
        <select id="machine-selection" name="machine-selection">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>
      </div>

      <div class="button-group">
        <button formaction="vm_order.php" name="send">Buy Now</button>
      </div>
      </form>
    </div>

  </body>
</html>