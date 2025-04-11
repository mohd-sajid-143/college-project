<?php
include "../connects.php";
$sel="SELECT * FROM teacher";
$exe=mysqli_query($conn,$sel);
while($row = mysqli_fetch_assoc($result)) {
    $depart_id=$row['depart_id']; 
 }
?>