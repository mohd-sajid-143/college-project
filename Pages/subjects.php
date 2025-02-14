<?php
session_start();
if($_SESSION['student_id']==""){
  header("Location:../index.php");
}
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
      function loadContentPage(){
        window.location.href = "contents.php";
      }
    </script>
    <style>
        #it{
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
        <div class="search" id="search-switch">
          <input type="text" placeholder="Search" class="srch" /><button
            id="srchbtn"
          >
            <img src="../images/icon/search.png" />
          </button>
        </div>
      </div>
    </header>

    <div class="title">
      <span
        >prepare for MCA Semester 1</span
      >
      <div class="shortdesc">
        <p>Your ultimate study companion for end-sem success!</p>
      </div>
    </div>

    <!-- Quick Links -->
    <div class="course">
      <div class="cbox">
        <div class="det">
          <a href="#it" target="_blank">Internet Technology</a>
        </div>
        <div class="det">
          <a href="#ads" target="_blank">Advanced Data Structures</a>
        </div>
        <div class="det">
          <a href="#java" target="_blank">Advanced Java</a>
        </div>
        <div class="det">
          <a href="#vc" target="_blank">Visual Computing</a>
        </div>
        <div class="det">
          <a href="#python" target="_blank">Python</a>
        </div>
      </div>
    </div>

    <div class="inbt">Accelerate your preparation</div>

    <!-- COURSES AVAILABLE -->
    <div class="ccard">
      <center>
        <div class="ccardbox">
          <div class="dcard" onclick="loadContentPage()" id="it">
            <div class="fpart">
              <img src="../images/courses/it.jpg" />
            </div>
            <a href="#"
              ><div class="spart">
                IT <img src="../images/icon/dropdown.png" /></div
            ></a>
          </div>
          <div class="dcard" onclick="loadContentPage()" id="ads">
            <div class="fpart">
              <img src="../images/courses/ads.png" />
            </div>
            <a href="#"
              ><div class="spart">
                ADS <img src="../images/icon/dropdown.png" /></div
            ></a>
          </div>
          <div class="dcard" id="java">
            <div class="fpart">
              <img src="../images/courses/java.png" />
            </div>
            <a href="#"
              ><div class="spart">
                java<img src="../images/icon/dropdown.png" /></div
            ></a>
          </div>
        </div>
        <div class="ccardbox">
          <div class="dcard" onclick="loadContentPage()" id="vc">
            <div class="fpart">
              <img src="../images/courses/vc.jpg" />
            </div>
            <a href="#"
              ><div class="spart">
                VC<img src="../images/icon/dropdown.png" /></div
            ></a>
          </div>
          <div class="dcard" id="python">
            <div class="fpart">
              <img src="../images/courses/python-course.png" />
            </div>
            <a href="#"
              ><div class="spart">
                Python <img src="../images/icon/dropdown.png" /></div
            ></a>
          </div>
          
        </div>
        
    </div>
    <br/><br><br>
    <!-- FOOTER -->
    <footer>
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
    </footer>
  </body>
</html>
