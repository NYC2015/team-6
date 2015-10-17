
<source lang="php">
<?php
    //connect to database
    
    $user = " ";
    $password = " ";
    $db ="team6_FTC";
    $host = " ";
    $port =  ;
    
    //create connection
    $conn= mysql_connect("$host:$port","$user","$password") or die (mysql_error());
    mysql_select_db($db,$conn) or die (mysql_error());
    
    
?>
   </source>
