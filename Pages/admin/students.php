<div class="dashboard-content" id="dash">
  <h3 id="first" class="i-name">Students List</h3>
  <div class="board">
<?php
include_once '../connects.php';
$sel="SELECT * FROM student";
$exe=mysqli_query($conn,$sel);
$num=mysqli_num_rows($exe);
if($num<1){
echo "<h5 style='padding:10px'>No student registered yet...</h5>";
}else{
  echo "<table width='100%'>
      <thead>
        <tr>
          <td>Name</td>
          <td>Email</td>
          <td>Password</td>
          <td>Action</td>
        </tr>
      </thead>
      <tbody>";
  while($row = mysqli_fetch_assoc($exe)) {
    echo "<tr>
    <td class='name-details'>
            <h5>{$row["student_name"]}</h5>
          </td>
          <td class='name-details'>
            <h5>{$row["email"]}</h5>
          </td>
          <td class='name-details'>
            <h5>{$row["password"]}</h5>
          </td>
          <td class='name-details'>
            <h5>action</h5>
          </td>
          </tr>";
 }

}

?>
      </tbody>
    </table>
  </div>
</div>
