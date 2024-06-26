<?php
require_once("views/authentication/config.php");
$current_user_id = isset($_SESSION["id"]) ? $_SESSION["id"] : 0;
?>
<!DOCTYPE html>
<html data-theme="valentine" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Request Blood</title>
</head>
<body>
    <?php require("shared/nav.php"); ?>
<div class="drawer lg:drawer-open relative bg-white">
  <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
  <div class="drawer-content">
    <!-- Page content here -->
    <div>
    <?php require("views/profile\bloodRequest\bloodRequestForm.php") ;?>
    </div>

  </div> 
  <?php 
    if ($current_user_id == $id){?>
    <div class="drawer-side fixed">
    <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label> 
    <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
      <!-- Sidebar content here -->
      <li><a href="profile?id=<?php echo $current_user_id;?>" id="1" > <i class="fa-solid fa-user"></i>Dashboard</a></li><br>
      <li><a href="blood-request" class="active" id="2"><i class="fa-solid fa-droplet"></i>Request Blood</a></li><br>
      <li><a href="messages"><i class="fa-solid fa-message"></i>Messages</a></li><br>
      <!-- <li><a id="4"><i class="fa-solid fa-circle-info"></i>Update Information</a></li> -->
    </ul>
  
  </div>
  <?php } ?>
</div>
<script src="views\profile\dashboard\profile.js"></script>
</body>
</html>