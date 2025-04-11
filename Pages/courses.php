<?php
error_reporting(0);
include "connects.php";
session_start();
if($_SESSION['student_email']==""){
  header("Location:index.php");
}

$sel_branch = "SELECT * FROM branch";
$exe_branch = mysqli_query($conn, $sel_branch);

$sel_subject = "SELECT subject_id, subject_name FROM subject LIMIT 10";
$exe_subject = mysqli_query($conn, $sel_subject);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="png" href="../images/icon/short_logo.png" />
    <title>Courses</title>
    <link rel="stylesheet" type="text/css" href="../CSS/courses.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/footer.css" />
    <script type="text/javascript" src="../JS/script.js"></script>
    <script>
      function futureUpdates(){
        alert("This content will be added soon!");
        return false;
      }
      function loadSubject($sem_id){
        window.location.href = "subjects.php?sem_id="+$sem_id;
      }
    </script>
</head>
<body>
    <!-- NAVIGATION -->
    <header>
      <div class="nav" id="nav">
        <div id="syedutech-logo">
          <a href="../index.php"><img src="../images/icon/web_logo.png" style="width: 100px" /></a>
        </div>
        <div class="switch-tab" id="switch-tab" onclick="switchTAB()">
          <img src="../images/icon/menu.png" />
        </div>
        <ul id="list-switch">
          <?php
          $rowIndex = 0;
          while($row = mysqli_fetch_assoc($exe_branch)){
            if($rowIndex <= 5){
              echo "<li><a href='#{$row["branch_name"]}_sem'><img src='../images/icon/hn{$rowIndex}.png' class='icon' />{$row["branch_name"]}</a></li>";
            }
            $rowIndex++;
          }
          ?>
        </ul>
      </div>
    </header>

    <div class="title">
      <span>Gear up, stay focused, and ace your end-sem exams!<br />on SyEduTech</span>
      <div class="shortdesc">
        <p>Your ultimate study companion for end-sem success!</p>
      </div>
    </div>

    <!-- Quick Links -->
    <div class="course">
      <?php
      echo "<div class='cbox'>";
      while($row1 = mysqli_fetch_assoc($exe_subject)){
        echo "<div class='det'><a href='contents.php?subject_id={$row1["subject_id"]}' target='_blank'>{$row1["subject_name"]}</a></div>";
      }
      echo "</div>";
      ?>
    </div>

    <div class="inbt">Accelerate your preparation</div>

    <!-- COURSES AVAILABLE -->
    <div class="ccard">
      <center>
        <?php
        $rowIndex = 0;
        echo "<div class='ccardbox'>";
        mysqli_data_seek($exe_branch, 0); // Reset the branch result set pointer
        while($row2 = mysqli_fetch_assoc($exe_branch)){
          echo "<div class='dcard'>
                  <div class='fpart'><img src='../images/uploads/{$row2["branch_image"]}' /></div>
                  <a href='#{$row2["branch_name"]}_sem'><div class='spart'>{$row2["branch_name"]} <img src='../images/icon/dropdown.png' /></div></a>
                </div>";
          $rowIndex++;
        }
        echo "</div>";
        ?>
      </center>
    </div>

    <!-- SEMESTER SECTION -->
    <?php
    mysqli_data_seek($exe_branch, 0); // Reset the branch result set pointer
    while($row3 = mysqli_fetch_assoc($exe_branch)){
        $uppercase_branch_name = strtoupper($row3["branch_name"]);
      echo "<div class='title2' id='{$row3["branch_name"]}_sem'>
              <span>{$uppercase_branch_name} Semesters</span>
              <div class='shortdesc2'>
                <p>Overview of all {$row3["branch_name"]} Semesters</p>
              </div>
            </div>
            <center>
              <div class='ccardbox2'>";
      
      $sel_sem = "SELECT * FROM semester WHERE branch_id = {$row3["branch_id"]}";
      $exe_sem = mysqli_query($conn, $sel_sem);
      $num=mysqli_num_rows($exe_sem);
      $count=1;
      while($sem_row = mysqli_fetch_assoc($exe_sem)){
        echo "<div class='dcard2' onclick='loadSubject({$sem_row["semester_id"]})'>
                <span class='tag'>{$count}/{$num}</span>
                <div class='fpart2'>
                  <img src='../images/courses/MCA-poster.png' />
                  <div class='overlay'>
                    <h3>Semester {$count}</h3>
                  </div>
                </div>
              </div>";
              $count++;
      }
      echo "</div></center><br /><br />";
    }
    ?>
</body>
</html>