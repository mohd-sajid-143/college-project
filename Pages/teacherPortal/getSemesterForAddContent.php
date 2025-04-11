<?php
include "../connects.php";
$branch_id = $_POST['branch_id'];
$query = "SELECT semester_id, semester_name FROM semester WHERE branch_id='$branch_id'";
$result = mysqli_query($conn, $query);
echo "<option value=''>Select Semester</option>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value='{$row["semester_id"]}'>{$row["semester_name"]}</option>";
}
?>