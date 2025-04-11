<?php
// error_reporting(0);
include '../../Pages/connects.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $email=$_POST['email'];
  $password=md5($_POST['password']);
  $sel="SELECT admin_id FROM admin WHERE name='$email' AND password='$password'";
  $exe=mysqli_query($conn,$sel);
  $tot=mysqli_num_rows($exe);
  if($tot==1){
    $fetchid=mysqli_fetch_assoc($exe);
    $_SESSION['admin_id']=$fetchid['admin_id'];
    echo "success";
    
  }else{
    echo "invalid email or password".$password; 
  }
}