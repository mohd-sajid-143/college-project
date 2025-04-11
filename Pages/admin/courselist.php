<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Course List - Admin</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body> -->
<div class="dashboard-content" id="dash">
  <h3 id="first" class="i-name">Course List</h3>
  <div class="board">
    <table width="100%">
      <thead>
        <tr>
          <td>Department</td>
          <td>Branch</td>
          <td>Semesters</td>
          <td>Subjects</td>
          <td>Actions</td>
        </tr>
      </thead>
      <tbody id="courseTableBody">
        <!-- Course rows will be added dynamically -->
      </tbody>
    </table>
  </div>
</div>

<!-- <script>
      document.addEventListener("DOMContentLoaded", function () {
        const courses = JSON.parse(localStorage.getItem("courses")) || [];
        const tableBody = document.getElementById("courseTableBody");

        courses.forEach((course, index) => {
          const row = document.createElement("tr");
          row.innerHTML = `
                    <td>${course.department}</td>
                    <td>${course.branch}</td>
                    <td>${course.semesters}</td>
                    <td>${course.subjects
                      .map((sub) => sub.name)
                      .join(", ")}</td>
                    <td>
                        <button class="btn btn-danger btn-sm" onclick="deleteCourse(${index})">Delete</button>
                    </td>
                `;
          tableBody.appendChild(row);
        });
      });

      function deleteCourse(index) {
        let courses = JSON.parse(localStorage.getItem("courses")) || [];
        courses.splice(index, 1);
        localStorage.setItem("courses", JSON.stringify(courses));
        location.reload();
      }
    </script>
  </body>
</html> -->

<!-- <div class="dashboard-content" id="dash">
  <h3 id="first" class="i-name">Students List</h3>
  <div class="board">
    <table width="100%">
      <thead>
        <tr>
          <td>Name</td>
          <td>Email</td>
          <td>Password</td>
          <td>Action</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="name-details">
            <h5>Mohd Sajid</h5>
          </td>
          <td class="name-details">
            <h5>CSE</h5>
          </td>
          <td class="name-details">
            <h5>ksajid8975@gmail.com</h5>
          </td>
          <td class="name-details">
            <h5>sadksdkd</h5>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div> -->
<!-- </div> -->
