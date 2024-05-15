<?php
    $conn = mysqli_connect("localhost:3307", "root", "", "bloodbank");
    $result = mysqli_query($conn,"SELECT * FROM educationals");
    // var_dump($result) ;
?>
<!DOCTYPE html>
<html data-theme="valentine" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Educational</title>
</head>
<body>
    <?php include_once("shared/nav.php");?>
    <div class="max-w-5xl mx-auto mt-10">
    <div class="grid grid-cols-3 ">
    <?php 
    while( $row = mysqli_fetch_array($result)) { ?>
    <div class="card card-compact w-72 bg-base-100 shadow-xl">
    <figure><img class="w-full h-60" src="<?php echo $row["content"]; ?>" alt="blood-resource" /></figure>
    <div class="card-body">
        <h2 class="card-title"><?php echo $row["title"]; ?></h2>
        <p><?php echo '<script>$row["cover"].slice(0,100);</script>'; ?><span><a class="text-red-600" href="educational?content_id=<?php echo $row["content_id"]?>">&nbsp;See Details</a></span></p>
    </div>
    </div>
    <?php }?>
    </div></div>
</body>
</html>