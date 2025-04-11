<?php
    include 'connects.php';
    $r_email=$_POST['email'];
    $r_name=$_POST['name'];
    $r_password=md5($_POST['password']);
    if (!filter_var($r_email, FILTER_VALIDATE_EMAIL)) {
        echo "'invalid email farmat";
        exit;
    }
    $sel="SELECT email FROM student WHERE email='$r_email'";

    $exe=mysqli_query($conn,$sel);
    $tot=mysqli_num_rows($exe);
    if($tot>0){
        echo "email already exists";
        exit;
    }
   
        $ins="INSERT INTO student set student_name='$r_name', email='$r_email', password='$r_password'";
        if(!mysqli_query($conn,$ins)){
            echo "insert error".mysqli_error($conn);
        }else{
          $_SESSION['student_email']=$r_email;
          echo "success";
        }
  
?>