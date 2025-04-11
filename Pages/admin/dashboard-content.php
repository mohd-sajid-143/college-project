<?php
include "../connects.php";
$sel1="SELECT student_id FROM student";
$exe1=mysqli_query($conn,$sel1);
$num1=mysqli_num_rows($exe1);
$sel2="SELECT teacher_id FROM teacher";
$exe2=mysqli_query($conn,$sel2);
$num2=mysqli_num_rows($exe2);
$sel3="SELECT branch_id FROM branch";
$exe3=mysqli_query($conn,$sel3);
$num3=mysqli_num_rows($exe3);
?>
<div class="dashboard-content" id="dash">
      <h3  id="first" class="i-name">Dashboard</h3>
      <div class="values">
        <div class="val-box">
          <i class="uil uil-notes"></i>
          <div>
            <h3><?php echo $num3;?></h3>
            <span>Branchs</span>
          </div>
        </div>
        <div class="val-box">
          <i class="uil uil-users-alt"></i>
          <div>
            <h3><?php echo $num1;?></h3>
            <span>Students</span>
          </div>
        </div>
        <div class="val-box">
          <i class="uil uil-user-square"></i>
          <div>
            <h3><?php echo $num2;?></h3>
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
            <!-- <tr>
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
            </tr> -->
          </tbody>
        </table>
      </div>
      </div>