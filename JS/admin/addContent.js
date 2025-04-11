const branches = {
  CSE: ["CSE", "IT", "ADS", "MCA"],
  PI: ["P&I", "Chemical", "Petroleum"],
  Arch: ["Bachelor of Architechture"],
  Civil: ["Civil", "Build & cont. Tech."],
  Mining: ["Mining", "Mechanical"],
  Electrical: [
    "Electrical",
    "Electronics. & Comm.",
    "Electronics. & Computer",
    "Electronics & Electrical",
  ],
};

document.getElementById("department").addEventListener("change", function () {
  const branchSelect = document.getElementById("branch");
  branchSelect.innerHTML = '<option value="">Select Branch</option>';
  const selectedDept = this.value;

  if (selectedDept && branches[selectedDept]) {
    branches[selectedDept].forEach((branch) => {
      let option = document.createElement("option");
      option.value = branch.toLowerCase().replace(/ /g, "_");
      option.textContent = branch;
      branchSelect.appendChild(option);
    });
  }
});

document.getElementById("semesters").addEventListener("input", function () {
  const semesterCount = parseInt(this.value) || 0;
  const subjectsContainer = document.getElementById("subjectsContainer");
  subjectsContainer.innerHTML = "";
  for (let i = 1; i <= semesterCount; i++) {
    let semDiv = document.createElement("div");
    semDiv.classList.add("mb-3");
    semDiv.innerHTML = `<label>Semester ${i} - Number of Subjects</label>
                <input type="number" class="form-control subject-count" min="1" data-semester="${i}">`;
    subjectsContainer.appendChild(semDiv);
  }
});

document
  .getElementById("subjectsContainer")
  .addEventListener("input", function (event) {
    if (event.target.classList.contains("subject-count")) {
      const semester = event.target.dataset.semester;
      const subjectCount = parseInt(event.target.value) || 0;
      let subjectsDiv = document.getElementById(`subjects-sem-${semester}`);

      if (!subjectsDiv) {
        subjectsDiv = document.createElement("div");
        subjectsDiv.id = `subjects-sem-${semester}`;
        subjectsDiv.classList.add("mb-3");
        event.target.parentNode.appendChild(subjectsDiv);
      }

      subjectsDiv.innerHTML = "";
      for (let j = 1; j <= subjectCount; j++) {
        subjectsDiv.innerHTML += `<label>Semester ${semester} - Subject ${j}</label>
                    <input type="text" class="form-control mb-2" name="subject-sem-${semester}-${j}" required>
                    <label>Upload Image for Subject ${j}</label>
                    <input type="file" class="form-control mb-2" name="image-sem-${semester}-${j}" accept="image/*" required>`;
      }
    }
  });

document
  .getElementById("courseForm")
  .addEventListener("submit", async function (event) {
    event.preventDefault();

    const formData = new FormData();

    // Collect department and branch details
    formData.append("department", document.getElementById("department").value);
    formData.append("branch", document.getElementById("branch").value);

    // Collect branch image
    const branchImage = document.getElementById("branch-image");
    if (branchImage.files.length > 0) {
      formData.append("branch_image", branchImage.files[0]);
    }

    // Collect semester count and semester image
    formData.append(
      "semester_count",
      document.getElementById("semesters").value
    );
    const semesterImage = document.getElementById("semester-image");
    if (semesterImage.files.length > 0) {
      formData.append("semester_image", semesterImage.files[0]);
    }

    // Collect subjects and their images
    document.querySelectorAll(".subject-count").forEach((subjectCountInput) => {
      const semester = subjectCountInput.dataset.semester;
      const subjectInputs = document.querySelectorAll(
        `#subjects-sem-${semester} input[type="text"]`
      );
      const imageInputs = document.querySelectorAll(
        `#subjects-sem-${semester} input[type="file"]`
      );

      subjectInputs.forEach((subjectInput, index) => {
        formData.append(
          `subjects[${semester}][${index}][name]`,
          subjectInput.value
        );
        if (imageInputs[index].files.length > 0) {
          formData.append(
            `subjects[${semester}][${index}][image]`,
            imageInputs[index].files[0]
          );
        }
      });
    });
    for (let pair of formData.entries()) {
      console.log(pair[0] + ", " + pair[1]);
    }
    // Send data to PHP using Fetch API
    try {
      const response = await fetch("../../Pages/admin/storeNewBranch.php", {
        method: "POST",
        body: formData,
      });

      const result = await response.json();
      if (result.success) {
        alert("Data uploaded successfully!");
        document.getElementById("courseForm").reset();
      } else {
        alert("Error: " + result.message);
      }
      console.log(result.data);
    } catch (error) {
      console.error("Error:", error);
      alert("An error occurred while uploading data.");
    }
  });
