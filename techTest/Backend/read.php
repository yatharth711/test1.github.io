<?php
    //Starting Session
    if(!isset($_SESSION)){ 
        session_start(); 
    } 
    
    //Checking If .CSV Exists In The Folder
    if (empty($_GET) || !file_exists("quiz\\".$_GET['quiz'].".csv")){
        echo "<div class = 'error404'> Error 404 <br> Webpage Unavailable <br> Redirecting To Home Page</div>";
        header("refresh:5;url=main.php");
    }else{ //If It Does It Will Read It And Output The Questions And Answers

        //Checking if User is logged in
        if(isset($_SESSION['user'])){
            $user=$_SESSION['user'];  //Get User Object, Created Only After Sign In
            $quiznum=$_GET['quiznum']; //Quiz Number
            $subject=$_GET['subject']; //Quiz Subject
            $quiz=$subject.$quiznum; //Determine which Quiz
            
            //SQL
            $db = new SQLite3('info.db'); //DB name/Location
            $sql="SELECT $quiz FROM quiz WHERE uniqueID='".$user->getUID()."'";
            $results = $db -> query($sql); 
            while ($row = $results->fetchArray(SQLITE3_ASSOC)){
                $score = $row[$quiz];
            }
            
            //Display Result
            echo "<pre class='infobox'>Your Score For The Previous Attempt Was $score</pre>";
        }
        
        //File Path And Object Created
        $filePath="quiz\\".$_GET['quiz'].".csv"; //Gets file path from URL
        $file = fopen($filePath, "r"); //Creating File Object
        
        //While Loop To Set Questions And Answers
        $fname=0;
        while (($row = fgetcsv($file, 0, ",")) !== FALSE) { 
            if ($fname!=0){
                echo "<div class='qb'>                 
                        <p class='qp'>".$row[0]."<br></p>
                        <input name=".$fname." type='radio' value='A' class='qi' required> ".$row[1]."<br>
                        <input name=".$fname." type='radio' value='B' class='qi' required> ".$row[2]."<br>
                        <input name=".$fname." type='radio' value='C' class='qi' required> ".$row[3]."<br>
                        <input name=".$fname." type='radio' value='D' class='qi' required> ".$row[4]."<br>
                    </div>";
            }
        $fname++;   
        }

        //Submit Button That Will Submit The Form
        echo "<input type='submit' value='Submit' class='sb'>";

        //Session Variables To Transfer Data To The Coming Pages
        $_SESSION['file']=$filePath;
        $_SESSION['subject']=$_GET['subject'];
        $_SESSION['quiznum']=$_GET['quiznum'];
    }
?>

<!-- NOTES -->

<!-- Ensure that when page is loaded, there is a GET operation to get name of file with question and answers(URL encoding) -->

<!-- Create error404 CSS class in order to enhance that DIV -->
<!-- Create CSS class qb(Question Block),qp(Question Paragraph),qi(Question Input),sb(Submit Button) make sure the same names are used for the CSS classes -->
<!-- *Ensure Question Block has padding so theres space between the questions/question blocks -->
<!-- *Optionally Add some styling to the Question Paragraph to differentiate -->
<!-- *Ensure Question Input has padding and space between each option -->
<!-- *Ensure Submit Button has style and padding so that it is not right next to the last question printed -->

<!-- ** ENSURE THERE IS A MESSAGE TO THE USER TO SIGN IN -->