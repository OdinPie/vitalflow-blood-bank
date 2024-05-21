<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$email = $_POST["uemail"];
echo $email;
$conn = mysqli_connect('localhost:3307', 'root', '', 'bloodbank');
     if ($conn->connect_error) {
        die('Connection Failed' .$conn->connect_error);
     }else{
        $statement = $conn->prepare("UPDATE users SET status = true WHERE email = '$email'");
    //    $statement->bind_param("s",$email);
        $statement->execute();
        echo "data updated successfully";
        $statement->close();
     }
    }else{
        echo "data was not received";
    }