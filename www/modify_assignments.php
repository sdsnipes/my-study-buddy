<!DOCTYPE html>
<?php
    include '../includes/functions.php';
    $id = $_GET['id'];
    $assignment = getAssignmentToEdit($_GET['id']);
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>myStudyBuddy - Edit Assignment</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="styles.css" rel="stylesheet">  
  </head>

  <body>
    <div class="container">
      <div class="header clearfix">
        <h3 class="title text-muted">myStudyBuddy</h3>
      </div>

      <div class="row marketing">

        <!-- Alignment to center Edit screen -->
        <div class="col-lg-3">
        </div>

        <!-- Edit Assignment -->
        <div class="col-lg-6">
          <h4 class="title">Edit Assignment</h4>
            <form class="form-horizontal" action="edit_assignment.php?id=<?php echo "$id"?>" method="post">

              <!-- Assignment Deescription -->
              <div class="form-group">
                <label for="description" class="title col-sm-3 control-label">Description</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="description" placeholder="Assignment Description" name="description" value="<?php echo $assignment['Description']; ?>" autofocus>
                </div>
              </div>

              <!-- Course Name -->
              <div class="form-group">
                <label for="course" class="title col-sm-3 control-label">Class Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="course" placeholder="Class Name" name="course" value="<?php echo $assignment['Course']; ?>">
                </div>
              </div>

              <!-- Assignment Type -->
              <div class="form-group">
                <label for="assigment-type" class="title col-sm-3 control-label">Type</label>
                <div class="col-sm-9">
                    <select class="form-control" name="assignment-type">
                      <option <?php if($assignment['Type'] == "Homework") echo 'selected'; ?> value="Homework">Homework</option>
                      <option <?php if($assignment['Type'] == "Test") echo 'selected'; ?> value="Test">Test</option>
                      <option <?php if($assignment['Type'] == "Study") echo 'selected'; ?> value="Study">Study</option>
                      <option <?php if($assignment['Type'] == "Read") echo 'selected'; ?> value="Read">Read</option>
                      <option <?php if($assignment['Type'] == "Paper") echo 'selected'; ?> value="Paper">Paper</option>
                      <option <?php if($assignment['Type'] == "Presentation") echo 'selected'; ?> value="Presentation">Presentation</option>
                      <option <?php if($assignment['Type'] == "Lab") echo 'selected'; ?> value="Lab">Lab</option>
                      <option <?php if($assignment['Type'] == "Final") echo 'selected'; ?> value="Final">Final</option>
                      <option <?php if($assignment['Type'] == "Midterm") echo 'selected'; ?> value="Midterm">Midterm</option>
                      <option <?php if($assignment['Type'] == "Quiz") echo 'selected'; ?> value="Quiz">Quiz</option>
                      <option <?php if($assignment['Type'] == "Project") echo 'selected'; ?> value="Project">Project</option>
                      <option <?php if($assignment['Type'] == "Workbook") echo 'selected'; ?> value="Workbook">Workbook</option>
                      <option <?php if($assignment['Type'] == "Lesson") echo 'selected'; ?> value="Lesson">Lesson</option>
                      <option <?php if($assignment['Type'] == "Other") echo 'selected'; ?> value="Other">Other</option>
                    </select>
                </div>
              </div>

              <!-- Assignment Due Date -->
              <div class="form-group">
                <label for="due-date" class="title col-sm-3 control-label">Due Date</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" name="due-date" id="due-date" value="<?php echo $assignment['Date']; ?>"/>
                </div>
              </div>

              <!-- Assignment Due Time -->
              <div class="form-group">
                <label for="due-time" class="title col-sm-3 control-label">Due Time</label>
                <div class="col-sm-9">
                    <input type="time" class="form-control" name="due-time" id="due-time" value="<?php echo $assignment['Time']; ?>"/>
                </div>
              </div>

              <!-- Assignment Priority -->
              <div class="form-group">
                <label for="priority" class="title col-sm-3 control-label">Priority</label>
                <div class="col-sm-9">
                    <select class="form-control" name="priority">
                      <option <?php if($assignment['Priority'] == 1) echo 'selected'; ?> value="1">Low</option>
                      <option <?php if($assignment['Priority'] == 2) echo 'selected'; ?> value="2">Medium</option>
                      <option <?php if($assignment['Priority'] == 3) echo 'selected'; ?> value="3">High</option>
                    </select>
                </div>
              </div>

              <!-- Comments About Assignment -->
              <div class="form-group">
                <label for="comments" class="title col-sm-3 control-label">Comments</label>
                <div class="col-sm-9">
                    <?php echo'<textarea class="form-control" rows="6" id="comments" name="comments">'.$assignment['Comments'].'</textarea>';?>
                </div>
              </div>

              <!-- Save Changes -->
              <div class="form-group">
                <div class="col-sm-offset-6 col-sm-6">
                  <button type="submit" class="btn btn-default" name="submit">Save</button>
                </div>
              </div>
            </form>
        </div>
      </div>

      <footer class="footer">
        <p>&copy; Shawn Snipes 2015</p>
      </footer>

    </div> <!-- container -->

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </body>
</html>
