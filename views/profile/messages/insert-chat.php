<?php

session_start();
if (isset($_SESSION["id"])){
    $sender_id=  $_POST["sender_id"];
    $receiver_id = $_POST["receiver_id"];
    $message = $_POST["message"];
    $sent_time = date("Y-m-d H:i:s");

    if(!empty($message)){
        $conn = mysqli_connect("localhost:3307","root","","bloodbank");
        $statement = $conn->prepare("INSERT INTO messages (sender_id, receiver_id, message, sent_time) VALUES ($sender_id, $receiver_id, '$message', '$sent_time')") or die(mysqli_error($conn));
        $statement->execute();
        $statement->close();

    }
}else{
    header("login");
}