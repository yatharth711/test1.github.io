<?php  
    class user{
        //Properties 
        private $uniqueID;
        private $name;
        private $quizInternet=array();
        private $quizCoding=array();
        private $quizHardware=array();
        private $quizSoftware=array();

        //Constructor
       function __construct($uid,$n,$qr){
            $this->uniqueID = $uid;
            $this->name=$n;
            $this->setQuiz($qr);
        }

        //Methods
        function setQuiz($qr){
            $counter=0;
            for ($i=0;$i<3;$i++){
                $this->quizInternet[$i]=$qr[$counter++];
            }
            for ($i=0;$i<3;$i++){
                $this->quizCoding[$i]=$qr[$counter++];
            }
            for ($i=0;$i<3;$i++){
                $this->quizHardware[$i]=$qr[$counter++];
            }
            for ($i=0;$i<3;$i++){
                $this->quizSoftware[$i]=$qr[$counter++];
            }
        }

        //Get Quiz Methods
        function getInternetQuiz($n){  // (0 = Quiz 1) , (1 = Quiz 2) , (2 = Quiz 3)
            return $this->quizInternet[$n];
        }

        function getCodingQuiz($n){
            return $this->quizCoding[$n];
        }

        function getHardwareQuiz($n){
            return $this->quizHardware[$n];
        }

        function getSoftwareQuiz($n){
            return $this->quizSoftware[$n];
        } 

        function getUID(){
            return $this->uniqueID;
        }

        function getName(){
            return $this->name;
        }

        function toString(){
            echo "Name: ".$this->name;
            echo "<br>UID: ".$this->uniqueID;
            echo "<br>QuizProgress:";
            echo "<br>        Internet Quiz 1: ".$this->getInternetQuiz(0);
            echo "<br>        Internet Quiz 2: ".$this->getInternetQuiz(1);
            echo "<br>        Internet Quiz 3: ".$this->getInternetQuiz(2);
            echo "<br>        Coding Quiz 1: ".$this->getCodingQuiz(0);
            echo "<br>        Coding Quiz 2: ".$this->getCodingQuiz(1);
            echo "<br>        Coding Quiz 3: ".$this->getCodingQuiz(2);
            echo "<br>        Hardware Quiz 1: ".$this->getHardwareQuiz(0);
            echo "<br>        Hardware Quiz 2: ".$this->getHardwareQuiz(1);
            echo "<br>        Hardware Quiz 3: ".$this->getHardwareQuiz(2);
            echo "<br>        Software Quiz 1: ".$this->getSoftwareQuiz(0);
            echo "<br>        Software Quiz 2: ".$this->getSoftwareQuiz(1);
            echo "<br>        Software Quiz 3: ".$this->getSoftwareQuiz(2);
        }
        
    }
?>