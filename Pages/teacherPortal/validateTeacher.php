<?php
// error_reporting(0);
include '../../Pages/connects.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $email=$_POST['email'];
  $password=md5($_POST['password']);
  // $password = hash('sha256', $_POST['password']);
  $sel="SELECT teacher_id , depart_id FROM teacher WHERE email='$email' AND password='$password'";
  $exe=mysqli_query($conn,$sel);
  $tot=mysqli_num_rows($exe);
  if($tot==1){
    $fetchid=mysqli_fetch_assoc($exe);
    $_SESSION['teacher_id']=$fetchid['teacher_id'];
    $_SESSION['teacher_depart_id']=$fetchid['depart_id'];
    echo "success";
    
  }else{
    echo "invalid email or password".$password; 
  }
}