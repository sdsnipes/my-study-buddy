<?php
    $dbhost = '@hostname';
    $dbuser = '@username';
    $dbpass = '@password';
    
    $db = 'studybuddy_db';
    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
    mysql_select_db($db);
?>
