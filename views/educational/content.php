<?php 
    $content_id = $_GET["content_id"];
    require_once("views/authentication/config.php");
?>
<!DOCTYPE html>
<html data-theme="valentine" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?php echo $row["title"] ?></title>
</head>
<body>
    <?php include_once("shared/nav.php");
    $result = mysqli_query($conn,"SELECT * FROM educationals where content_id='$content_id'");
    $row = mysqli_fetch_assoc($result); ?>
    <div class="flex flex-col justify-center items-center mx-36">
        <img class=" h-[500px]" src="<?php echo $row["content"]; ?>" alt=""><br>
        <h1 class="text-center text-2xl"><?php echo $row["title"]; ?></h1><br>
        <p class="bg-white p-10 rounded-lg"><?php echo $row["cover"]; ?></p>
    </div>
</body>
</html>