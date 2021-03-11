<?php
    //Required Files
    require 'write.php';
    require 'login_class.php';
    require 'functionality.php';

    //Session Start
    if(!isset($_SESSION)){ 
        session_start(); 
    } 

    //Getting Username And Password From Form 
    $username=$_POST['username'];
    $password=$_POST['password'];

    //Debug Variables
    //$username="cosc101";
    //$password="cosc101ftw";

    //Checking Credentials
    if (checkDetails($username,$password)){
        writeObj($username);
        saveWriterQuiz();
        header("refresh:1;url=main.php");
    }else{
        echo "<script>alert('Incorrect Username Or Password')</script>";
        header("refresh:1;url=login.php");
    }

    // Debuggning - Tests To See If Session Is Working
    //echo $_SESSION['user'] -> toString(); 
?>


<!-- Create class 'login' and style it -->
<!-- requires write.php, login_class.php, functionality.php -->