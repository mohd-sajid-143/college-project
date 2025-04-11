<div class="dashboard-container">
  <h1>Add Teacher</h1>
  <form id="add-teacher-form" action="" method="POST" >
    <div class="form-group">
      <label for="teacher-name">Full Name</label>
      <input type="text" id="teacher-name" name="teacher-name" required />
    </div>
    <div class="form-group">
      <label for="teacher-email">Email</label>
      <input type="email" id="teacher-email" name="teacher-email" required />
    </div>
    <div class="form-group">
      <label for="department" class="form-label">Department</label>
      <select id="department" class="form-select" required>
        <option value="">Select Department</option>
        <option value="CSE">CSE</option>
        <option value="P&I">P&I Engg.</option>
        <option value="Arch">Arch. & TP</option>
        <option value="Civil">Civil Engg.</option>
        <option value="Mining">Mining Engg.</option>
        <option value="Electrical">Electrical Engg.</option>
      </select>
    </div>
    <div class="form-group">
      <label for="teacher-password">Password</label>
      <input
        type="password"
        id="teacher-password"
        name="teacher-password"
        required
      />
    </div>
    <button type="submit">Add Teacher</button>
  </form>
</div>
