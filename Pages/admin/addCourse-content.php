
<div class="dashboard-container">
  <h1>Add Course</h1>
  <form id="courseForm" enctype="multipart/form/data">
    <div class="mb-3">
      <label for="department" class="form-label">Department</label>
      <select id="department" class="form-select" required>
        <option value="">Select Department</option>
        <option value="CSE">CSE</option>
        <option value="PI">P&I Engg.</option>
        <option value="Arch">Arch. & TP</option>
        <option value="Civil">Civil Engg.</option>
        <option value="Mining">Mining Engg.</option>
        <option value="Electrical">Electrical Engg.</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="branch" class="form-label">Branch</label>
      <select id="branch" class="form-select" required>
        <option value="">Select Branch</option>
      </select>
      <input type="file" id="branch-image" accept="image/png, image/jpg, image/jpeg" required>
    </div>
    <div class="mb-3">
      <label for="semesters" class="form-label">Number of Semesters</label>
      <input
        type="number"
        id="semesters"
        class="form-control"
        min="1"
        required
      />
      <input type="file" id="semester-image" accept="image/png, image/jpg, image/jpeg" required>
    </div>
    <div id="subjectsContainer"></div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
  </form>
</div>
