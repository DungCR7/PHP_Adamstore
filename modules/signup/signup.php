

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/adamstore/css/signup.css">
</head>
<body>
    abc
<?php 
    // Hiển thị các danh mục
    $sqlCustomer = "SELECT * FROM customer";
    $reultsCustomer = mysqli_query($conn, $sqlCustomer);
    // thêm sản phẩm
    // if(isset($_POST['sbm'])){
    //     if(empty($_POST['customer_name'])){
    //         echo "Không thấy tài khoản";
    //     }else{
    //         $customer_name = $_POST['customer_name'];
    //     }
    //     $customer_mail = $_POST['customer_mail'];
    //     $customer_pass = $_POST['customer_pass'];
    //     $customer_address = $_POST['customer_address'];
    //     $customer_phone = $_POST['customer_phone'];
    //     $sqlInsert = "INSERT INTO customer (customer_name, customer_mail, customer_pass, customer_address, customer_phone) VALUES
    //     ('$customer_name', '$customer_mail', '$customer_pass', '$customer_address', '$customer_phone')";
    
    //     if(mysqli_query($conn, $sqlInsert)) {
    //         header("location: index.php?page=account");
    //     }else{
    //         echo "<script>alert('Thêm sản phẩm không thành công');</script>";
    //         // header("location: index.php?page=signup");
    //     }
        
    // }

    
?>
    <?php 
        require_once "modules/background/background.php";
    ?>
    <span class = "body-introduction-background-text">CREATE ACCOUNT</span>
    <div class = "body-introduction">
        <div class = "body-introduction-main">
            <div class="container">

            <form id="signup" method="POST" class="form" enctype="multipart/form-data" role="form" action="modules/signup/add_signup.php">

                <div class="header">
                
                    <h3>CREATE ACCOUNT</h3>
                    
                    
                </div>
                
                <div class="sep"></div>

                <div class="inputs">
                    
                        <div class = "form-group">
                            <span id="fullname-error" class="error"></span>
                            <input type="text" placeholder="First & Last name" id="customer_name" name="customer_name" rules="required" class="form-control" />
                            
            
                        </div>
                        <div class = "form-group">
                            <span id="email-error" class="error"></span>
                            <input type="email" placeholder="Email" id="customer_mail" name="customer_mail" rules="required|email" class="form-control" autofocus />
                            
                
                        </div>
                        <div class = "form-group">
                            <span id="password-error" class="error"></span>
                            <input type="password" placeholder="Password" id="customer_pass" name="customer_pass" rules="required|min:6" class="form-control" />
                            
                            
                        </div>
                        <div class = "form-group">
                            <span id="confirmpassword-error" class="error"></span>
                            <input type="password" placeholder="Confirm Password" id="confirmpassword" name="confirmpassword" rules="required|min:6" class="form-control" />
                            
                        </div>
                        <div class = "form-group">
                            <span id="tel-error" class="error"></span>
                            <input type="tel"pattern="[0-9]{4}[0-9]{3}[0-9]{3}" placeholder="Telephone" id="customer_phone" name="customer_phone" rules="required|number" class="form-control">
                           
        
                        </div>
                        <div class = "form-group">
                            <span id="address-error" class="error"></span>
                            <input type="text" placeholder="Address" id="customer_address" name="customer_address" rules="required" class="form-control"/>
                            
                            
                        </div>
                        <a class = "return" href="index.php">Return</a>
                        <button class = "form-submit" id="submit" type = "submit" name="sbm" onclick="return save();">SIGN UP</button>
                        <!-- <button id="submit" href="#" onclick="return validate();">SIGN UP</button> -->
                        <!-- <button><a id="submit" href="#" onclick="return save();">SIGN UP</a></button> -->
                 
                
                </div>

            </form>

        </div>



        </div>
    </div>
    <script src='https://cdn.jsdelivr.net/g/lodash@4(lodash.min.js+lodash.fp.min.js)'></script>
    <script src="/adamstore/js/validator.js"></script>
</body>
</html>