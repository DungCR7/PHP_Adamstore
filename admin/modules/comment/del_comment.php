<?php 
    session_start();
    if($_SESSION['user_login']){
        define("ISLOGGED",true);
        include_once "../../../config/connectDB.php";
        if($_GET['comm_id']){
            $comm_id=$_GET['comm_id'];
            $sql_delete= "DELETE from comment where comm_id  = $comm_id  ";
            mysqli_query($conn,$sql_delete);
            header("location: /adamstore/admin/index.php?page=comment");
        }

    }

?>