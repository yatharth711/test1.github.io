<?php
    //Starting Session
    if(!isset($_SESSION)){ 
        session_start(); 
    } 

    //Variable Declaration
    $correctAnswers=0;       
    $incorrect=0;            
    $que=0;                   

    //Variables Grabbed From Session
    $filePath=$_SESSION['file']; //Gets file path from URL
    $subject=$_SESSION['subject']; //Gets Subject
    $quizNum=$_SESSION['quiznum']; //Gets Quiz Number

    //Combining Subject And Quiz Number To Find Quiz 
    $quizID=$subject.$quizNum;

    //Creation Of File Object
    $file = fopen($filePath, "r");
    
    //While Loop To Get Questions And Then Compare Answers
    while (($row = fgetcsv($file, 0, ",")) !== FALSE) { 
        if ($que!=0){
            $answer = $row[5];
            $enteredAnswer = $_POST[$que];
            if ($answer == $enteredAnswer)
                $correctAnswers+=1;
            else if($enteredAnswer!=$answer)
                $incorrect+=1;

            //echo "<br>".$answer." - ".$enteredAnswer."<br><br>"; // Test Checker

        }
        $que+=1;
    }

    //Display Outcome Of The Quiz
    echo "<div class='answer'> You Got ".$correctAnswers." Answers Right!</div>";
    echo "<div class='answer'> You Got ".$incorrect." Answers Wrong!</div>";

    //Check To See If User Is Logged In By Checking For A User Object
    if(isset($_SESSION['user'])){
        $user=$_SESSION['user'];  //Get User Object, Created Only After Sign In
        $sql="UPDATE quiz SET $quizID = $correctAnswers WHERE uniqueID='".$user->getUID()."'";
        //echo $sql;
        write($sql,0);           //Writer to Write Results Into DB
    }else{
        echo  "<div class='signIn'>Please Sign In To Save Progress</div>";
        save($correctAnswers);
    }
?>

<!--Create a class named answer and style it --> 
<!--Create a class named signIn abd style it -->
<!--Requires write.php, login_class.php, functionality.php-->