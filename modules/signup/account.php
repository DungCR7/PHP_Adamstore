<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/adamstore/css/account.css">
</head>
<body>
    <?php 
        require_once "modules/background/background.php";
    ?>
    <span class = "body-introduction-background-text">ACCOUNT</span>
    <div class = "body-introduction">
        <div class = "body-introduction-main">
            <div class="container">

            <form id="signup">

                <div class="header">
                
                    <h3>LOG IN</h3>
                    
                    
                </div>
                
                <div class="sep"></div>

                <div class="inputs">
                
                    <input type="email" placeholder="Email" autofocus />
                
                    <input type="password" placeholder="Password" />
                    <a class = "return" href="index.php">Return</a>
                    <a class = "signup" href="index.php?page=signup">Register</a>
                    
                    <a id="submit" href="#">SIGN UP</a>
                
                </div>

            </form>

        </div>



        </div>
    </div>
</body>
</html>