<?php 
include "../../Pages/connects.php";
$sel="SELECT t.teacher_name, t.email, t.password, d.depart_name FROM teacher AS t LEFT JOIN department AS d ON t.depart_id = d.depart_id";
if(!($exe=mysqli_query($conn,$sel))){
  echo "error in finding teacher details";
}
$result=mysqli_fetch_assoc($exe);
?>
<div class="dashboard-container" id="dash">
  <h3 id="first" class="i-name">Teacher Profile</h3>
  <form id="teacher-profile">
    <label for="firstName">Full Name:</label>
    <input
      type="text"
      class="tea-form-fields"
      id="firstName"
      name="firstName"
      value="<?php echo $result['teacher_name']?>"
      required
    />

    <label for="email">Email:</label>
    <input
      type="email"
      id="email"
      name="email"
      value="<?php echo $result['email']?>"
      readonly
      class="tea-form-fields"
    />

    <label for="password">Password:</label>
    <input
      type="password"
      id="password"
      name="password"
      value="********"
      class="tea-form-fields"
      readonly
    />
    <label for="address">Department:</label>
    <input
      id="department"
      class="tea-form-fields"
      type="text"
      name="department"
      value="<?php echo $result['depart_name']?>"
      readonly
    />
    <a href="">change password</a>

    <button type="submit">Update Profile</button>
  </form>
</div>
