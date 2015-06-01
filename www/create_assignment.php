<?php
    include '../includes/connection.php';
    
    $descr = $_POST['description'];
    $course = $_POST['course'];
    $assigType = $_POST['assignment-type'];
    $dueDate = $_POST['due-date'];
    $dueTime = $_POST['due-time'];
    $prior = $_POST['priority'];
    $comments = $_POST['comments'];
    
    mysql_query("INSERT INTO assignments (`ID`,`Description`,`Course`,`Type`,`Date`,`Time`,`Priority`,`Comments`)
                 VALUES(NULL,'$descr','$course','$assigType','$dueDate','$dueTime','$prior','$comments')") or die(mysql_error());
    echo "Assignment added!";
    header("Location: index.php");
?>