<?php
include "../connects.php";
$semester_id = $_POST['semester_id'];
$query = "SELECT subject_id, subject_name FROM subject WHERE semester_id='$semester_id'";
$result = mysqli_query($conn, $query);
echo "<option value=''>Select Subject</option>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value='{$row["subject_id"]}'>{$row["subject_name"]}</option>";
}
?>
