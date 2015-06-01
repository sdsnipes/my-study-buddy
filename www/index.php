<!DOCTYPE html>
<?php
  include '../includes/functions.php';
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>myStudyBuddy - Home</title>

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

        <!-- List of Current Assignments -->
        <div class="todo-list col-lg-6">
          <h4 class="title">Current Assignments</h4>
          <?php
            getAssignments();
          ?>
          <ul class="legend">
            <li><span class="legend-key-low"></span><strong>Low Priority</strong></li>
            <li><span class="legend-key-med"></span><strong>Medium Priority</strong></li>
            <li><span class="legend-key-high"></span><strong>High Priority</strong></li>
          </ul>
        </div>

        <!-- Add New Assignments -->
        <div class="col-lg-6">
          <h4 class="title">Add Assignment</h4>
            <form class="form-horizontal" action="create_assignment.php" method="post">

              <!-- Assignment Description -->
              <div class="form-group">
                <label for="description" class="title col-sm-3 control-label">Description</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="description" placeholder="Assignment Description" name="description" autofocus>
                </div>
              </div>

              <!-- Course Name -->
              <div class="form-group">
                <label for="course" class="title col-sm-3 control-label">Class Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="course" placeholder="Class Name" name="course">
                </div>
              </div>

              <!-- Assignment Type -->
              <div class="form-group">
                <label for="assigment-type" class="title col-sm-3 control-label">Type</label>
                <div class="col-sm-9">
                    <select class="form-control" name="assignment-type">
                      <option value="Homework">Homework</option>
                      <option value="Test">Test</option>
                      <option value="Study">Study</option>
                      <option value="Read">Read</option>
                      <option value="Paper">Paper</option>
                      <option value="Presentation">Presentation</option>
                      <option value="Lab">Lab</option>
                      <option value="Final">Final</option>
                      <option value="Midterm">Midterm</option>
                      <option value="Quiz">Quiz</option>
                      <option value="Project">Project</option>
                      <option value="Workbook">Workbook</option>
                      <option value="Lesson">Lesson</option>
                      <option value="Other">Other</option>
                    </select>
                </div>
              </div>

              <!-- Assignment Due Date-->
              <div class="form-group">
                <label for="due-date" class="title col-sm-3 control-label">Due Date</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" name="due-date" id="due-date"/>
                </div>
              </div>

              <!-- Assignment Due Time-->
              <div class="form-group">
                <label for="due-time" class="title col-sm-3 control-label">Due Time</label>
                <div class="col-sm-9">
                    <input type="time" class="form-control" name="due-time" id="due-time"/>
                </div>
              </div>

              <!-- Assignment Priority-->
              <div class="form-group">
                <label for="priority" class="title col-sm-3 control-label">Priority</label>
                <div class="col-sm-9">
                    <select class="form-control" name="priority">
                      <option value="1">Low</option>
                      <option value="2">Medium</option>
                      <option value="3">High</option>
                    </select>
                </div>
              </div>

              <!-- Comments About Assignment -->
              <div class="form-group">
                <label for="comments" class="title col-sm-3 control-label">Comments</label>
                <div class="col-sm-9">
                    <textarea class="form-control" rows="6" id="comments" name="comments"></textarea>
                </div>
              </div>

              <!-- Submit Assignment -->
              <div class="form-group">
                <div class="col-sm-offset-6 col-sm-6">
                  <button type="submit" class="btn btn-default" name="submit">Save</button>
                </div>
              </div>

            </form>
        </div>
      </div>

      <footer class="title footer">
        <p>&copy; sdsnipes 2015</p>
      </footer>

    </div> <!-- end container -->

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </body>
</html>

