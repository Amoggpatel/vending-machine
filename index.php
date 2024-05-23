<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUNCH BOX</title>

    <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <link rel="stylesheet" href="style.css">

</head>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the variable name and value from the AJAX request
    $variableName = $_POST['variableName'];
    $value = $_POST['value'];

    // Set the session variable
    $_SESSION[$variableName] = $value;
}
?>

<body>


    <header>
        <a href="#" class="logo" style="color: rgb(119,158,248);"><img src="vecteezy_vending-machine-icon-style_6070604.jpg" alt="" height="50px" width="30px">Munch Box</a>
        <nav class="navbar">
            <a href="index.html">home</a>
            <a href="#action">Bakery/Cake/Dairy</a>
            <a href="#anime">Beverages</a>
             <a href="#child">Snacks & Brand Food</a>
        </nav>
        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <a href="admin.php" class="fas fa-search" id="search-icon"></a>
            <a href="delete.php" class="fas fa-heart"></a>
        </div>
    </header>



<section class="home" id="home">

    
            <div class="swiper-slide">
                <video  src="vending_machine.mp4" muted autoplay height="600px" width="1300px"></video>

             </div>


</section>



<section class="anime" id="anime">
    <h1 class="heading">Bevarages</h1>
    <div class="swiper anime-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <img src="9.jpg" height="300px" width="300px">                <div class="content">
                    <h3>Pepsi</h3>
                    <p>product id:201 <br>
                        product type: Bevarages <br>
                        <b> price:&#8377 40.00 </b><br></p>
                    <a class="btn" id="Pepsi" href="vm_product.php" >BUY</a>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="10.jpg" height="300px" width="300px">                <div class="content">
                    <h3>Rita</h3>
                    <p>product id: 202 <br>
                        product type: Bevarages <br>
                        <b> price:&#8377  20.00</b><br></p>
                    <a href="vm_product.php" class="btn" id="Rita">BUY</a>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="11.jpg" height="300px" width="300px">                <div class="content">
                    <h3> Mango Juice</h3>
                    <p>product id: 203 <br>
                        product type: Bevarages <br>
                        <b> price:&#8377 20.00 </b><br></p>
                    <a href="vm_product.php" class="btn" id="Mango Juice">BUY</a>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="12.jpg" height="300px" width="300px">                <div class="content">
                    <h3> Coco Cola</h3>
                    <p>product id: 204 <br>
                        product type: Bevarages <br>
                        <b> price:&#8377 48.00 </b><br></p>
                    <a href="vm_product.php" class="btn" id="Coco Cola">BUY</a>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="13.jpg" height="300px" width="300px">                <div class="content">
                    <h3> Mtn Dew</h3>
                    <p>product id: 205 <br>
                        product type: Bevarages <br>
                        <b> price:&#8377 70.00 </b><br></p>
                    <a href="vm_product.php" class="btn" id="Mtn Dew">BUY</a>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="14.jpg" height="300px" width="300px">                <div class="content">
                    <h3>Frijj!!</h3>
                    <p>product id: 206 <br>
                        product type: Bevarages <br>
                        <b> price:&#8377  120.00</b><br></p>
                    <a href="vm_product.php" class="btn" id="Frijj">BUY</a>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="15.jpg" height="300px" width="300px">                <div class="content">
                    <h3>Monster Energy</h3>
                    <p>product id: 207 <br>
                        product type: Bevarages <br>
                        <b> price:&#8377 120.00 </b><br></p>
                    <a href="vm_product.php" class="btn" id="Monster Energy">BUY</a>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="16.jpg" height="300px" width="300px">                <div class="content">
                    <h3>  Bai Bubbles</h3>
                    <p>product id: 208 <br>
                        product type: Bevarage0000s <br>
                        <b> price:&#8377 70.00 </b><br></p>
                    <a href="vm_product.php" class="btn" id="Bai Bubbles">BUY</a>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="17.jpg" height="300px" width="300px">                <div class="content">
                    <h3>Mtn Orange</h3>
                    <p>product id: 209 <br>
                        product type: Bevarages <br>
                        <b> price:&#8377 50.00 </b><br></p>
                    <a href="vm_product.php" class="btn" id="Mtn Orange">BUY</a>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="32.jpg" height="300px" width="300px">                <div class="content">
                    <h3> Kaiju Kruch</h3>
                    <p>product id: 210 <br>
                        product type: Bevarages <br>
                        <b> price:&#8377 80.00 </b><br></p>
                    <a href="vm_product.php" class="btn" id="Kaiju Kruch">BUY</a>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="33.jpg" height="300px" width="300px">                <div class="content">
                    <h3> Vanilla Coke</h3>
                    <p>product id: 211 <br>
                        product type: Bevarages <br>
                        <b> price:&#8377 99.00 </b><br></p>
                    <a href="vm_product.php" class="btn" id="Vanilla Coke">BUY</a>
                </div>
            </div>


        </div>
    </div>
