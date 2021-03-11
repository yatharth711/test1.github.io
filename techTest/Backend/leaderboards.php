<?php  
    $db = new SQLite3('info.db'); //DB name/Location
    $sql="SELECT uniqueID, coding1 , coding2 , coding3 , hardware1 , hardware2 , hardware3 , software1 , software2 , software3 , internet1 , internet2 , internet3,sum(coding1 + coding2 + coding3 + hardware1 + hardware2 + hardware3 + software1 + software2 + software3 + internet1 + internet2 + internet3) as score FROM quiz GROUP BY uniqueID";
    $sql2="SELECT name FROM login";
    $results = $db -> query($sql); 
    $res = $db -> query($sql2);
    $score = array();
    $name = array();
    $i=0;
    while ($row = $results->fetchArray(SQLITE3_ASSOC)){
       $score[$i++] = $row['score'];
    }
    $i=0;
    while ($row = $res->fetchArray(SQLITE3_ASSOC)){
        $name[$i++] = $row['name'];
    }
    $j=0;
    while ($j<$i){
        if ($score[$j]!=""){
            echo ("<tr><td>".$name[$j]."</td><td>".$score[$j]."</td></tr>"); 
        }
        $j++;
   }
?>