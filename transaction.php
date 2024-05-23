<!DOCTYPE html>
<html>
  <head>
    <title> Page</title>
    <style>
      /* Add some basic styling */
      body {
        font-family: Arial, sans-serif;
        background-color: #f1f1f1;
      }
      .container {
        width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      }
      .payment-option {
        margin-bottom: 30px;
      }
      .payment-option label {
        display: block;
        font-size: 1.2em;
        margin-bottom: 10px;
      }
      .payment-option input[type="radio"] {
        margin-right: 10px;
      }
      .payment-option .qr-code {
        width: 100%;
        border: 1px solid #ccc;
        padding: 10px;
        text-align: center;
        border-radius: 5px;
      }
      .payment-option .qr-code img {
        width: 100%;
        height: auto;
      }
      .payment-option .card-payment {
        margin-top: 20px;
      }
      .payment-option .card-payment input[type="text"],
      .payment-option .card-payment input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
      }
      .payment-option .card-payment input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      .payment-option .card-payment input[type="submit"]:hover {
        background-color: #3e8e41;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Choose Your Payment Option</h1>
      <form action="vm_place.php" method="post">
        <div class="payment-option">
          <label for="upi">UPI Payment with QR Code</label>
          <div class="qr-code">
            <img src="qr-code.png" alt="QR Code">
          </div>
          <p>Scan the QR code using your preferred UPI app</p>
          <input type="radio" id="upi" name="payment-option" value="upi">
        </div>

        <div class="payment-option">
          <label for="cod">Cash on Delivery</label>
          <input type="radio" id="cod" name="payment-option" value="cod">
          <p>Pay in cash when you receive your order</p>
        </div>

        <div>
        Total Amount: <?php
                    session_start();
                    if(isset($_SESSION["total"])){
                        $total = $_SESSION["total"];
                        echo "<p>$total</p>";
               
                    }
                ?> 
        </div>

        <div class="payment-option">
          <label for="card">Card Payment</label>
          <div class="card-payment">
            <input type="submit" formaction="vm_place.php" value="Confirm Payment" name="send">
          </div>
        </div>
      </form>
    </div>
  </body>
</html>