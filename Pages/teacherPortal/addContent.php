<?php
error_reporting(0);
$depart_id=$_SESSION['teacher_depart_id'];
include "../connects.php";
$err="";
// Fetch branches based on department ID
$sel = "SELECT branch_id, branch_name FROM branch WHERE depart_id='{$_SESSION["teacher_depart_id"]}'";
$exe = mysqli_query($conn, $sel) or $err = "Error fetching branches";
$num=mysqli_num_rows($exe);
?>
<div class="dashboard-container" id="dash">
          <h3  id="first" class="i-name">Add new content</h3>
          <p><?php echo "{$_SESSION['teacher_id']}"?></p>
            <form id="courseForm">
            <div class="mb-3">
                <label for="branch" class="form-label">Branch</label>
                <select id="branch" name="branch" class="form-select" required>
                  <option value="">Select Branch</option>
                  <?php
                  while($row = mysqli_fetch_assoc($exe)) {
                    echo "<option value='{$row["branch_id"]}'>{$row["branch_name"]}</option>";
                  }
                  ?>
                  
                </select>
              </div>
              <div class="mb-3">
                <label for="semester" class="form-label">Semester</label>
                <select id="semester" name="semester" class="form-select" required>
                  <option value="">Select semester</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <select id="subject" name="subject" class="form-select" required>
                  <option value="">Select subject</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="ctype" class="form-label">Content-Type</label>
                <select id="ctype" name="content-type"  class="form-select" required>
                  <option value="">Select Content Type</option>
                  <option value="video">Video</option>
                  <option value="pyq">PYQ</option>
                  <option value="notes">Notes</option>
                </select>
              </div>
              <div class="mb-3" id="fileInput">
            <input type="file" name="selected-file" id="contentFile" required>
        </div>
        
        <div class="mb-3" id="urlInput" style="display: none;">
            <input type="url" name="video_url" id="videoUrl" class="form-control" placeholder="Enter Video URL">
        </div>
        <div class="mb-3" id="fileInput">
            <input type="text" name="content_title" placeholder="Content Title" id="contentFile" accept="application/pdf" class="form-control" required>
        </div>
              <button type="submit">Add Content</button>
            </form>
          </div>
          <h3 class="i-name">Recent Activies</h3>
          <div class="board">
            <table width="100%">
              <thead>
                <tr>
                    <td>Department</td>
                    <td>Branch</td>
                    <td>Semesters</td>
                    <td>Subjects</td>
                    <td>discription</td>
                    <td>Actions</td>
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
                
              </tbody>
            </table>
          </div>
