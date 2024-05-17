<?php
require_once("views/authentication/config.php");
$query_email = isset($_GET['email']) ? $_GET['email'] :'';
$current_user_id = isset($_SESSION["id"]) ? $_SESSION["id"] : 0;
$id = isset($_GET["id"]) ? $_GET["id"] : -1;
// echo $id . $current_user_id;
?>
<!DOCTYPE html>
<html data-theme="valentine" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Profile</title>
</head>
<body>
    <?php require("shared/nav.php"); ?>
<div class="drawer lg:drawer-open relative bg-white">
  <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
  <div class="drawer-content">
    <!-- Page content here -->
    <div id="5">
    <?php require("views/profile/dashboard/profile.php"); ?>
    </div>
    <div hidden id="6">
    <?php require("views/profile\bloodRequest\bloodRequestForm.php") ;?>
    </div>

  </div> 
  <?php 
    if ($current_user_id == $id){?>
    <div class="drawer-side fixed">
    <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label> 
    <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
      <!-- Sidebar content here -->
      <li><a onclick="changeBG(1, 5)" id="1" class="text-red-600"> <i class="fa-solid fa-user"></i>Dashboard</a></li><br>
      <li><a onclick="changeBG(2, 6)" id="2"><i class="fa-solid fa-droplet"></i>Request Blood</a></li><br>
      <li><a onclick="changeBG(3)" id="3"><i class="fa-solid fa-message"></i>Messages</a></li><br>
      <li><a onclick="changeBG(4)" id="4"><i class="fa-solid fa-circle-info"></i>Update Information</a></li>
    </ul>
  
  </div>
  <?php } ?>
</div>
<script src="views\profile\dashboard\profile.js"></script>
</body>
</html>