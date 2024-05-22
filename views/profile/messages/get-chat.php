<?php

session_start();
if (isset($_SESSION["id"])){
    $sender_id=  $_POST["sender_id"];
    $receiver_id = $_POST["receiver_id"];
    $output = '';
    $conn = mysqli_connect("localhost:3307","root","","bloodbank");
    $result = mysqli_query($conn,"SELECT * FROM messages WHERE sender_id=$sender_id AND receiver_id=$receiver_id OR sender_id=$receiver_id AND receiver_id=$sender_id");
    if(mysqli_num_rows($result)> 0){
        while($row = mysqli_fetch_array($result)){
            if($row["sender_id"] === $sender_id){
                $output .= "<div class='sender'>
                            <p>".$row['message']."</p>
                            </div><br>";
            }else{
                $output .= "<div class='receiver'>
                            <p>".$row["message"]."</p>
                            </div><br>";
            }
        }
        echo $output;
    }

}else{
    header("login");
}