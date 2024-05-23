<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .body{
            height: 100vh;
            
            
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            background-color:rgb(113,113,125);
            background-image:url(https://cdna.artstation.com/p/assets/images/images/010/612/194/original/nelson-wu-04-vending-machine-mk-iii.gif?1525325743);
            background-repeat: no-repeat;
            background-size: contain;
            background-position-x: 100px;
        }
        .formholder{
       
            padding: 10px;
            height: 100vh;
            width: 460px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: bolder;
            background-color:rgb(213,225,227);
            
            box-shadow: 0px 0px 20px rgba(0,0,0,0.4);
            position: absolute;
            left: 720px;
            top: 0px;
            
        }
        .formitems{
            

            padding: 10px 20px;
            width: 320px;
            margin: 3px;
            display: flex;
            justify-content: space-evenly;
            flex-direction: column;
            padding: 10px;
            position: relative;
            left: 60px;
            top: 30px;
        }
        .mer,.eve{
            text-decoration: none;
            color: rgb(113,113,125);
            font-size: small;
            font-weight: lighter;
            transition: ease all 0.8s;
        }
        .mer:hover{
            color: rgb(119,158,238);
            width:max-content;
            
        }
        button{
            background-color: rgb(119,158,238);
            padding: 10px;
            border: none;
            outline: none;
            border-radius: 5px;
            transition: ease all 0.8s;
          
        }
        button:hover{
            background-color:rgb(89, 130, 213);
            
            
        }
        center{
            text-decoration: none;
            color: whitesmoke;
            font-size: small;
            font-weight: lighter;
        }
        input{
            background-color: rgba(187, 196, 198, 0.6);
            padding: 9px;
            color: rgb(0, 0, 0);
            border-radius: 5px;
            border:1px solid rgb(119,158,238);
            

        }
        input:hover{
            background-color:rgba(187, 196, 198, 0.8) ;
        }
        span{
            position: fixed;
            bottom: 10px;
            right: 10px;
            background-color:  rgb(119,158,238);
            border-radius: 20px;
        }
        img{
            height: 25px;
            width: 25px;
            transition: ease all 0.9s;

        }
        img:hover{
            background-color: rgb(119,158,238) ;
            border-radius: 20px;
            
        }
        .hr-text {
  line-height: 1em;
  position: relative;
  outline: 0;
  border: 0;
  color: black;
  text-align: center;
  height: 1.5em;
  opacity: .5;
  &:before {
    content: '';
   
    background: linear-gradient(to right, transparent,rgb(113,113,125), transparent);
    position: absolute;
    left: 0;
    top: 50%;
    width: 100%;
    height: 1px;
  }
  &:after {
    content: attr(data-content);
    position: relative;
    display: inline-block;
    color: black;

    padding: 0 .5em;
    line-height: 1.5em;
   
    color:rgb(113,113,125);
    background-color:rgb(213,225,227);
  }
}
            
        
    </style>
</head>
<body>
    <div class="body">
        <div class="container">
            
            <div class="formholder">
                <form action="vm_signup.php" method="post">
                    <h2 ><center style="position: relative;color: rgb(119,158,238);font-size:50px;font-weight: bolder;">MUNCH BOX</center></h2>
                    
                   
                    
                    <div class="formitems">
                        <label for="username" style="color:rgb(113,113,125);margin-bottom: 5px;">Username:</label>
                        <input type="text" id="username" placeholder="Username" name="username">
                    </div>
                    <div  class="formitems">
                        <label for=" Name" style="color:rgb(113,113,125);margin-bottom: 5px;"> Name:</label>
                        <input type="text" id=" Name" placeholder="Enter your Name" name="name">
                    </div>
                    <div class="formitems">
                        <label for="Email Id" style="color:rgb(113,113,125);margin-bottom: 5px;">Email Id:</label>
                        <input type="email" id="Email Id" placeholder="Enter your email id" name="email">

                    </div>
                    <div class="formitems">
                        <label for="password" style="color:rgb(113,113,125);margin-bottom: 5px;">Password:</label>
                        <input type="password" id="password" placeholder="Password" name="password" >
                
                    </div>
                 
                    <div class="formitems">
                        <button type="submit" value="send" name="send">Sign Up!</button><br>
                        <!-- <input type="submit" value="submit" class="btn" name="send"> -->
                        <hr class="hr-text" data-content="or">
                        <div style="position: relative;top: 10px;">
                        <p ><center style="color:rgb(113,113,125);">have an account?</center></p>
                        <a href="login.php" class="eve"><center style="color:rgb(119,158,238) ;"> Log in!</center></a>
                    </div>
                    <span>
                        <a href=""><img src="https://cdn-icons-png.flaticon.com/128/1660/1660165.png" alt=""></a>
                    </span>

                    </div>
                </form>
            </div>
        </div>

    </div>
</body>
</html>