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
            <p class="text-justify" style="margin-left: 100in;"> <h2 style="text-align: center;"><b> What is the Internet?</b></h2>
            A system architecture that has revolutionized 
             communications and methods of commerce by allowing various computer networks, according to Britannica. In simple terms
             it is a method of communication which is done by the help of computers.<br> To understand what the internet, we need to understand the 
             basic fundamentals of communication, the various forms of <b> Communication, Internet Protocol, Domain Knowledge and Client Server architecture.</b> <br> <b>In this module we shall begin with the concept of Communication and Types of Communication</b></p></div>        
              
            </div>
              <hr>
              <div class="container">
              <h2><p style="text-align: center;"><strong><u>Communication</strong></u></p></h2>
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="content/img1.png" alt="Communicationimg">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><strong>What is Communication?</strong></h4>
              <ul>
                
              <li style="text-align: left;"><strong>Communication&nbsp;</strong>an acting of sending and receiving information</li>
              <li style="text-align: left;">This act of communication occurs between a sender and receiver,
              <ul>
              <li style="text-align: left;"><strong>Sender:&nbsp;</strong>is responsible for sending out information</li>
              <li style="text-align: left;"><strong>Receiver: </strong>is the one who reaches out to gather the information sent by the sender</li>
              </ul>
              </li>
              <li style="text-align: left;">Thus, in this process of sending and receiving, we must make communication more effective, and this can be done by :
              <ul>
              <li style="text-align: left;">accepting a <strong>medium</strong> that is acceptable by both parties. For Example: if both decide to send letters, email or call each other etc.</li>
              <li style="text-align: left;">Accepting a common <strong>language&nbsp;</strong>for the information to be shared. For example: if both parties decide to communicate in French,</li>
              <li style="text-align: left;">Following a set <strong>protocol</strong> or rules which both parties can accept to make communication more efficient. For Example: If the sender says "Hi," the receiver must reply with a "Hi" to start with</li>
             <br>
              <p style="text-align: center;"><strong> Communication is the heart and soul purpose of the internet, and by following these basic concepts and fundamentals</strong></p>
              </ul>
              </li>
              </ul>
              
             </div>
              </div>
             </div>
             <hr>
             <div class="container">
              <h2><p style="text-align: center;"><strong><u>Types of Communication</strong></u></p></h2>
              <h2><p style="text-align: center;"><strong><u></strong></u></p></h2>
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="content/img2.png" alt="Communicationimg">
                  </a>
                </div>
                
                <div class="media-body">
                  <h4 class="media-heading"><strong>The Four Types of Communication</strong></h4>
                  <ol>
                    <li><strong>Asynchronous Communication</strong>: a style of communication when the sender and receiver are interchanging information at different times. Example: email, zoom etc.</li>
                    <li><strong>Synchronous Communication:&nbsp;</strong>a style of communication that involves the sender and receiver to be present at the same time for the information to be interchanged. Example: telephone calls, instant messaging etc.&nbsp;</li>
                    <li><strong>Broadcast Communication </strong>is a style where there involve a single sender and multiple receivers at a given point. Example: television, uploading images on social media etc.</li>
                    <li>&nbsp;<strong>Point-Point Communication:&nbsp;</strong>is a style where there are only a single sender and a single receiver. Example: telephone calls, direct messaging etc.&nbsp;</li>
                    </ol>
              <hr>
              </ul>
              </li>
              </ul>
            
             </div>
              </div>
             </div>
             <footer class="footer" >
              <div class="container">
          <p style="text-align:right;"> <a  href="http://localhost/techTest/Backend/main_quiz.php?quiz=qt_internet1&subject=internet&quiznum=1">Next-></a></p>
              
            </div>           

             </footer>
             <br>
             <hr>
    </BODY>

</HTML>