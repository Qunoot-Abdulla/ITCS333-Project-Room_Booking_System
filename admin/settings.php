<?php 
    require('inc/essentials.php');
    adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>
    <?php require('inc/links.php'); ?> 
</head>
<body class="bg-light"> 
    <?php require('inc/header.php') ?>
    
    <div class="container-fluid" id="main-content">
        <div class="row">
            <!-- Main content area -->
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <!-- Page heading -->
                <h2 class="mb-4">Settings</h2>

                <!-- Example content, replace with your actual settings -->
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">General Settings</h5>
                        <p class="card-text">Manage your general application settings here.</p>
                        <!-- Example form -->
                        <form >
                            <div class="mb-3">
                                <label for="siteName" class="form-label">Site Name</label>
                                <input type="text" class="form-control" id="siteName" placeholder="Enter site name">
                            </div>
                            <div class="mb-3">
                                <label for="adminEmail" class="form-label">Admin Email</label>
                                <input type="email" class="form-control" id="adminEmail" placeholder="Enter admin email">
                            </div>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Advanced Settings</h5>
                        <p class="card-text">Configure advanced application features.</p>
                        <button class="btn btn-secondary">Configure</button>
                    </div>
                </div>
                <!-- Contact details section -->
<div class="card border-0 shadow-sm mb-4">
  <div class="card-body">
    <div class="d-flex align-items-center justify-content-between mb-3">
      <h5 class="card-title m-0">Contacts Settings</h5>
      <button type="button" class="btn btn-dark shadow-none btn-sm" id="edit-btn">
        <i class="bi bi-pencil-square"></i> Edit
      </button>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="mb-4">
          <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
          <p class="card-text" id="address">Current Address</p>
        </div>
      </div>
    </div>
    <div class="mb-4">
      <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
      <p class="card-text" id="site_about">Current about us text.</p>
    </div>
  </div>
</div>

<!-- Edit form (hidden by default) -->
<div id="edit-form" class="hidden">
  <div class="row">
    <div class="col-lg-6">
      <div class="mb-4">
        <label for="address-input" class="form-label">New Address</label>
        <input type="text" id="address-input" class="form-control" placeholder="Enter new address">
      </div>
    </div>
  </div>
  <div class="mb-4">
    <label for="about-input" class="form-label">New About Us</label>
    <textarea id="about-input" class="form-control" placeholder="Enter new About Us text" rows="3"></textarea>
  </div>
  <button type="button" id="save-btn" class="btn btn-primary">Save</button>
</div>

<script>
  // Select DOM elements
  const editBtn = document.getElementById("edit-btn");
  const editForm = document.getElementById("edit-form");
  const address = document.getElementById("address");
  const siteAbout = document.getElementById("site_about");
  const addressInput = document.getElementById("address-input");
  const aboutInput = document.getElementById("about-input");
  const saveBtn = document.getElementById("save-btn");

  // When "Edit" is clicked, show the form and fill inputs with current data
  editBtn.addEventListener("click", () => {
    editForm.classList.remove("hidden"); // Show the form
    addressInput.value = address.textContent; // Pre-fill the input with the current address
    aboutInput.value = siteAbout.textContent; // Pre-fill the textarea with the current about us text
    editBtn.style.display = "none"; // Hide the "Edit" button
  });

  // Save the updated content
  saveBtn.addEventListener("click", () => {
    // Update the content
    address.textContent = addressInput.value;
    siteAbout.textContent = aboutInput.value;
    editForm.classList.add("hidden"); // Hide the form
    editBtn.style.display = "inline-block"; // Show the "Edit" button again
  });
</script>

<style>
  /* Styling for hidden form */
  .hidden {
    display: none;
  }
</style>

            </div>
            
        </div>
    </div>
</body>
</html>
