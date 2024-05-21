<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
        <div class="flex flex-col">
        <div class="flex items-center gap-5">
        <a href="profile?id=<?php echo $row["user_id"];?>">
        <div class="avatar">
        <div class="w-14 rounded-full">
            <!-- <img src="<?php echo $row["url"];?>" /> -->
            <img src="https://www.animalleague.org/wp-content/uploads/2022/02/beth-blog-feb2022-white-grey-kitten-400x401.jpg" />
        </div>
        </div>
        </a>
        <!-- <h1 class="text-2xl font-semibold"><?php echo $row["username"];?></h1> -->
        <h1 class="text-2xl font-semibold">Username Username</h1>
        </div>
        <hr>
        <div class="chat-section">
            <div class="receiver">
                <p>Hello dude how are you?</p>
            </div>
            <div class="sender">
                <p>Hello gib blud</p>
            </div>
        </div>
        </div>

</body>
</html>