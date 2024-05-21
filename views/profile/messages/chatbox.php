<?php
$current_user_id = isset($_SESSION["id"]) ? $_SESSION["id"] : 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    <?php 
        $result = mysqli_query($conn, "SELECT * FROM messages WHERE sender_id=$current_user_id OR receiver_id=$current_user_id");
        while ($row = mysqli_fetch_assoc($result)) {
        if ($row["sender_id"] == $current_user_id) {
            $receiver_id = $row["receiver_id"];
            $result2 = mysqli_query($conn,"SELECT messages.*, users.username, users.url FROM messages INNER JOIN users ON messages.receiver_id=users.user_id WHERE messages.receiver_id=$receiver_id");
            $row2 = mysqli_fetch_assoc($result2);?>
            <a href="message?messenger_id=<?php echo $receiver_id;?>">
            <div class="chatRows flex items-center gap-5">
            <div class="avatar">
            <div class="w-14 rounded-full">
                <img src="<?php echo $row2["url"];?>" />
            </div>
            </div>
            <h1 class="text-xl font-semibold"><?php echo $row2["username"];?></h1>
            </div>
            </a>
        <?php }else{ 
            $sender_id = $row["sender_id"];
            $result2 = mysqli_query($conn,"SELECT messages.*, users.username, users.url FROM messages INNER JOIN users ON messages.sender_id=users.user_id WHERE messages.sender_id=$sender_id");
            $row2 = mysqli_fetch_assoc($result2);?>
            <a href="message?messenger_id=<?php echo $sender_id;?>">
            <div class="chatRows flex items-center gap-5">
            <div class="avatar">
            <div class="w-14 rounded-full">
                <img src="<?php echo $row2["url"];?>" />
            </div>
            </div>
            <h1 class="text-xl font-semibold"><?php echo $row2["username"];?></h1>
            </div>
            </a>
        <?php }}?>
</body>
</html>