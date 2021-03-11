<?php 
              require 'write.php';
              require 'login_class.php';
              require 'functionality.php';
?>
<HTML>
    <HEAD>
        <TITLE>Internet</TITLE>
        <link rel="stylesheet" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="read.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
        <style>@import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');</style>
       
        
    </HEAD>
    
    <BODY>
      <a class="navbar-brand" href="#">
        <img alt="Brand" src="./content/logo.png">
      </a>
       <a href="main.php"> <div style="font-family: 'Righteous', cursive; font-size: 300%; text-align: center;text-decoration-color: black;"> Tech4Dummies </div></a>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
             
            <ul class="nav navbar-nav">
                <li class="active"><a href="main.php">Home</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Software<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="sw1.php">Software Part 1</a></li>
                    <li><a href="main_quiz.php?quiz=qt_software1&subject=software&quiznum=1">Software Quiz 1</a></li>
                    <li><a href="sw2.php">Software Part 2</a></li>
                    <li><a href="main_quiz.php?quiz=qt_software2&subject=software&quiznum=2">Software Quiz 2</a></li>
                    <li><a href="sw3.php">Software Part 3</a></li>
                    <li><a href="main_quiz.php?quiz=qt_software3&subject=software&quiznum=3">Software Quiz 3</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Coding<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="cd1.php">Coding Part 1</a></li>
                      <li><a href="main_quiz.php?quiz=qt_coding1&subject=coding&quiznum=1">Coding Quiz 1</a></li>
                      <li><a href="cd2.php">Coding Part 2</a></li>
                      <li><a href="main_quiz.php?quiz=qt_coding2&subject=coding&quiznum=2">Coding Quiz 2</a></li>
                      <li><a href="cd3.php">Coding Part 3 </a></li>
                      <li><a href="main_quiz.php?quiz=qt_coding3&subject=coding&quiznum=3">Coding Quiz 3</a></li>
                    </ul>
                  </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Hardware<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="hw1.php">Hardware Part 1</a></li>
                      <li><a href="main_quiz.php?quiz=qt_hardware1&subject=hardware&quiznum=1">Hardware Quiz 1</a></li>
                      <li><a href="hw2.php">Hardware Part 2</a></li>
                      <li><a href="main_quiz.php?quiz=qt_hardware2&subject=hardware&quiznum=2">Hardware Quiz 2</a></li>
                      <li><a href="hw3.php">Hardware Part 3</a></li>
                      <li><a href="main_quiz.php?quiz=qt_hardware3&subject=hardware&quiznum=3">Hardware Quiz 3</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Internet<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="it1.php">Internet Part 1</a></li>
                      <li><a href="main_quiz.php?quiz=qt_internet1&subject=internet&quiznum=1">Internet Quiz 1</a></li>
                      <li><a href="it2.php">Internet Part 2</a></li>
                      <li><a href="main_quiz.php?quiz=qt_internet2&subject=internet&quiznum=2">Internet Quiz 2</a></li>
                      <li><a href="it3.php">Internet Part 3</a></li>
                      <li><a href="main_quiz.php?quiz=qt_internet3&subject=internet&quiznum=3">Internet Quiz 3</a></li>
                    </ul>
                </li>
              </ul>
              <?php if(isset($_SESSION['user'])){
                  echo '<ul class="nav navbar-nav navbar-right"><li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li><li><a href=""><span class="glyphicon glyphicon-user"></span> '.$_SESSION['user']->getName().' </a></li></ul>';

              }else{
              echo'
              <ul class="nav navbar-nav navbar-right">
                <li><a href="logup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>';
              }
              ?>
            </div>
          </nav>
          <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">
                <a class="jumbotron-fluid" href="#">
                  <img alt="Brand" src="./content/it.png">
                </a>The Internet</h1>
              <p style="text-align: center;" class="lead">We shall learn the basics of internet and it's components</p>
            </div>
          </div>
          <div id="title">
            <p class="text-justify" style="margin-left: 100in;"> <h2 style="text-align: center;"><b> Internet Protocol and Domains</b></h2>
             In this module we shall focus on <strong> The Internet Protocol and the Domains</strong ></p></div>        
              
            </div>
          
          
              <hr>
              <div class="container">
              <h2><p style="text-align: center;"><strong><u>Internet Protocol(IP)</strong></u></p></h2>
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="content/img3.png" alt="IP">
                  </a>
                </div>
                <div class="media-body">
                    
                    <h4 class="media-heading"><strong>What is Internet Protocol?</strong></h4>
                    <ul>
                    <li style="text-align: left;"><strong>Internet Protocol or IP&nbsp;</strong>is a unique number sequence given to computers on the internet, which gives them an identity. IP is given out as addresses or more commonly known as IP addresses.&nbsp;</li>
                    <li style="text-align: left;">There&nbsp; are two types of IP addresses:
                    <ul>
                    <li style="text-align: left;">IPv4: where there are 4 numbers separated by dots, these numbers range from 0 to 255. Example: 123.236.25.102</li>
                    <li style="text-align: left;">IPv6: where there are 16 numbers separated by dots, and this follows more complex patterns, which included numbers from 0 to 255 and hexadecimal numbers. This new address was implemented after the number of computers on the internet increased. Example: : 2001:AD57:25B2:0000:0000:0000:AJ57:2BS2</li>
                    </ul>
                    </li>
                    <li style="text-align: left;">An IP address acts like telephone numbers for computers on the internet, which makes it easier for computers to communicate with each other.</li>
                    <li style="text-align: left;">IP addresses exist on any type of computers, which include phones, Smart TVs, laptops etc.&nbsp;</li>
                    </ul>
              
             </div>
              </div>
             </div>
             <hr>
             <div class="container">
              <h2><p style="text-align: center;"><strong><u>Domains</strong></u></p></h2>
              <h2><p style="text-align: center;"><strong><u></strong></u></p></h2>
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="content/img4.jpg" alt="Communicationimg">
                  </a>
                </div>
                
                <div class="media-body">
                    <h4 class="media-heading"><strong>What is a domain?</strong></h4>
                    <ul>
                    <li>IP addresses are very long and difficult to remember or work with, thus we have a simpler way to give addresses to computers ie. Domain Names</li>
                    <li>Domain names are given based on simple English terms and thus make it easier for understanding</li>
                    <li>They are divided hierarchically and thus the larger the domain is the right position is. For Example sales.ajax.com or accounts.GS.us</li>
                    <li>The Higher level domains are mostly:
                    <ul>
                    <li>.com - commercial organizations</li>
                    <li>.edu - educational institutions</li>
                    <li>.org - Non-profit organizations</li>
                    <li>.net - networks</li>
                    <li>.mil - military</li>
                    <li>.gov - government website</li>
                    <li>.us or. in - United States domain or Indian domain</li>
                    </ul>
                    </li>
                    <li>These are the standard higher-ranked domains used where users have options to add other domains under them.&nbsp;</li>
                    <li>After 2011, there was freedom to make their own higher domains, this is regulated by the ICANN or Internet Corporation for Assigned Names and Numbers</li>
                    </ul>
              <hr>
              </ul>
              </li>
              </ul>
            
             </div>
              </div>
             </div>
             <footer class="footer" >
              <div class="container">
          <p style="text-align:right;"> <a  href="http://localhost/techTest/Backend/main_quiz.php?quiz=qt_internet2&subject=internet&quiznum=2">Next-></a></p>
              
            </div>           

             </footer>
             <br>
             <hr>
    </BODY>

</HTML>