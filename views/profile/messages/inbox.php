<?php
require_once("views/authentication/config.php");
$messenger_id = isset($_GET["messenger_id"]) ? $_GET["messenger_id"] :"";
$sender_id = isset($_SESSION["id"] ) ? $_SESSION["id"] :"";
$result = mysqli_query($conn, "SELECT * FROM users WHERE user_id=$messenger_id") ;
$row = mysqli_fetch_assoc($result) ;
$message_result = mysqli_query($conn,"SELECT * from messages WHERE receiver_id=$messenger_id AND sender_id=$sender_id OR receiver_id=$sender_id AND sender_id=$messenger_id") ;
$message = mysqli_fetch_assoc($message_result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Inbox</title>
</head>
<body>
        <div class="flex flex-col p-5">
        <div class="flex items-center gap-5">
        <a href="profile?id=<?php echo $row["user_id"];?>">
        <div class="avatar">
        <div class="w-14 rounded-full">
            <img src="<?php echo $row["url"];?>" />
        </div>
        </div>
        </a>
        <h1 class="text-2xl font-semibold"><?php echo $row["username"];?></h1>
        </div>
        <hr>
        <div class="chatArea flex flex-col relative">
        <div class="chat-box h-[500px] overflow-auto">
            
        
          
        </div>
        <div class="fixed bottom-0 w-full">
        <form action="#" class="text-form">
        <input type="text" name="receiver_id" value="<?php echo $messenger_id; ?>" hidden>
        <input type="text" name="sender_id" value="<?php echo $sender_id; ?>" hidden>
        <input type="text" name="message" class="input rounded-none w-7/12 outline-none" placeholder="Type your text here ..." autocomplete="off">
        <button onclick="insertChat(event)" class="btn rounded-none w-2/12">Send</button>
        </form>
        </div>
        </div>
        </div>
<script src="views\profile\messages\messages.js"></script>
</body>
</html>