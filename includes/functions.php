<?php
    include 'connection.php';
    
    function getAssignments() {
        $query = "SELECT * FROM assignments ORDER BY Date ASC, Time ASC";
        $result = mysql_query($query) or die(mysql_error());
        
        echo json_encode($result);
        if (strcmp(json_encode(mysql_fetch_array($result)), "false") == 0) {
            echo "<div align=\"center\" class=\"todo-item-low\"><strong>You don't have any more tasks, lucky you!</strong></div>";
        } else {
            mysql_data_seek($result, 0);
        }
        
        while($assignment = mysql_fetch_array($result)) {
            $id = $assignment['ID'];
            $description = $assignment['Description'];
            $course = $assignment['Course'];
            $type = $assignment['Type'];
            $date = $assignment['Date'];
            $time = $assignment['Time'];
            $priority = $assignment['Priority'];
            $comments = $assignment['Comments'];
            
            $datestamp = date('m/d/Y',strtotime($date));
            $timestamp = date('h:i A', strtotime($time));
            
            $class_name = "";
            
            if ( $priority == 1 ){
                $class_name = "todo-item-low";
            } elseif ( $priority == 2 ) {
                $class_name = "todo-item-med";
            } elseif ( $priority == 3 ) {
                $class_name = "todo-item-high";
            }
            
            echo "<div class=\"$class_name\"><strong>Description:</strong> $description";
            echo "<p class =\"alignright\"><strong>Due:</strong> $datestamp <strong> - </strong>$timestamp</p>";
            echo "<p><strong>Type:</strong> $type </p>";
            echo "<p class =\"alignleft\"><strong>Course:</strong> $course</p>";
            echo "<p class =\"alignright\"> <a href=\"modify_assignments.php?id=".$id."\"><img src=\"/img/edit.png\"></a>";
            echo "<a href=\"delete_assignment.php?id=".$id."\"> <img src=\"/img/delete.png\"></a> </p>";
            echo "</div>";
            echo "<br/>";
        }
    }
    
    function deleteAssignment($id) {
        $id = (int)$id;
        mysql_query("DELETE FROM assignments WHERE ID = '$id'") or die(mysql_error());
        header("Location: index.php");
    }
    
    function getAssignmentToEdit($id) {
        $id = (int)$id;
        $query = mysql_query("SELECT * FROM assignments WHERE ID = '$id'") or die(mysql_error());
        return mysql_fetch_assoc($query);
    }
?>