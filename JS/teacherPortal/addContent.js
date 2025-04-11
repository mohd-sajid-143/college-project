$(document).ready(function () {
  // Fetch semesters based on branch selection
  $("#branch").change(function () {
    let branch_id = $(this).val();
    $("#semester").html('<option value="">Loading...</option>');
    $.post(
      "../../Pages/teacherPortal/getSemesterForAddContent.php",
      { branch_id: branch_id },
      function (data) {
        $("#semester").html(data);
      }
    );
  });

  // Fetch subjects based on semester selection
  $("#semester").change(function () {
    let semester_id = $(this).val();
    $("#subject").html('<option value="">Loading...</option>');
    $.post(
      "../../Pages/teacherPortal/getSubjectForAddContent.php",
      { semester_id: semester_id },
      function (data) {
        $("#subject").html(data);
      }
    );
  });

  $("#ctype").change(function () {
    let selectedType = $(this).val();
    if (selectedType === "video") {
      $("#fileInput").css("display", "none");
      $("#urlInput").css("display", "block");
      $("#contentFile").prop("required", false);
      $("#videoUrl").prop("required", true);
    } else {
      $("#fileInput").css("display", "block");
      $("#urlInput").css("display", "none");
      $("#contentFile").prop("required", true);
      $("#videoUrl").prop("required", false);
    }
  });

  // Handle form submission
  $("#courseForm").submit(function (e) {
    e.preventDefault(); // Prevent default form submission

    let formData = new FormData(this);
    for (let pair of formData.entries()) {
      console.log(pair[0] + ", " + pair[1]);
    }
    console.log(formData);
    $.ajax({
      url: "../../Pages/teacherPortal/storeContent.php", // Endpoint to handle form submission
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {
        alert(response); // Show success message
        $("#courseForm")[0].reset(); // Reset form after submission
        $("#fileInput").prop("disabled", false).attr("hidden", false);
        $("#urlInput").prop("disabled", true).attr("hidden", true);
      },
      error: function () {
        alert("Error submitting content");
      },
    });
  });
});
