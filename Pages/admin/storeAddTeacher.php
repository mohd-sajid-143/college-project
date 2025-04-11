<?php
include "../../Pages/connects.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name =$_POST["name"];
    $email = $_POST["email"];
    $depart=$_POST["department"];
    $password=md5($_POST["password"]);

    // (Optional) Validate email format in PHP
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format!";
        exit;
    }
    $sel="SELECT email FROM teacher WHERE email='$email'";

    $exe=mysqli_query($conn,$sel);
    $tot=mysqli_num_rows($exe);
    if($tot>0){
        echo "email already exists";
        exit;
    }
    $dep_sel="SELECT depart_id FROM department WHERE depart_name='$depart'";
    $result=mysqli_query($conn,$dep_sel);
    $no=mysqli_num_rows($result);
    if($no==0){
        echo "department not found";
        exit;
    }else{
            while($row = mysqli_fetch_assoc($result)) {
               $depart_id=$row['depart_id']; 
            }
    }
        $ins="INSERT INTO teacher set teacher_name='$name', email='$email', password='$password',depart_id='$depart_id'";
        if(!mysqli_query($conn,$ins)){
            echo "insert error".mysqli_error($conn);
        }else{
            echo "Add a new Teacher Successful";
        }
}