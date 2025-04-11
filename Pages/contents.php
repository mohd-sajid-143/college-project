<?php
include "connects.php";
error_reporting(0);
if($_SESSION['student_email']==""){
  header("Location:index.php");
}
$temp="";
if(isset($_GET['subject_id'])){
  $temp=$_GET['subject_id'];
}
$video_sel="SELECT * FROM videos WHERE subject_id=$temp";
$exe_video = mysqli_query($conn, $video_sel);

$notes_sel="SELECT * FROM notes WHERE subject_id=$temp";
$exe_notes = mysqli_query($conn, $notes_sel);

$pyq_sel="SELECT * FROM pyq WHERE subject_id=$temp";
$exe_pyq = mysqli_query($conn, $pyq_sel);

?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" type="png" href="../images/icon/short_logo.png" />
    <title>Contents</title>
    <!-- <link rel="stylesheet" type="text/css" href="../CSS/style.css" /> -->
    <link rel="stylesheet" type="text/css" href="../CSS/courses.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/footer.css" />
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

    <!-- It will redirect to the Home Page after submitting the form -->
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
    <!-- Vidoe Section -->
    <div class="title2" id="sample_papers">
      <span>Tutorials Section</span>
      <div class="shortdesc2">
        <p>Step-by-Step Guides to Master Every Concept</p>
      </div>
    </div>
    <div class="sample">
      <?php
      if(mysqli_num_rows($exe_video)<1){
        echo "<h2>Video Tutorials is not added yet ..</h2>";
      }else{
        while($video_row=mysqli_fetch_assoc($exe_video)){
        echo "<div class='dcard2 '>
            <div class='fpart2'>
              <iframe 
                width='100%' 
                height='100%' 
                src='{$video_row["video_url"]}' 
                title='{$video_row["video_name"]}' 
                frameborder='0' 
                allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' 
                allowfullscreen>
              </iframe>
            </div>
    </div>";
        }
      }
      ?>
      
    </div>
    <br><br><br>
    <div class="title2" id="sample_papers">
      <span>Notes </span>
      <div class="shortdesc2">
        <p>Comprehensive Study Notes for Easy Revision</p>
      </div>
    </div>

    <!-- Notes Section -->
    <div class="sample">
      <ul>
        <?php
        if(mysqli_num_rows($exe_notes)<1){
          echo "<h2>Notes not added yet..</h2>";
        }else{
          while($notes_row=mysqli_fetch_assoc($exe_notes)){
            echo "<li>
          <a href='../Notes/{$notes_row["notes_url"]}' target='_blank'
            >{$notes_row["notes_name"]}</a
          >
        </li>";
        }
      }
        ?>
        <!-- <li>
          <a href="../Notes/MCA-VC.pdf" target="_blank"
            >Unit 1</a
          >
        </li>
        <li>
          <a href="../samplePapers/p1.pdf" target="_blank"
            >Unit 2</a
          >
        </li>
        <li>
          <a href="../samplePapers/p1.pdf" target="_blank"
            >Unit 3</a
          >
        </li>
      </ul>
      <ul>
        <li>
          <a href="../samplePapers/p1.pdf" target="_blank"
            >Unit 4</a
          >
        </li>
        <li>
          <a href="../samplePapers/p1.pdf" target="_blank"
            >Unit 5</a
          >
        </li> -->
      </ul>
    </div>
    <!-- Previous Year Papers -->
  <div class="title2" id="sample_papers">
      <span>Previous Year Papers</span>
      <div class="shortdesc2">
        <p>Practice more and more question papers</p>
      </div>
    </div>

    <div class="sample">
    <ul>
    <?php
        if(mysqli_num_rows($exe_pyq)<1){
          echo "<h2>Notes not added yet..</h2>";
        }else{
          while($pyq_row=mysqli_fetch_assoc($exe_pyq)){
            echo "<li>
          <a href='../PYQ/{$pyq_row["pyq_url"]}' target='_blank'
            >{$pyq_row["pyq_name"]}</a
          >
        </li>"; 
        }
      }
        ?>
        </ul>
        </div>
        <br><br><br>
      <!-- <ul>
        <li>
          <a href="../samplePapers/p1.pdf" target="_blank"
            >Previous Question Papers 2018</a
          >
        </li>
        <li>
          <a href="../PYQ/CG-1.pdf" target="_blank"
            >Previous Question Papers 2019</a
          >
        </li>
        <li>
          <a href="../samplePapers/p1.pdf" target="_blank"
            >Previous Question Papers 2020</a
          >
        </li>
      </ul>
      <ul>
        <li>
          <a href="../samplePapers/p1.pdf" target="_blank"
            >Previous Question Papers 2021</a
          >
        </li>
        <li>
          <a href="../samplePapers/p1.pdf" target="_blank"
            >Previous Question Papers 2022</a
          >
        </li>
        <li>
          <a href="../samplePapers/p1.pdf" target="_blank"
            >Previous Question Papers 2023</a
          >
        </li>
      </ul>
      <ul>
        <li>
          <a href="../samplePapers/p1.pdf" target="_blank"
            >Previous Question Papers 2024</a
          >
        </li>
        <li>
          <a href="../samplePapers/p1.pdf" target="_blank"
            >Previous Question Papers 2025</a
          >
        </li>
      </ul>
    </div> -->
    <!-- FOOTER -->
    <!-- <footer>
      <div class="footer-container">
        <div class="left-col">
          <img src="../images/icon/web_logo.png" style="width: 200px" />
          <div class="logo"></div>
          <div class="social-media">
            <a href="#"><img src="../images/icon/fb.png" /></a>
            <a href="#"><img src="../images/icon/insta.png" /></a>
            <a href="#"><img src="../images/icon/tt.png" /></a>
            <a href="#"><img src="../images/icon/ytube.png" /></a>
            <a href="#"><img src="../images/icon/linkedin.png" /></a>
          </div>
          <br /><br />
          <p class="rights-text">
            Copyright © 2025 Created By Mohd Sajid, Yakshita Soni All Rights
            Reserved.
          </p>
          <br />
          <p>
            <img src="../images/icon/location.png" /> CSE Dept. MBM University
            <br />Jodhpur,Rajasthan-342001
          </p>
          <br />
          <p>
            <img src="../images/icon/phone.png" /> +91-8824434122<br /><img
              src="../images/icon/mail.png"
            />&nbsp;syedutech143@gmail.com
          </p>
        </div>
        <div class="right-col">
          <h1 style="color: #fff">Our Newsletter</h1>
          <div class="border"></div>
          <br />
          <p>Enter Your Email to get our News and updates.</p>
          <form class="newsletter-form">
            <input class="txtb" type="email" placeholder="Enter Your Email" />
            <input class="btn" type="submit" value="Submit" />
          </form>
        </div>
      </div>
    </footer> -->
    <?php include 'footer.php';?>
    <script type="text/javascript" src="../JS/script.js"></script>
  </body>
</html>
