<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "../../Pages/connects.php";
header("Content-Type: application/json");
$response = ["success" => false, "message" => ""];

$uploadDir = "../../images/uploads/";
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Collect department and branch details
$department = $_POST["department"] ?? "";
$branch = $_POST["branch"] ?? "";
$semesterCount = $_POST["semester_count"] ?? "";
$sem_name=[];
for($i=0;$i< (int) $semesterCount;$i++){
$sem_name[$i] = "{$branch}"."_".'sem_'. ($i + 1);
}

// Upload Branch Image
$branchImagePath = "";
if (isset($_FILES["branch_image"]) && $_FILES["branch_image"]["error"] === UPLOAD_ERR_OK) {
    $ext = pathinfo($_FILES["branch_image"]["name"], PATHINFO_EXTENSION);
    $branchImageName = "{$department}"."_"."{$branch}". ".$ext";
    $branchImagePath = $uploadDir . $branchImageName;
    move_uploaded_file($_FILES["branch_image"]["tmp_name"], $branchImagePath);
}
// Upload Semester Image
$semesterImagePath = "";
if (isset($_FILES["semester_image"]) && $_FILES["semester_image"]["error"] === UPLOAD_ERR_OK) {
    $ext = pathinfo($_FILES["semester_image"]["name"], PATHINFO_EXTENSION);
    $semesterImageName =  "{$department}"."_"."{$branch}"."_sem_image" . ".$ext";
    $semesterImagePath = $uploadDir . $semesterImageName;
    move_uploaded_file($_FILES["semester_image"]["tmp_name"], $semesterImagePath);
}

$dep_sel="SELECT depart_id FROM department WHERE depart_name='$department'";
    $dep_result=mysqli_query($conn,$dep_sel);
    $no=mysqli_num_rows($dep_result);
    if($no==0){
        $response["success"] = false;
        $response["message"] = "No Department found : " . mysqli_error($conn);
        echo json_encode($response);
    }else{
            while($row = mysqli_fetch_assoc($dep_result)) {
               $depart_id=$row['depart_id']; 
            }
    }

$insBranch="INSERT INTO branch SET branch_name='$branch', depart_id='$depart_id', branch_image='$branchImageName'";
if(!mysqli_query($conn,$insBranch)){
    $response["success"] = false;
    $response["message"] = "Insert error in branch: " . mysqli_error($conn);
    echo json_encode($response);
}else{
    $branch_sel="SELECT branch_id FROM branch WHERE branch_name='$branch'";
    $branch_result=mysqli_query($conn,$branch_sel);
    $no1=mysqli_num_rows($branch_result);
    if($no==0){
        $response["success"] = false;
        $response["message"] = "NO brnach found: " . mysqli_error($conn);
        echo json_encode($response);
    }
    while($row = mysqli_fetch_assoc($branch_result)) {
               $branch_id=$row['branch_id']; 
    }
    $semester_ids = [];
    for($i=0;$i<(int) $semesterCount;$i++){
            $insSem="INSERT INTO semester SET semester_name='{$sem_name[$i]}' ,branch_id='$branch_id', semester_image='$semesterImageName'";
            if(!mysqli_query($conn,$insSem))
            {
                $response["success"] = false;
                $response["message"] = "Insert error in semester: " . mysqli_error($conn);
                echo json_encode($response);
            }
            $semester_id = mysqli_insert_id($conn);
            $semester_ids[$i + 1] = $semester_id;
    }
            
    



$subjects = [];
if (isset($_POST["subjects"]) && is_array($_POST["subjects"])) {
    foreach ($_POST["subjects"] as $semester => $subjectList) {
        if (!isset($semester_ids[$semester])) {
            $response["success"] = false;
            $response["message"] = "semester not found in database: " . mysqli_error($conn);
            echo json_encode($response);
        }
        $semester_id = $semester_ids[$semester];

        foreach ($subjectList as $index => $subject) {
            $subjectName = $subject["name"];
            $subjectImagePath = "";

            if (isset($_FILES["subjects"]["name"][$semester][$index]["image"]) && $_FILES["subjects"]["error"][$semester][$index]["image"] === UPLOAD_ERR_OK) {
                $ext = pathinfo($_FILES["subjects"]["name"][$semester][$index]["image"], PATHINFO_EXTENSION);
                $subjectImageName = "{$department}" . "_" . "{$branch}" . "_" . "{$subjectName}" . ".$ext";
                $subjectImagePath = $uploadDir . $subjectImageName;
                move_uploaded_file($_FILES["subjects"]["tmp_name"][$semester][$index]["image"], $subjectImagePath);
            }

            $insSubject = "INSERT INTO subject (subject_name, semester_id, subject_image) VALUES ('$subjectName', '$semester_id', '$subjectImageName')";
            if (!mysqli_query($conn, $insSubject)) {
                $response["success"] = false;
                $response["message"] = "Insert error in subject: " . mysqli_error($conn);
                echo json_encode($response);
            }
            $subjects[] = ["semester" => $semester, "name" => $subjectName, "image" => $subjectImageName];
        }
    }
}

$response["success"] = true;
$response["message"] = "Data successfully uploaded.";
$response["data"] = [
    "department" => $department,
    "branch" => $branch,
    "semester_name" => $sem_name,
    "branch_image" => $branchImageName,
    "semester_image" => $semesterImageName,
    "subjects" => $subjects
];
}

echo json_encode($response);

?>