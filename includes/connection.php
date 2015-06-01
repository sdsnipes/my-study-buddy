<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    
    $db = 'studybuddy_db';
    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
    mysql_select_db($db);
?>