
<!DOCTYPE html>
<html>
  <head>
    <link
      rel="shortcut icon"
      type="png"
      href="../../images/icon/short_logo.png"
    />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Comaptible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SyEduTech</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/dashboard.css" />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../../CSS/admin/addTeacher.css">
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    /> -->
  </head>
  <body>
    <div class="side-menu">
      <div class="logo">
        <img src="../../images/icon/web_logo.png" alt="web_logo" />
      </div>
      <div class="menu">
        <li id="addDash" onclick="return addDash()">
          <i class="uil uil-dashboard"></i>
          <a href="#">Dashboard</a>
        </li>
        <li id="add-teacher" onclick="return addTeacher()">
          <i class="uil uil-plus"></i>
          <a href="#">Add Teacher</a>
        </li>
        <li id="add-course" onclick="return addCourse()">
          <i class="uil uil-plus-circle"></i>
          <a href="#">Add Course</a>
        </li>
        <li id="course-list" onclick="return courseList()">
          <i class="uil uil-list-ul"></i>
          <a href="#">Course List</a>
        </li>
        <li id="teacher-list" onclick="return teacherList()">
          <i class="uil uil-user-square"></i>
          <a href="#">Teachers</a>
        </li>
        <li id="student_list" onclick="return studentList()">
          <i class="uil uil-user"></i>
          <a href="#">Students</a>
        </li>
      </div>
    </div>
    <section id="main">
      <div class="header">
        <div class="part1">
          <div class="search">
            <i class="uil uil-search"></i>
            <input type="text" placeholder="Search" />
          </div>
        </div>
        <div class="part2">
          <i class="uil uil-bell" id="notification"></i>
          <div class="logout" onclick="return logout()">
            <i class="uil uil-signout" id="logout"></i>
            <span>Logout</span>
          </div>
          <!-- <img src="../images/icon/internship.png" alt="profile" /> -->
        </div>
      </div>
      <div id="container">
        <!-- <div class="dashboard-content" id="dash">
          <h3  id="first" class="i-name">Dashboard</h3>
          <div class="values">
            <div class="val-box">
              <i class="uil uil-notes"></i>
              <div>
                <h3>13</h3>
                <span>Courses</span>
              </div>
            </div>
            <div class="val-box">
              <i class="uil uil-users-alt"></i>
              <div>
                <h3>13</h3>
                <span>Students</span>
              </div>
            </div>
            <div class="val-box">
              <i class="uil uil-user-square"></i>
              <div>
                <h3>13</h3>
                <span>Teachars</span>
              </div>
            </div>
          </div>
          <h3 class="i-name">Recent Activies</h3>
          <div class="board">
            <table width="100%">
              <thead>
                <tr>
                  <td>Name</td>
                  <td>Role</td>
                  <td>Action</td>
                  <td>Course</td>
                  <td>Details</td>
                  <td>Time</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="name-details">
                    <h5>Mohd Sajid</h5>
                    <p>email@gmail.com</p>
                  </td>
                  <td class="name-details">
                    <h5>Teacher</h5>
                  </td>
                  <td class="name-details">
                    <h5>Edit</h5>
                  </td>
                  <td class="name-details">
                    <h5>MCA</h5>
                  </td>
                  <td class="name-details">
                    <h5>content edited</h5>
                  </td>
                  <td class="name-details">
                    <h5>2023-12-5 22:12</time></h5>
                  </td>
                </tr>
                <tr>
                  <td class="name-details">
                    <h5>Mohd Sajid</h5>
                    <p>email@gmail.com</p>
                  </td>
                  <td class="name-details">
                    <h5>Teacher</h5>
                  </td>
                  <td class="name-details">
                    <h5>Edit</h5>
                  </td>
                  <td class="name-details">
                    <h5>MCA</h5>
                  </td>
                  <td class="name-details">
                    <h5>content edited</h5>
                  </td>
                  <td class="name-details">
                    <h5>2023-12-5 22:12</time></h5>
                  </td>
                </tr>
                <tr>
                  <td class="name-details">
                    <h5>Mohd Sajid</h5>
                    <p>email@gmail.com</p>
                  </td>
                  <td class="name-details">
                    <h5>Teacher</h5>
                  </td>
                  <td class="name-details">
                    <h5>Edit</h5>
                  </td>
                  <td class="name-details">
                    <h5>MCA</h5>
                  </td>
                  <td class="name-details">
                    <h5>content edited</h5>
                  </td>
                  <td class="name-details">
                    <h5>2023-12-5 22:12</time></h5>
                  </td>
                </tr>
                <tr>
                  <td class="name-details">
                    <h5>Mohd Sajid</h5>
                    <p>email@gmail.com</p>
                  </td>
                  <td class="name-details">
                    <h5>Teacher</h5>
                  </td>
                  <td class="name-details">
                    <h5>Edit</h5>
                  </td>
                  <td class="name-details">
                    <h5>MCA</h5>
                  </td>
                  <td class="name-details">
                    <h5>content edited</h5>
                  </td>
                  <td class="name-details">
                    <h5>2023-12-5 22:12</time></h5>
                  </td>
                </tr>
                <tr>
                  <td class="name-details">
                    <h5>Mohd Sajid</h5>
                    <p>email@gmail.com</p>
                  </td>
                  <td class="name-details">
                    <h5>Teacher</h5>
                  </td>
                  <td class="name-details">
                    <h5>Edit</h5>
                  </td>
                  <td class="name-details">
                    <h5>MCA</h5>
                  </td>
                  <td class="name-details">
                    <h5>content edited</h5>
                  </td>
                  <td class="name-details">
                    <h5>2023-12-5 22:12</time></h5>
                  </td>
                </tr>
                <tr>
                  <td class="name-details">
                    <h5>Mohd Sajid</h5>
                    <p>email@gmail.com</p>
                  </td>
                  <td class="name-details">
                    <h5>Teacher</h5>
                  </td>
                  <td class="name-details">
                    <h5>Edit</h5>
                  </td>
                  <td class="name-details">
                    <h5>MCA</h5>
                  </td>
                  <td class="name-details">
                    <h5>content edited</h5>
                  </td>
                  <td class="name-details">
                    <h5>2023-12-5 22:12</time></h5>
                  </td>
                </tr>
                <tr>
                  <td class="name-details">
                    <h5>Mohd Sajid</h5>
                    <p>email@gmail.com</p>
                  </td>
                  <td class="name-details">
                    <h5>Teacher</h5>
                  </td>
                  <td class="name-details">
                    <h5>Edit</h5>
                  </td>
                  <td class="name-details">
                    <h5>MCA</h5>
                  </td>
                  <td class="name-details">
                    <h5>content edited</h5>
                  </td>
                  <td class="name-details">
                    <h5>2023-12-5 22:12</time></h5>
                  </td>
                </tr>
                <tr>
                  <td class="name-details">
                    <h5>Mohd Sajid</h5>
                    <p>email@gmail.com</p>
                  </td>
                  <td class="name-details">
                    <h5>Teacher</h5>
                  </td>
                  <td class="name-details">
                    <h5>Edit</h5>
                  </td>
                  <td class="name-details">
                    <h5>MCA</h5>
                  </td>
                  <td class="name-details">
                    <h5>content edited</h5>
                  </td>
                  <td class="name-details">
                    <h5>2023-12-5 22:12</time></h5>
                  </td>
                </tr>
                <tr>
                  <td class="name-details">
                    <h5>Mohd Sajid</h5>
                    <p>email@gmail.com</p>
                  </td>
                  <td class="name-details">
                    <h5>Teacher</h5>
                  </td>
                  <td class="name-details">
                    <h5>Edit</h5>
                  </td>
                  <td class="name-details">
                    <h5>MCA</h5>
                  </td>
                  <td class="name-details">
                    <h5>content edited</h5>
                  </td>
                  <td class="name-details">
                    <h5>2023-12-5 22:12</time></h5>
                  </td>
                </tr>
                <tr>
                  <td class="name-details">
                    <h5>Mohd Sajid</h5>
                    <p>email@gmail.com</p>
                  </td>
                  <td class="name-details">
                    <h5>Teacher</h5>
                  </td>
                  <td class="name-details">
                    <h5>Edit</h5>
                  </td>
                  <td class="name-details">
                    <h5>MCA</h5>
                  </td>
                  <td class="name-details">
                    <h5>content edited</h5>
                  </td>
                  <td class="name-details">
                    <h5>2023-12-5 22:12</time></h5>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          </div> -->
      </div>
    </section>
  <script>
    function loadScript(url,callback) {
      let script = document.createElement("script");
      script.src = url;
      script.onload = callback;
      document.head.appendChild(script);
    }
    function addDash() {
      document.getElementById("container").innerHTML = "";
      console.log("add dash is calling...........");
      fetch("../../Pages/admin/dashboard-content.php")
        .then((Response) => Response.text())
        .then((data) => {
          document.getElementById("container").innerHTML = data;
        });
        
      return false;
    }

    function addTeacher() { 
      document.getElementById("container").innerHTML = "";
      fetch("../../Pages/admin/addTeacher-content.php")
        .then((Response) => Response.text())
        .then((data) => {
          document.getElementById("container").innerHTML = data;
        });
        setTimeout(() => {
          loadScript("../../JS/admin/addTeacher.js", function () {
        console.log("Script Loaded and Executed");
        });
        }, 2000);
        
      return false;
    }
    function addCourse() {
      document.getElementById("container").innerHTML = "";
      fetch("../../Pages/admin/addCourse-content.php")
        .then((Response) => Response.text())
        .then((data) => {
          document.getElementById("container").innerHTML = data;
        });
        setTimeout(() => {
          loadScript("../../JS/admin/addContent.js", function () {
        console.log("Script Loaded and Executed");
        });
        }, 2000);
      return false;
    }
    function courseList() {
      document.getElementById("container").innerHTML = "";
      fetch("../../Pages/admin/courselist.php")
        .then((Response) => Response.text())
        .then((data) => {
          document.getElementById("container").innerHTML = data;
        });
      return false;
    }
    function teacherList() {
      document.getElementById("container").innerHTML = "";
      fetch("../../Pages/admin/teachers.php")
        .then((Response) => Response.text())
        .then((data) => {
          document.getElementById("container").innerHTML = data;
        });
      return false;
    }
    function studentList() {
      document.getElementById("container").innerHTML = "";
      fetch("../../Pages/admin/students.php")
        .then((Response) => Response.text())
        .then((data) => {
          document.getElementById("container").innerHTML = data;
        });
      return false;
    }

    document.addEventListener("DOMContentLoaded", function () {
      console.log("DOM loading");
      addDash();
    });

    function logout() {
      if (confirm("you want to logout") == true) {
        alert("logout successful");
      }
      return false;
    }
  </script>
  <!-- <script src="../../JS/admin/addContent.js" defer></script>
  <script src="../../JS/admin/addTeacher.js" defer></script> -->
  </body>
</html>
