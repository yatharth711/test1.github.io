<?php
    function write($sql,$option){ // Method Header
        $db = new SQLite3('info.db'); //DB name/Location
        if (!$db-> query($sql)){ //Checks To See If DB Transaction is Successful
            if ($option==1)
                echo("Results Not Saved! Server Error");
            else if($option==2)
                echo("Reading Progress Not Saved! Server Error");
            else 
                echo("Server Error!");
        } 
        unset($db);
    }

    function checkDetails($user,$pass){
        $sql="SELECT (password) FROM login WHERE user='$user'";
        $db = new SQLite3('info.db'); //DB name/Location
        $results = $db -> query($sql); 
        while ($row = $results->fetchArray(SQLITE3_ASSOC)){
            if ($pass==$row['password'])
                return true;
            else
                return false;
        }
        return false;
        unset($db);
    }

    function writeObj($user){
        $db = new SQLite3('info.db'); //DB name/Location

        //Login
        $sql="SELECT uniqueID,name FROM login WHERE user='$user'";
        $results = $db -> query($sql); 
        while ($row = $results->fetchArray(SQLITE3_ASSOC)){
            $uid=$row['uniqueID'];
            $name=$row['name']; 
        }

        //Quiz
        $sql="SELECT * FROM quiz WHERE uniqueID='$uid'";
        $results = $db -> query($sql); 
        $qr=array();
        while ($row = $results->fetchArray(SQLITE3_ASSOC)){
            $qr[0]=$row['internet1'];
            $qr[1]=$row['internet2'];
            $qr[2]=$row['internet3'];
            $qr[3]=$row['coding1'];
            $qr[4]=$row['coding2'];
            $qr[5]=$row['coding3'];
            $qr[6]=$row['hardware1'];
            $qr[7]=$row['hardware2'];
            $qr[8]=$row['hardware3'];
            $qr[9]=$row['software1'];
            $qr[10]=$row['software2'];
            $qr[11]=$row['software3'];
        }

        //Creating Obj
        $user=new user($uid,$name,$qr);
        $_SESSION['user']=$user;

        unset($db);
    }
?>