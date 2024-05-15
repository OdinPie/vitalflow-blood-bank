<?php 
    require_once("views/authentication/config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../style/style.css'>
    <script src='js/main.js'></script>
</head>
<body class="h-10">
    <div class="navbar bg-[#fae7f4]">
        <div class="navbar-start">
          <a class="btn btn-ghost text-xl">VitalFlow</a>
        </div>
        <div class="navbar-center hidden lg:flex">
          <ul class="menu menu-horizontal z-50 px-1">
            <li><a href="home">Home</a></li>
            <li>
              <details>
                <summary>Donation</summary>
                <ul class="p-2">
                  <li><a>Donate Blood</a></li>
                  <li><a>Receive Blood</a></li>
                  <li><a href="blood-request">Post Blood Request</a></li>
                </ul>
              </details>
            </li>
            <li><a href="educational">Educational</a></li>
            <li><a>Blood Drives</a></li>
          </ul>
        </div>
        <div class="navbar-end">
        
          <?php if(!empty($_SESSION['email'])){
            $email = $_SESSION['email']; 
            // echo $email;
            $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
            $row = mysqli_fetch_assoc($result); 
            $img = $row['url']; 
            echo '
            <a href="#" class="btn btn-circle  mx-2 "><div class="avatar">
            <div class="w-12 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
              <img src= "'.$img .'"  alt="profile-img"/>
            </div>
          </div></a>
            <a href="logout" class="btn bg-[#ef5f60] mx-1 hover:bg-[#a72728] border-none">Logout</a>'
          ;}else{
            echo '<a href="login" class="btn bg-[#ef5f60] hover:bg-[#a72728] border-none">Login</a>';
          } ;?>
        </div>
      </div>
</body>
</html>