<?php
// error_reporting(0);
include 'connects.php';
if(isset($_POST['login'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
  $sel="SELECT * FROM student WHERE email='$email' AND password='$password'";
  $exe=mysqli_query($conn,$sel);
  $tot=mysqli_num_rows($exe);
  if($tot==1){
    $fetchid=mysqli_fetch_assoc($exe);
    $_SESSION['student_id']=$fetchid['student_id'];
    header("Location:courses.php");
    
  }else{
    echo '<script>alert("invalid email or password")</script>'; 
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" type="png" href="../images/icon/short_logo.png" />
    <title>Login SignUp</title>
    <link rel="stylesheet" type="text/css" href="../CSS/loginStyle.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- It will redirect to the Home Page after submitting the form -->
  </head>
  <body>
    <div class="form-box">
      <div class="button-box">
        <div id="btn"></div>
        <button
          type="button"
          class="toggle-btn"
          id="log"
          onclick="login()"
          style="color: #fff"
        >
          Log In
        </button>
        <button type="button" class="toggle-btn" id="reg" onclick="register()">
          Register
        </button>
      </div>
      <div class="social-icons">
        <img src="../images/icon/fb2.png" />
        <img src="../images/icon/insta2.png" />
        <img src="../images/icon/tt2.png" />
      </div>

      <!-- Login Form -->
      <form id="login" method="post" class="input-group" action="">
        <div class="inp">
          <img src="../images/icon/user.png" /><input
            type="text"
            id="email"
            class="input-field"
            placeholder="Email"
            name="email"
            style="width: 88%; border: none"
            required="required"
          />
        </div>
        <div class="inp">
          <img src="../images/icon/password.png" /><input
            type="password"
            id="password"
            name="password"
            class="input-field"
            placeholder="Password"
            style="width: 88%; border: none"
            required="required"
          />
        </div>
        <input type="checkbox" class="check-box" />Remember Password
        <button type="submit" name="login" class="submit-btn">Log In</button>
      </form>

      <div class="other" id="other">
        <div class="instead">
          <h3>or</h3>
        </div>
        <button class="connect" onclick="google()">
          <img src="../images/icon/google.png" /><span>Sign in with Google</span>
        </button>
      </div>

      <!-- Registration Form -->
      <form id="register" method="post" class="input-group">
        <input
          type="text"
          class="input-field"
          placeholder="Full Name"
          required="required"
          name="name"
        />
        <input
          type="email"
          class="input-field"
          placeholder="Email Address"
          required="required"
          name="email"
        />
        <input
          type="password"
          class="input-field"
          placeholder="Create Password"
          name="psame"
          required="required"
          name="password"
        />
        <input
          type="password"
          class="input-field"
          placeholder="Confirm Password"
          name="psame"
          required="required"
          name="repass"
        />
        <input
          type="checkbox"
          class="check-box"
          id="chkAgree"
          onclick="goFurther()"
        />I agree to the Terms & Conditions
        <button type="submit" id="btnSubmit" class="submit-btn reg-btn">
          Register
        </button>
      </form>
    </div>
    <script type="text/javascript" src="../JS/script.js"></script>
  </body>
</html>
