<?php 
    require_once("views/authentication/config.php");
    if (isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' OR email='$email'");
        $row = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result) > 0){
            if($password == $row["password"]){
                $_SESSION['login'] = true;
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['user_id'];

                echo "<script> location.href = 'home';</script>";
            }else{
            echo "<script> 
            alert('Wrong Password!! Please Try Again. '); </script>";
            }
        }else{
            echo "<script> alert('User Not Found!'); </script>";
        }
    }
?>
<!DOCTYPE html>
<html theme="light" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../style/style.css">
    <title>Login</title>
</head>
<body>
<div class="flex justify-center items-center">
    <div class="flex justify-center items-center bg-slate-100 shadow-2xl rounded-2xl p-[5%] mt-[2%]">
        <div class="w-1/2 flex flex-col justify-center items-center">
            <img src="img/login.png" alt="login">
            <button class="btn"><a class="text-center" href="home">Back to Home</a></button>
        </div>
            <div class="form">
            <form action="" method="POST">
            <h1 class="text-2xl">Welcome Back!</h1><br>
            <label class="input input-bordered flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#a72728" class="w-4 h-4 opacity-70"><path d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" /><path d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" /></svg>
                <input type="text" name="email" class="grow" placeholder="Email" />
                </label><br>
                <label class="input input-bordered flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#a72728" class="w-4 h-4 opacity-70"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" /></svg>
                <input type="text" name="username" class="grow" placeholder="Username" />
                </label><br>
                <label class="input input-bordered flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#a72728" class="w-4 h-4 opacity-70"><path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" /></svg>
                <input type="password" name="password" class="grow" value="password" />
                </label><br>
                <p id="error"></p><br>
                <button type="submit" name="submit" class="btn btn-error w-full">Login</button>
            </form><br>
            <p>Don't have an account? <a href="register" class="underline text-error">Sign Up</a></p>
            </div>
    </div></div>
    <script src="auth.js"></script>
</body>
</html>