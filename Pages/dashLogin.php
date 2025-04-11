<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SyEduTech</title>
    <link rel="stylesheet" href="../CSS/dashLogin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="wrapper">
      <div class="title-text">
        <div class="title admin">Login Portal</div>
        <div class="title teacher">Login Portal</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="admin" checked>
          <input type="radio" name="slide" id="teacher">
          <label for="admin" class="slide admin">Admin</label>
          <label for="teacher" class="slide teacher">Teacher</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="#" method="post" id="adminLoginForm" class="adminLogin">
            <div class="field">
              <input type="text" id="email" name="email" placeholder="Username or Email" required>
            </div>
            <div class="field">
              <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="login" value="Login">
            </div>
          </form>
          <form action="#" method="post" id="teacherLogin" class="teacherLogin">
            <div class="field">
              <input type="text" id="t_email" name="email" placeholder="Username or Email" required>
            </div>
            <div class="field">
              <input type="password" id="t_pass" name="password" placeholder="Password" required>
            </div>
            <div class="pass-link"><a href="" onclick="return resetPass()">Forgot password?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="signup"  value="Login">
            </div>
          </form>
        </div>
      </div>
    </div>

    <script>
      const loginText = document.querySelector(".title-text .teacher");
      const loginForm = document.querySelector("form.adminLogin");
      const admin = document.querySelector("label.admin");
      const teacher = document.querySelector("label.teacher");
      teacher.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        // loginText.style.marginLeft = "-50%";
      });
      admin.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        // loginText.style.marginLeft = "0%";
      });
      function resetPass(){
        alert("contact to admin");
        return false;
      }
      document
  .getElementById("adminLoginForm")
    .addEventListener("submit", function (event) {
      event.preventDefault(); // Prevent form submission

    // Basic validation
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();
    if (!email && !password) {
      alert("Please fill out all fields.");
      return false;
    }
    // Create Form Data
    let formData = new FormData();
    formData.append("email", email);
    formData.append("password", password);
    fetch("../Pages/admin/validateAdmin.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.text())
      .then((data) => {
        if(data.includes("success")){
          window.location.href="../Pages/admin/dashboard.php";
        }else{
          alert(data);
        }
      })
      .catch((error) => {
        console.error("Error:", error);
      });
    return true;
    });


    document
  .getElementById("teacherLogin")
    .addEventListener("submit", function (event) {
      event.preventDefault(); // Prevent form submission

    // Basic validation
    const t_email = document.getElementById("t_email").value.trim();
    const t_password = document.getElementById("t_pass").value.trim();
    if (!t_email && !t_password) {
      alert("Please fill out all fields.");
      return false;
    }
    // Create Form Data
    let formData = new FormData();
    formData.append("email", t_email);
    formData.append("password",t_password);
    fetch("../Pages/teacherPortal/validateTeacher.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.text())
      .then((data) => {
        if(data.includes("success")){
          window.location.href="../Pages/teacherPortal/dashboard.php";
        }else{
          alert(data);
        }
      })
      .catch((error) => {
        console.error("Error:", error);
      });
    return true;
    });
      
    </script>

  </body>
</html>
