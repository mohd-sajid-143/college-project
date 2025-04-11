<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//session_start();
//$_SESSION['teacher_id']
include "../../Pages/connects.php";
header("Content-Type: application/json");
$response = ["success" => false, "message" => ""];

if (!isset($_SESSION['teacher_id'])) {
    $response["success"] = false;
    $response["message"] = "Teacher session not found.";
    echo json_encode($response);
    exit; // Stop execution
}

$uploadPdfDir = "../../PYQ/";
$uploadNotesDir="../../Notes/";
// Collect  details

$subject_id = $_POST["subject"] ?? "";
$content_name=$_POST["content-type"] ?? "";
$content_title=$_POST["content_title"] ?? "";
$video_url=$_POST["video_url"] ?? "";
//$selected_file=$_POST["selected-file"] ?? "";
$ins="";
if($content_name==="video"){
    $ins="INSERT INTO videos set video_name='{$content_title}' , video_url='{$video_url}',subject_id='{$subject_id}' , teacher_id='{$_SESSION['teacher_id']}'";
}else if($content_name==="pyq"){
    $notesPath = "";
    if (isset($_FILES["selected-file"]) && $_FILES["selected-file"]["error"] === UPLOAD_ERR_OK) {
        $ext = pathinfo($_FILES["selected-file"]["name"], PATHINFO_EXTENSION);
        $pyqName = "{$content_title}"."_"."{$subject_id}".time().".$ext";
        $pyqPath = $uploadPdfDir . $pyqName;
        move_uploaded_file($_FILES["selected-file"]["tmp_name"], $pyqPath);
    }
    $ins="INSERT INTO pyq set pyq_name='{$content_title}' , pyq_url='{$pyqName}', subject_id='{$subject_id}' , teacher_id='{$_SESSION['teacher_id']}'";

}else{
    $notesPath = "";
    if (isset($_FILES["selected-file"]) && $_FILES["selected-file"]["error"] === UPLOAD_ERR_OK) {
        $ext = pathinfo($_FILES["selected-file"]["name"], PATHINFO_EXTENSION);
        $notesName = "{$content_title}"."_"."{$subject_id}".time().".$ext";
        $notesPath = $uploadNotesDir . $notesName;
        move_uploaded_file($_FILES["selected-file"]["tmp_name"], $notesPath);
    }
    $ins="INSERT INTO notes set notes_name='{$content_title}' , notes_url='{$notesName}',subject_id='{$subject_id}' , teacher_id='{$_SESSION['teacher_id']}'";
}

if (!mysqli_query($conn, $ins)) {
    $response["success"] = false;
    $response["message"] = "Insert error : " . mysqli_error($conn);
    echo json_encode($response);
}


$response["success"] = true;
$response["message"] = "Data successfully uploaded.";

echo json_encode($response);
?>
