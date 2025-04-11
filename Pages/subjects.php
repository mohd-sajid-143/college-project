<?php
include "connects.php";
if($_SESSION['student_email']==""){
  header("Location:index.php");
}
if(isset($_GET['sem_id'])){
  $temp=$_GET['sem_id'];
}
$sel_sub="SELECT * FROM subject WHERE semester_id = {$temp}";
$exe_subject = mysqli_query($conn, $sel_sub);
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
        alert("this content added soon !");
        return false;
      }
      function loadContentPage($sub_id){
        window.location.href = "contents.php"+$sub_id;
      }
    </script>
    <style>
      #sub_sem{
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <!-- NAVIGATION -->
    <header>
      <div class="nav" id="nav">
        <div id="syedutech-logo">
          <a href="../index.php"
            ><img src="../images/icon/web_logo.png" style="width: 100px"
          /></a>
        </div>
        <div class="switch-tab" id="switch-tab" onclick="switchTAB()">
          <img src="../images/icon/menu.png" />
        </div>
        <!-- <div class="search" id="search-switch">
          <input type="text" placeholder="Search" class="srch" /><button
            id="srchbtn"
          >
            <img src="../images/icon/search.png" />
          </button>
        </div> -->
      </div>
    </header>

    <div class="title">
      <span
        >prepare for Exam Semester exams </span
      >
      <div class="shortdesc">
        <p>Your ultimate study companion for end-sem success!</p>
      </div>
    </div>

    <!-- Quick Links -->

    <div class="course">
      <?php
      echo "<div class='cbox'>";
      while($row1 = mysqli_fetch_assoc($exe_subject)){
        echo "<div class='det'><a href='contents.php?subject_name={$row1["subject_name"]}' target='_blank'>{$row1["subject_name"]}</a></div>";
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
        mysqli_data_seek($exe_subject, 0); // Reset the branch result set pointer
        while($row2 = mysqli_fetch_assoc($exe_subject)){
          echo "<div class='dcard'>
                  <a href='contents.php?sub_id={$row2["subject_id"]}'>
                  <div id='sub_sem' class='fpart'>
                  <img src='../images/uploads/{$row2["subject_image"]}' /></div>
                  <div  class='spart'>{$row2["subject_name"]} <img src='../images/icon/dropdown.png' /></div></a>
                </div>";
          $rowIndex++;
        }
        echo "</div>";
        ?>
      </center>
    </div>
    <br/><br><br>
    <!-- FOOTER -->
    <?php include_once 'footer.php';?>
  </body>
</html>
