<div class="dashboard-content" id="dash">
  <h3 id="first" class="i-name">Teacher List</h3>
  <div class="board">
<?php
include "../connects.php";
$sel="SELECT t.teacher_name, t.email, t.password, d.depart_name FROM teacher AS t LEFT JOIN department AS d ON t.depart_id = d.depart_id";
$exe=mysqli_query($conn,$sel);
$num=mysqli_num_rows($exe);
if($num<1){
echo "<h5 style='padding:10px'>No Teacher  registered yet...</h5>";
}else{
  echo "<table width='100%'>
      <thead>
        <tr>
        <td>Name</td>
          <td>Email</td>
          <td>password</td>
          <td>department</td>
          <td>Action</td>
        </tr>
      </thead>
      <tbody>";
    while($row = mysqli_fetch_assoc($exe)) {
        echo "<tr>
        <td class='name-details'>
            <h5>{$row["teacher_name"]}</h5>
          </td>
          <td class='name-details'>
            <h5>{$row["email"]}</h5>
          </td>
          <td class='name-details'>
            <h5>{$row["password"]}</h5>
          </td>
          <td class='name-details'>
            <h5>{$row["depart_name"]}</h5>
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