</section>



<section class="action" id="action">
    <h1 class="heading">Bakery/Cake/Dairy</h1>
    <div class="swiper action-slider">
        <div class="swiper-wrapper">



                <div class="swiper-slide">
                    <img src="1.jpg" height="300px" width="300px" >
                    <div class="content">
                        <h3>Fruit Cake</h3>
                        <p>product id:101 <br>
                            product type: Bakery / Cake / Dairy <br>
                            <b> price:&#8377 40.00  </b><br></p>
                        <a href="vm_product.php" class="btn" id="Fruit Cake">BUY</a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <img src="2.jpg" height="300px" width="300px">
                    <div class="content">
                        <h3>Choco Chip</h3>
                        <p>product id:102  <br>
                            product type: Bakery / Cake / Dairy <br>
                            <b> price:&#8377 80.00 </b><br></p>
                        <a href="vm_product.php" class="btn" id="Choco Chip">BUY</a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <img src="3.jpg" height="300px" width="300px">
                    <div class="content">
                        <h3>Apple Pie</h3>
                        <p>product id:103  <br>
                        product type: Bakery / Cake / Dairy <br>
                            <b> price:&#8377 30.00 </b><br></p>
   
                        <a href="vm_product.php" class="btn" id="Apple Pie">BUY</a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <img src="4.jpg" height="300px" width="300px">
                    <div class="content">
                        <h3>Veg Pufs</h3>
                        <p>product id:104  <br>
                            product type: Bakery / Cake / Dairy <br>
                            <b> price:&#8377 15.00</b><br></p>
                           
                        <a href="vm_product.php" class="btn" id="Veg Pufs">BUY</a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <img src="5.jpg" height="300px" width="300px">
                    <div class="content">
                        <h3>Chakli</h3>
                        <p>product id: 105 <br>
                            product type: Bakery / Cake / Dairy <br>
                            <b> price:&#8377 5.00 </b><br></p>
                        <a href="vm_product.php" class="btn" id="Chakli">BUY</a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <img src="6.jpg" height="300px" width="300px">
                    <div class="content">
                        <h3> Croissant</h3>
                        <p>product id: 106 <br>
                            product type: Bakery / Cake / Dairy <br>
                            <b> price:&#8377 120.00</b><br></p>
                
                    
                        <a href="vm_product.php" class="btn" id="Croissant">BUY</a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <img src="7.jpg" height="300px" width="300px">
                    <div class="content">
                        <h3>Nippet</h3>
                        <p>product id: 107 <br>
                            product type: Bakery / Cake / Dairy <br>
                            <b> price:&#8377 12</b><br></p>
                    
                        <a href="vm_product.php" class="btn" id="Nippet">BUY</a>
                    </div>
                </div>

                


</div>
</div>
</section>



