<?php
    require 'write.php';

    //Account Information
    $username=$_POST['username'];
    $password=$_POST['password'];
    $name=$_POST['name'];
    $uid = mt_rand(10000, 99999);

    require 'signup_duplication.php';

    //Create User Account
    if ($isUser==0 && $isUID==0){
        write("INSERT INTO login (uniqueID,user,password,name) VALUES ('$uid','$username','$password','$name')", 3);
        write("INSERT INTO quiz (uniqueID) VALUES ('$uid')",3);
        header("refresh:1;url=main.php");
    }else{
        echo "Account Already Exists!";
        header("signin.php");
    }

    unset($db);
?>

<!-- Requires write.php -->
