<?php
    include '../includes/connection.php';
    
    $id = $_GET['id'];
    $descr = $_POST['description'];
    $course = $_POST['course'];
    $assigType = $_POST['assignment-type'];
    $dueDate = $_POST['due-date'];
    $dueTime = $_POST['due-time'];
    $prior = $_POST['priority'];
    $comments = $_POST['comments'];
    
    mysql_query("UPDATE assignments SET Description='$descr', Course='$course', Type='$assigType', Date='$dueDate', Time='$dueTime', Priority='$prior', Comments='$comments' WHERE ID='$id'");
    echo "Assignment Edited!";
    header("Location: index.php");
?>