<section class="child" id="child">
    <h1 class="heading">Snacks & Brand Food</h1>
    <div class="swiper child-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <img src="18.jpg" height="300px" width="300px">                <div class="content">
                    <br>
                    <h3> Doritios</h3>
                    <p>product id: 301<br>
                        product type:Snacks & Brand Food<br>
                       <b> price:&#8377 30.00</b><br>
                    </p>
                    <a href="vm_product.php" class="btn" id="Doritios">BUY</a>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="19.jpg" height="300px" width="300px">                <div class="content">
                    <h3> Pim's orange</h3>
                    <p>product id: 302<br>
                        product type:Snacks & Brand Food<br>
                       <b> price:&#8377 90.00</b><br>
                    <a href="vm_product.php" class="btn" id="Pim's orange ">BUY</a>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="20.jpg" height="300px" width="300px">                <div class="content">
                    <h3> Nuttle Biscute</h3>
                    <p>product id: 303<br>
                        product type:Snacks & Brand Food<br>
                       <b> price:&#8377 120.00</b><br>
                    <a href="vm_product.php" class="btn" id="Nuttle Biscute">BUY</a>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="21.jpg" height="300px" width="300px">                <div class="content">
                    <h3> Bhati Rusk</h3>
                    <p>product id: 304<br>
                        product type:Snacks & Brand Food<br>
                       <b> price:&#8377 75.00</b><br>
                    <a href="vm_product.php" class="btn" id="Bhati Rusk">BUY</a>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="22.jpg" height="300px" width="300px">                <div class="content">
                    <h3> Butter Biscute</h3>
                    <p>product id: 305<br>
                        product type:Snacks & Brand Food<br>
                       <b> price:&#8377 40.00</b><br>
                    <a href="vm_product.php" class="btn" id="Butter Biscute">BUY</a>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="23.jpg" height="300px" width="300px">                <div class="content">
                    <h3> Lays</h3>
                    <p>product id: 306<br>
                        product type:Snacks & Brand Food<br>
                       <b> price:&#8377 20.00</b><br>
                    <a href="vm_product.php" class="btn" id="Lays">BUY</a>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="24.jpg" height="300px" width="300px">                <div class="content">
                    <h3> Crony</h3>
                    <p>product id: 307<br>
                        product type:Snacks & Brand Food<br>
                       <b> price:&#8377 25.00</b><br>
                    <a href="vm_product.php" class="btn" id="Crony">BUY</a>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="25.jpg" height="300px" width="300px">                <div class="content">
                    <h3> Chipsy</h3>
                    <p>product id: 308<br>
                        product type:Snacks & Brand Food<br>
                       <b> price:&#8377 35.00</b><br>
                    <a href="vm_product.php" class="btn" id="Chipsy">BUY</a>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="26.jpg" height="300px" width="300px">                <div class="content">
                <h3> TosTitos</h3>
                    <p>product id: 309<br>
                        product type:Snacks & Brand Food<br>
                       <b> price:&#8377 15.00</b><br>
                    <a href="vm_product.php" class="btn" id="TosTitos">BUY</a>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="27.jpg" height="300px" width="300px">                <div class="content">
                    <h3> Little Hearts</h3>
                    <p>product id: 310<br>
                        product type:Snacks & Brand Food<br>
                       <b> price:&#8377 25.00</b><br>
                       <a href="vm_product.php" class="btn" id="Little Hearts">BUY</a>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="28.jpg" height="300px" width="300px">                <div class="content">
                    <h3> Maltesers</h3>
                    <p>product id: 311<br>
                        product type:Snacks & Brand Food<br>
                       <b> price:&#8377 55.00</b><br>
                    <a href="vm_product.php" class="btn" id="Maltesers" >BUY</a>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="29.jpg" height="300px" width="300px">                <div class="content">
                    <h3> McVities</h3>
                    <p>product id: 312<br>
                        product type:Snacks & Brand Food<br>
                       <b> price:&#8377 65.00</b><br>
                    <a href="vm_product.php" class="btn" id="McVities">BUY</a>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="30.jpg" height="300px" width="300px">                <div class="content">
                    <h3> Food Locker</h3>
                    <p>product id: 313<br>
                        product type:Snacks & Brand Food<br>
                       <b> price:&#8377 55.00</b><br>
                       <a href="vm_product.php" class="btn" id="Food Locker">BUY</a>
                </div>
            </div>

        </div>
    </div>
</section>






<div class="copyright container">
    <a href="#" class="logo"><img src="vecteezy_vending-machine-icon-style_6070604.jpg" alt="" height="50px" width="30px"></i>Munch Box</a>
