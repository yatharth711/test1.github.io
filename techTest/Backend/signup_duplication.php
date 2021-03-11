<?
    //Database Variables and Duplication Verification
        $db = new SQLite3('info.db'); //DB name/Location
        $sqlUser = "SELECT COUNT (*) as count FROM login where user='$username'";
        $sqlUID = "SELECT COUNT (*) as count FROM login where user='$uid'";
        $isUser = $db -> querySingle($sqlUser); //Result 
        $isUID = $db -> querySingle($sqlUID);
?>

<!-- Requires to be added to the page with the 