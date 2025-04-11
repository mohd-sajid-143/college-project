<?php
session_start();
if($_SESSION['teacher_depart_id']==""){
  header("Location:../dashLogin.php");
}
?>
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
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    /> -->
    <link rel="stylesheet" href="../../CSS/teacherPortal/addContent.css" />
    <link rel="stylesheet" href="../../CSS/teacherPortal/teacherProfile.css" />
  </head>
  <body>
    <div class="side-menu">
      <div class="logo">
        <img src="../../images/icon/web_logo.png" alt="web_logo" />
      </div>
      <div class="menu">
        <li id="addDash" onclick="return addContent()">
          <i class="uil uil-dashboard"></i>
          <a href="#">ManageContent</a>
        </li>
        <li id="add-teacher" onclick="return addProfile()">
          <i class="uil uil-user-square"></i>
          <a href="#">Profile</a>
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
      <div id="container"></div>
    </section>
  </body>
  <script>
    function loadScript(url,callback) {
      let script = document.createElement("script");
      script.src = url;
      script.onload = callback;
      document.head.appendChild(script);
    }
    function addContent() {
      document.getElementById("container").innerHTML = "";
      console.log("add dash is calling...........");
      fetch("../../Pages/teacherPortal/addContent.php")
        .then((Response) => Response.text())
        .then((data) => {
          document.getElementById("container").innerHTML = data;
        });
        setTimeout(() => {
          loadScript("../../JS/teacherPortal/addContent.js", function () {
        console.log("Script Loaded and Executed");
        });
        }, 2000);
      return false;
    }

    function addProfile() {
      document.getElementById("container").innerHTML = "";
      console.log("add dash is calling...........");
      fetch("../../Pages/teacherPortal/teacherProfile.php")
        .then((Response) => Response.text())
        .then((data) => {
          document.getElementById("container").innerHTML = data;
        });
        setTimeout(() => {
          loadScript("../../JS/teacherPortal/addContent.js", function () {
        console.log("Script Loaded and Executed");
        });
        }, 2000);
      return false;
    }

    document.addEventListener("DOMContentLoaded", function () {
      console.log("DOM loading");
      addContent();
    });

    function logout() {
      if (confirm("you want to logout") == true) {
        alert("logout successful");
      }
      return false;
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../../JS/teacherPortal/addContent.js"></script>
</html>
