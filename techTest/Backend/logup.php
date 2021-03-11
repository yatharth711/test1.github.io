<?php 
              require 'write.php';
              require 'login_class.php';
              require 'functionality.php';
?>
<HTML>
    <HEAD>
        <TITLE>Tech4Dummies</TITLE>
        <link rel="stylesheet" href="login.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
        <style>@import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');</style>
    </HEAD>
    
    <BODY>
        <div style="font-family: 'Righteous', cursive; font-size: 300%; text-align: center;"> Tech4Dummies </div>
        
        <div>
        <form method='POST' action="signup.php">
          <label for="fname">Username</label>
          <input type="text" id="username" name="username" placeholder="Username...">

          <label for="lname">Password</label>
          <input type="text" id="password" name="password" placeholder="Password...">

          <label for="lname">Name</label>
          <input type="text" id="name" name="name" placeholder="Name...">
        
          <input type="submit" value="Sign Up">
        </form>
      </div>
    </BODY>

</HTML>