</div>


 <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js" defer data-deferred="1"></script>  <script src="main.js" defer data-deferred="1"></script> </body>
 <script>
    document.getElementById("Pepsi").addEventListener("click", function() {
        setSessionVariable("product", "Pepsi");
    });
    
    document.getElementById("Rita").addEventListener("click", function() {
        setSessionVariable("product", "Rita");
    });

    document.getElementById("Mango Juice").addEventListener("click", function() {
        setSessionVariable("product", "Mango Juice");
    });

    document.getElementById("Coco Cola").addEventListener("click", function() {
        setSessionVariable("product", "Coco Cola");
    });

    document.getElementById("Mtn Dew").addEventListener("click", function() {
        setSessionVariable("product", "Mtn Dew");
    });

    document.getElementById("Frijj").addEventListener("click", function() {
        setSessionVariable("product", "Frijj");
    });

    document.getElementById("Monster Energy").addEventListener("click", function() {
        setSessionVariable("product", "Monster Energy");
    });

    document.getElementById("Bai Bubbles").addEventListener("click", function() {
        setSessionVariable("product", "Bai Bubbles");
    });

    document.getElementById("Mtn orange").addEventListener("click", function() {
        setSessionVariable("product", "Mtn Orange");
    });

    document.getElementById("Kaiju Kruch").addEventListener("click", function() {
        setSessionVariable("product", "Kaiju Kruch");
    });

    document.getElementById("Vanilla Coke").addEventListener("click", function() {
        setSessionVariable("product", "Vanilla Coke");
    });

    document.getElementById("Fruit Cake").addEventListener("click", function() {
        setSessionVariable("product", "Fruit Cake");
    });

    document.getElementById("Cho Chip").addEventListener("click", function() {
        setSessionVariable("product", "Cho Chip");
    });

    document.getElementById("Apple Pie").addEventListener("click", function() {
        setSessionVariable("product", "Apple Pie");
    });

    document.getElementById("Veg Pufs").addEventListener("click", function() {
        setSessionVariable("product", "Veg Pufs");
    });

    document.getElementById(" Chakli").addEventListener("click", function() {
        setSessionVariable("product", "Chakli");
    });

    document.getElementById("Croissant").addEventListener("click", function() {
        setSessionVariable("product", "Croissant");
    });

    document.getElementById("Nippet").addEventListener("click", function() {
        setSessionVariable("product", "Nippet");
    });

    document.getElementById("Doritios").addEventListener("click", function() {
        setSessionVariable("product", "Doritios");
    });

    document.getElementById("Pim's orange").addEventListener("click", function() {
        setSessionVariable("product", "Pim's orange");
    });

    document.getElementById("Nuttle Biscute").addEventListener("click", function() {
        setSessionVariable("product", "Nuttle Biscute");
    });

    document.getElementById("Bhati Rusk").addEventListener("click", function() {
        setSessionVariable("product", "Bhati Rusk");
    });

    document.getElementById("Butter Biscute").addEventListener("click", function() {
        setSessionVariable("product", "Butter Biscute");
    });

    document.getElementById("Lays").addEventListener("click", function() {
        setSessionVariable("product", "Lays");
    });

    document.getElementById("Crony").addEventListener("click", function() {
        setSessionVariable("product", "Crony");
    });

    document.getElementById("Chipsy").addEventListener("click", function() {
        setSessionVariable("product", "Chipsy");
    });

    document.getElementById("TosTitos").addEventListener("click", function() {
        setSessionVariable("product", "TosTitos");
    });

    document.getElementById("Little Hearts").addEventListener("click", function() {
        setSessionVariable("product", "Little Hearts");
    });document.getElementById("Maltesers").addEventListener("click", function() {
        setSessionVariable("product", "Maltesers");
    });
    document.getElementById("McVities").addEventListener("click", function() {
        setSessionVariable("product", "McVities");
    });
    document.getElementById("Food Locker").addEventListener("click", function() {
        setSessionVariable("product", "Food Locker");
    });
    
    function setSessionVariable(variableName, value) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "set_session_variable.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                console.log("Session variable set successfully.");
                // var redirectURL = "vm_product.php"
                // if (redirectURL) {
                //     window.location.href = redirectURL;
                // }
            } else {
                console.error("Error setting session variable.");
            }
        }
    };
    xhr.send("variableName=" + encodeURIComponent(variableName) + "&value=" + encodeURIComponent(value));
}

    </script>
 </html>