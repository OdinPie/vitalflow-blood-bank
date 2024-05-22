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
        $result2 = mysqli_query($conn,"SELECT DISTINCT users.user_id, users.username, users.url
        FROM users
        WHERE users.user_id IN (
            SELECT DISTINCT messages.sender_id
            FROM messages
            WHERE messages.receiver_id = $current_user_id
        )");
        while ($row2 = mysqli_fetch_assoc($result2)) {
            $sender_id = $row2["user_id"];?>
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
        <?php }?>
</body>
</html>