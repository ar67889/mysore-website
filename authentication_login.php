<?php      
    include "connection.php";

    if(isset($_POST["submit"])) {
        $email = $_POST["t1"];  
        $password = $_POST["t2"];

        $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        if($count == 1){  
            header("location:after_login.php"); 
        }  
        else{  
            header("location:login_failed.php");  
        }
        $con->close();
    }
?>