<?php

include('connect.php');
session_start();

    $errors=[];
    
    if(count($_POST)>0) {
    
        $username = $_POST["username"];
        $password = $_POST["password"];
        $findme   = 'admin';
        $post = strpos( $username , $findme);

        $conn = mysqli_connect($host, $db_username, $db_password, $database) or die("Database connection not established.");
        if($conn) {
            if ($post === false) {

                $query  = "SELECT * FROM sys_user_login 
                           WHERE USER_NAME = '{$username}' AND USER_PASSWORD = '{$password}' AND USER_DESCR LIKE '%admin%' ";

            } else {
    
                $query  = "SELECT * FROM sys_user_login 
                           WHERE USER_NAME = '{$username}' AND USER_PASSWORD = '{$password}'";

            }

            $result = mysqli_query($conn,$query);
            $count  = mysqli_num_rows($result);
          
            if($count==0) {
                $errors[] = "Invalid Username or Password!";
            } else {       
                $_SESSION['username'] = $username;
                header("location: index.php");
                exit(0);
            }

        } else {
                
            $errors[] = "Cannot connect to db";
        }
    }

?>
