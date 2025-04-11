document
  .getElementById("add-teacher-form")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form submission

    // Basic validation
    const name = document.getElementById("teacher-name").value.trim();
    const email = document.getElementById("teacher-email").value.trim();
    const department = document.getElementById("department").value;
    const password = document.getElementById("teacher-password").value.trim();

    if (!name && !email && !password) {
      alert("Please fill out all fields.");
      return false;
    }
    if (password.length <= 6) {
      alert("password should be  greater then 6");
      return false;
    }
    console.log("console department..." + department);
    // Create Form Data
    let formData = new FormData();
    formData.append("name", name);
    formData.append("email", email);
    formData.append("department", department);
    formData.append("password", password);
    // Send Data to PHP using Fetch API
    fetch("../../Pages/admin/storeAddTeacher.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.text())
      .then((data) => {
        if (data.includes("Add a new Teacher Successful")) {
          alert(data);
          document.getElementById("add-teacher-form").reset();
        } else {
          alert(data);
        }
      })
      .catch((error) => {
        console.error("Error:", error);
      });
    return true;
  });
