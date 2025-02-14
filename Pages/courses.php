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
    </script>
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
        <ul id="list-switch">
          <li>
            <a href="#mca_sem"
              ><img src="../images/icon/d1.png" class="icon" />MCA</a
            >
          </li>
          <li>
            <a href="#cse_sem"
              ><img src="../images/icon/paper.png" class="icon" />CSE</a
            >
          </li>
          <li>
            <a href="#it_sem"
              ><img src="../images/icon/computer.png" class="icon" />IT</a
            >
          </li>
          <li>
            <a href="#ai_ml_sem"
              ><img src="../images/icon/data.png" class="icon" />AL/ML</a
            >
          </li>
          <li>
            <a href="#civil_sem"
              ><img src="../images/icon/algo.png" class="icon" />Civil</a
            >
          </li>
          <li>
            <a href="#electrical_sem"
              ><img
                src="../images/icon/projects.png"
                class="icon"
              />Electrical</a
            >
          </li>
          <li>
            <a href="#mechanical_sem"
              ><img
                src="../images/icon/projects.png"
                class="icon"
              />Mechanical</a
            >
          </li>
          <li>
            <a href="#petroleum_sem"
              ><img
                src="../images/icon/projects.png"
                class="icon"
              />Petroleum</a
            >
          </li>
        </ul>
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
        >Gear up, stay focused, and ace your end-sem exams!<br />on
        SyEduTech</span
      >
      <div class="shortdesc">
        <p>Your ultimate study companion for end-sem success!</p>
      </div>
    </div>

    <!-- Quick Links -->
    <div class="course">
      <div class="cbox">
        <div class="det">
          <a href="#" target="_blank">Internet Technology</a>
        </div>
        <div class="det">
          <a href="#" target="_blank">Advanced Data Structures</a>
        </div>
        <div class="det">
          <a href="#" target="_blank">Advanced Java</a>
        </div>
        <div class="det">
          <a href="#" target="_blank">Visual Computing</a>
        </div>
        <div class="det">
          <a href="#" target="_blank">Python</a>
        </div>
        <div class="det">
          <a href="#" target="_blank">Design of Databases</a>
        </div>
        <div class="det">
          <a href="#" target="_blank">Web Application Development </a>
        </div>
      </div>
      <div class="cbox">
        <div class="det">
          <a href="#">Computer Networks and Information Security</a>
        </div>
        <div class="det">
          <a href="#" target="_blank">AI & Machine Learning</a>
        </div>
        <div class="det">
          <a href="#" target="_blank">Design and Analysis of Algorithm</a>
        </div>
        <div class="det"><a href="#">Data Science & Analytics</a></div>
      </div>
      <div class="cbox">
        <div class="det"><a href="#">Software Engineering</a></div>
        <div class="det"><a href="#">Client Server Computing</a></div>
        <div class="det"><a href="#"> Cloud Computing </a></div>
        <div class="det"><a href="#">Block chain</a></div>
      </div>
    </div>

    <div class="inbt">Accelerate your preparation</div>

    <!-- COURSES AVAILABLE -->
    <div class="ccard">
      <center>
        <div class="ccardbox">
          <div class="dcard">
            <div class="fpart">
              <img src="../images/courses/MCA-poster.png" />
            </div>
            <a href="#mca_sem"
              ><div class="spart">
                MCA <img src="../images/icon/dropdown.png" /></div
            ></a>
          </div>
          <div class="dcard">
            <div class="fpart">
              <img src="../images/courses/civil-poster.png" />
            </div>
            <a href="#civil_sem"
              ><div class="spart">
                Civil <img src="../images/icon/dropdown.png" /></div
            ></a>
          </div>
          <div class="dcard">
            <div class="fpart">
              <img src="../images/courses/CSE-poster.png" />
            </div>
            <a href="#cse_sem"
              ><div class="spart">
                CSE<img src="../images/icon/dropdown.png" /></div
            ></a>
          </div>
        </div>
        <div class="ccardbox">
          <div class="dcard">
            <div class="fpart">
              <img src="../images/courses/Electrical-poster.png" />
            </div>
            <a href="#electrical_sem"
              ><div class="spart">
                Electrical<img src="../images/icon/dropdown.png" /></div
            ></a>
          </div>
          <div class="dcard">
            <div class="fpart">
              <img src="../images/courses/IT-poster.png" />
            </div>
            <a href="#it_sem"
              ><div class="spart">
                IT <img src="../images/icon/dropdown.png" /></div
            ></a>
          </div>
          <div class="dcard">
            <div class="fpart">
              <img src="../images/courses/Mechanical-Poster.png" />
            </div>
            <a href="#mechanical_sem"
              ><div class="spart">
                Mechanical<img src="../images/icon/dropdown.png" /></div
            ></a>
          </div>
        </div>
        <div class="ccardbox">
          <div class="dcard">
            <div class="fpart">
              <img src="../images/courses/Petroleum-Poster.png" />
            </div>
            <a href="#petroleum_sem"
              ><div class="spart">
                Petroleum <img src="../images/icon/dropdown.png" /></div
            ></a>
          </div>
          <div class="dcard">
            <div class="fpart">
              <img src="../images/courses/AI_ML-poster.png" />
            </div>
            <a href="#ai_ml_sem"
              ><div class="spart">
                AI and ML<img src="../images/icon/dropdown.png" /></div
            ></a>
          </div>
        </div>
      </center>
    </div>

    <!-- SEMESTER SECTION -->
    <div class="title2" id="mca_sem">
      <span>MCA Semsters</span>
      <div class="shortdesc2">
        <p>Overview of all MCA Semesters</p>
      </div>
    </div>

    <center>
      <div class="ccardbox2">
        <div class="dcard2">
          <span class="tag">1/4</span>
          <div class="fpart2">
            <img src="../images/courses/MCA-poster.png" />
            <div class="overlay">
              <h3>Semester 1</h3>
            </div>
          </div>
        </div>
        <div class="dcard2">
          <span class="tag">2/4</span>
          <div class="fpart2">
            <img src="../images/courses/MCA-poster.png" />
            <div class="overlay">
              <h3>Semester 2</h3>
            </div>
          </div>
        </div>
        <div class="dcard2">
          <span class="tag">3/4</span>
          <div class="fpart2">
            <img src="../images/courses/MCA-poster.png" />
            <div class="overlay">
              <h3>Semester 3</h3>
            </div>
          </div>
        </div>
        <div class="dcard2">
          <span class="tag">4/4</span>
          <div class="fpart2">
            <img src="../images/courses/MCA-poster.png" />
            <div class="overlay">
              <h3>Semester 4</h3>
            </div>
          </div>
        </div>
      </div>
    </center>

    <br /><br />

    <!-- SEMESTER SECTION -->

    <div class="title2" id="cse_sem">
      <span>Computer Science Engineering</span>
      <div class="shortdesc2">
        <p>Overview of all CSE Semesters</p>
      </div>
    </div>
    <center>
      <div class="ccardbox2">
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">1/8</span>
          <div class="fpart2">
            <img src="../images/courses/CSE-poster.png" />
            <div class="overlay">
              <h3>Semester 1</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">2/8</span>
          <div class="fpart2">
            <img src="../images/courses/CSE-poster.png" />
            <div class="overlay">
              <h3>Semester 2</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">3/8</span>
          <div class="fpart2">
            <img src="../images/courses/CSE-poster.png" />
            <div class="overlay">
              <h3>Semester 3</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">4/8</span>
          <div class="fpart2">
            <img src="../images/courses/CSE-poster.png" />
            <div class="overlay">
              <h3>Semester 4</h3>
            </div>
          </div>
        </div>

        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">5/8</span>
          <div class="fpart2">
            <img src="../images/courses/CSE-poster.png" />
            <div class="overlay">
              <h3>Semester 5</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">6/8</span>
          <div class="fpart2">
            <img src="../images/courses/CSE-poster.png" />
            <div class="overlay">
              <h3>Semester 6</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">7/8</span>
          <div class="fpart2">
            <img src="../images/courses/CSE-poster.png" />
            <div class="overlay">
              <h3>Semester 7</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">8/8</span>
          <div class="fpart2">
            <img src="../images/courses/CSE-poster.png" />
            <div class="overlay">
              <h3>Semester 8</h3>
            </div>
          </div>
        </div>
      </div>
    </center>
    <br /><br />

    <!-- SEMESTER SECTION -->

    <div class="title2" id="it_sem">
      <span>Information Technology</span>
      <div class="shortdesc2">
        <p>Overview of all IT Semesters</p>
      </div>
    </div>
    <center>
      <div class="ccardbox2">
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">1/8</span>
          <div class="fpart2">
            <img src="../images/courses/IT-poster.png" />
            <div class="overlay">
              <h3>Semester 1</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">2/8</span>
          <div class="fpart2">
            <img src="../images/courses/IT-poster.png" />
            <div class="overlay">
              <h3>Semester 2</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">3/8</span>
          <div class="fpart2">
            <img src="../images/courses/IT-poster.png" />
            <div class="overlay">
              <h3>Semester 3</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">4/8</span>
          <div class="fpart2">
            <img src="../images/courses/IT-poster.png" />
            <div class="overlay">
              <h3>Semester 4</h3>
            </div>
          </div>
        </div>

        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">5/8</span>
          <div class="fpart2">
            <img src="../images/courses/IT-poster.png" />
            <div class="overlay">
              <h3>Semester 5</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">6/8</span>
          <div class="fpart2">
            <img src="../images/courses/IT-poster.png" />
            <div class="overlay">
              <h3>Semester 6</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">7/8</span>
          <div class="fpart2">
            <img src="../images/courses/IT-poster.png" />
            <div class="overlay">
              <h3>Semester 7</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">8/8</span>
          <div class="fpart2">
            <img src="../images/courses/IT-poster.png" />
            <div class="overlay">
              <h3>Semester 8</h3>
            </div>
          </div>
        </div>
      </div>
    </center>
    <br /><br />

    <!-- SEMESTER SECTION -->

    <div class="title2" id="ai_ml_sem">
      <span>Artificial intelligence & Machine Learning</span>
      <div class="shortdesc2">
        <p>Overview of all IT Semesters</p>
      </div>
    </div>
    <center>
      <div class="ccardbox2">
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">1/8</span>
          <div class="fpart2">
            <img src="../images/courses/AI_ML-poster.png" />
            <div class="overlay">
              <h3>Semester 1</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">2/8</span>
          <div class="fpart2">
            <img src="../images/courses/AI_ML-poster.png" />
            <div class="overlay">
              <h3>Semester 2</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">3/8</span>
          <div class="fpart2">
            <img src="../images/courses/AI_ML-poster.png" />
            <div class="overlay">
              <h3>Semester 3</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">4/8</span>
          <div class="fpart2">
            <img src="../images/courses/AI_ML-poster.png" />
            <div class="overlay">
              <h3>Semester 4</h3>
            </div>
          </div>
        </div>

        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">5/8</span>
          <div class="fpart2">
            <img src="../images/courses/AI_ML-poster.png" />
            <div class="overlay">
              <h3>Semester 5</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">6/8</span>
          <div class="fpart2">
            <img src="../images/courses/AI_ML-poster.png" />
            <div class="overlay">
              <h3>Semester 6</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">7/8</span>
          <div class="fpart2">
            <img src="../images/courses/AI_ML-poster.png" />
            <div class="overlay">
              <h3>Semester 7</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">8/8</span>
          <div class="fpart2">
            <img src="../images/courses/AI_ML-poster.png" />
            <div class="overlay">
              <h3>Semester 8</h3>
            </div>
          </div>
        </div>
      </div>
    </center>
    <br /><br />

    <!-- SEMESTER SECTION -->

    <div class="title2" id="civil_sem">
      <span>Civil Engineering</span>
      <div class="shortdesc2">
        <p>Overview of all Civil Semesters</p>
      </div>
    </div>
    <center>
      <div class="ccardbox2">
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">1/8</span>
          <div class="fpart2">
            <img src="../images/courses/civil-poster.png" />
            <div class="overlay">
              <h3>Semester 1</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">2/8</span>
          <div class="fpart2">
            <img src="../images/courses/civil-poster.png" />
            <div class="overlay">
              <h3>Semester 2</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">3/8</span>
          <div class="fpart2">
            <img src="../images/courses/civil-poster.png" />
            <div class="overlay">
              <h3>Semester 3</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">4/8</span>
          <div class="fpart2">
            <img src="../images/courses/civil-poster.png" />
            <div class="overlay">
              <h3>Semester 4</h3>
            </div>
          </div>
        </div>

        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">5/8</span>
          <div class="fpart2">
            <img src="../images/courses/civil-poster.png" />
            <div class="overlay">
              <h3>Semester 5</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">6/8</span>
          <div class="fpart2">
            <img src="../images/courses/civil-poster.png" />
            <div class="overlay">
              <h3>Semester 6</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">7/8</span>
          <div class="fpart2">
            <img src="../images/courses/civil-poster.png" />
            <div class="overlay">
              <h3>Semester 7</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">8/8</span>
          <div class="fpart2">
            <img src="../images/courses/civil-poster.png" />
            <div class="overlay">
              <h3>Semester 8</h3>
            </div>
          </div>
        </div>
      </div>
    </center>

    <br /><br />
    <!-- SEMESTER SECTION -->

    <div class="title2" id="electrical_sem">
      <span>Electrical Engineering</span>
      <div class="shortdesc2">
        <p>Overview of all Electrical Semesters</p>
      </div>
    </div>
    <center>
      <div class="ccardbox2">
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">1/8</span>
          <div class="fpart2">
            <img src="../images/courses/Electrical-poster.png" />
            <div class="overlay">
              <h3>Semester 1</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">2/8</span>
          <div class="fpart2">
            <img src="../images/courses/Electrical-poster.png" />
            <div class="overlay">
              <h3>Semester 2</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">3/8</span>
          <div class="fpart2">
            <img src="../images/courses/Electrical-poster.png" />
            <div class="overlay">
              <h3>Semester 3</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">4/8</span>
          <div class="fpart2">
            <img src="../images/courses/Electrical-poster.png" />
            <div class="overlay">
              <h3>Semester 4</h3>
            </div>
          </div>
        </div>

        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">5/8</span>
          <div class="fpart2">
            <img src="../images/courses/Electrical-poster.png" />
            <div class="overlay">
              <h3>Semester 5</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">6/8</span>
          <div class="fpart2">
            <img src="../images/courses/Electrical-poster.png" />
            <div class="overlay">
              <h3>Semester 6</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">7/8</span>
          <div class="fpart2">
            <img src="../images/courses/Electrical-poster.png" />
            <div class="overlay">
              <h3>Semester 7</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">8/8</span>
          <div class="fpart2">
            <img src="../images/courses/Electrical-poster.png" />
            <div class="overlay">
              <h3>Semester 8</h3>
            </div>
          </div>
        </div>
      </div>
    </center>

    <br /><br />

    <!-- SEMESTER SECTION -->

    <div class="title2" id="mechanical_sem">
      <span>Mechanical Engineering</span>
      <div class="shortdesc2">
        <p>Overview of all Mechanical Semesters</p>
      </div>
    </div>
    <center>
      <div class="ccardbox2">
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">1/8</span>
          <div class="fpart2">
            <img src="../images/courses/Mechanical-Poster.png" />
            <div class="overlay">
              <h3>Semester 1</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">2/8</span>
          <div class="fpart2">
            <img src="../images/courses/Mechanical-Poster.png" />
            <div class="overlay">
              <h3>Semester 2</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">3/8</span>
          <div class="fpart2">
            <img src="../images/courses/Mechanical-Poster.png" />
            <div class="overlay">
              <h3>Semester 3</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">4/8</span>
          <div class="fpart2">
            <img src="../images/courses/Mechanical-Poster.png" />
            <div class="overlay">
              <h3>Semester 4</h3>
            </div>
          </div>
        </div>

        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">5/8</span>
          <div class="fpart2">
            <img src="../images/courses/Mechanical-Poster.png" />
            <div class="overlay">
              <h3>Semester 5</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">6/8</span>
          <div class="fpart2">
            <img src="../images/courses/Mechanical-Poster.png" />
            <div class="overlay">
              <h3>Semester 6</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">7/8</span>
          <div class="fpart2">
            <img src="../images/courses/Mechanical-Poster.png" />
            <div class="overlay">
              <h3>Semester 7</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">8/8</span>
          <div class="fpart2">
            <img src="../images/courses/Mechanical-Poster.png" />
            <div class="overlay">
              <h3>Semester 8</h3>
            </div>
          </div>
        </div>
      </div>
    </center>

    <br /><br />

    <div class="title2" id="petroleum_sem">
      <span>Petroleum Engineering</span>
      <div class="shortdesc2">
        <p>Overview of all Petroleum Semesters</p>
      </div>
    </div>
    <center>
      <div class="ccardbox2">
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">1/8</span>
          <div class="fpart2">
            <img src="../images/courses/Petroleum-Poster.png" />
            <div class="overlay">
              <h3>Semester 1</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">2/8</span>
          <div class="fpart2">
            <img src="../images/courses/Petroleum-Poster.png" />
            <div class="overlay">
              <h3>Semester 2</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">3/8</span>
          <div class="fpart2">
            <img src="../images/courses/Petroleum-Poster.png" />
            <div class="overlay">
              <h3>Semester 3</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">4/8</span>
          <div class="fpart2">
            <img src="../images/courses/Petroleum-Poster.png" />
            <div class="overlay">
              <h3>Semester 4</h3>
            </div>
          </div>
        </div>

        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">5/8</span>
          <div class="fpart2">
            <img src="../images/courses/Petroleum-Poster.png" />
            <div class="overlay">
              <h3>Semester 5</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">6/8</span>
          <div class="fpart2">
            <img src="../images/courses/Petroleum-Poster.png" />
            <div class="overlay">
              <h3>Semester 6</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">7/8</span>
          <div class="fpart2">
            <img src="../images/courses/Petroleum-Poster.png" />
            <div class="overlay">
              <h3>Semester 7</h3>
            </div>
          </div>
        </div>
        <div class="dcard2" onclick="return futureUpdates()">
          <span class="tag">8/8</span>
          <div class="fpart2">
            <img src="../images/courses/Petroleum-Poster.png" />
            <div class="overlay">
              <h3>Semester 8</h3>
            </div>
          </div>
        </div>
      </div>
    </center>

    <br /><br />

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
