<!DOCTYPE html>
<html data-theme="light" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Blood Posts</title>
</head>
<body>
    <?php include_once("shared/nav.php") ?>
    <h1 class="text-center text-3xl my-10">Blood Requests</h1>
    <?php 
    include_once("views/postBlood/joiningResult.php") ;
    while ($row = mysqli_fetch_assoc($result)) {?>
        <div class="card post bg-slate-200 max-w-5xl mx-auto p-14 my-10">
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
        <div class="ml-20">
            <h1 class="text-xl "><?php echo $row["details"];?></h1><br>
            <h1>Blood Group: <?php echo $row["bgroup"];?></h1>
            <h1>Hospital: <?php echo $row["hospital"];?></h1>
            <h1>Division: <?php echo $row["division"];?></h1>
            <h1>District: <?php echo $row["district"];?></h1>
            <h1>Number of Bags: <?php echo $row["no_of_bags"];?></h1>
            <h1>Requirement Date: <?php echo $row["rdate"];?></h1>
        </div>
    </div>
    <?php } ?>
    
    
</body>
</html>