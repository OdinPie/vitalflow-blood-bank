<?php
    $current_user_id = isset($_SESSION["id"]) ? $_SESSION["id"] : 0;
    $id = isset($_GET["id"]) ? $_GET["id"] : -1;
    $conn = mysqli_connect("localhost:3307", "root", "", "bloodbank");
    $result = mysqli_query($conn,"SELECT * FROM users where user_id='$id'");
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Profile</title>
</head>
<body>
    <div class="h-16 bg-slate-100"></div>
    <div class="flex items-center gap-10 mb-10 pb-10 bg-slate-100">
    <div class="avatar pl-10 -mt-10">
    <div class="w-36 rounded-full">
    <img src="<?php echo $row["url"]?>" alt="">
    </div>
    </div>
    <div>
        <div class="flex items-center gap-3 mb-4">
        <h1 class="text-2xl"><?php echo $row["username"]?></h1>
        <?php 
        $today = date("Y-m-d");
        $ddate = $row["ddate"];
        $diff = date_diff(date_create($today), date_create($ddate))->format("%a") ;
        if($diff < 56){ ?>
        <div class="badge badge-neutral">Not Eligible</div>
        <?php } else { ?>
        <div class="badge badge-neutral">Eligible</div>
   <?php } 
        if($id != $current_user_id){ ?>
        <button class="btn rounded-none">Send Message</button>
        <?php } 
        if($row['status']){?>
        <i class="fa-solid fa-circle-check"></i>
        <?php } ?>
        </div>
        <div class="outline outline-slate-50 outline-offset-8 w-3/4 mb-2">
            <p>Working as a software engineer. Non smoker. No history of blood borne diseases</p>
        </div>
        <?php if($id != $current_user_id){ ?>
            <p class="text-red-600 p-1 text-sm">*Send message to donor to reveal contact information</p>
        <?php } ?>
    </div>
    </div>
    <div class="my-5">
        <div class="flex px-10">
        <h1 class="font-semibold text-lg w-1/4 pt-2">Blood Details</h1>
        <!-- <p class="text-red">*Send message to donor to reveal</p> -->
        <div class="grid grid-cols-2">
        <div class="p-1 mr-10">
        <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text">Name</span>
        </div>
            <h1 class="text-lg border p-2"><?php echo $row["username"]?></h1>
        </label>
        </div>
        <div class="p-1 mr-10">
        <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text">Email</span>
        </div>
            <h1 class="text-lg border p-2 w-52">donor@donor.....</h1>
        </label>
        </div>
        <div class="p-1 mr-10">
        <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text">Phone Number</span>
        </div>
            <h1 class="text-xl border p-2">01********.</h1>
        </label>
        </div>
        <div class="p-1 mr-10">
        <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text">Blood Group</span>
        </div>
            <h1 class="text-xl border p-2"><?php echo $row["bgroup"]?></h1>
        </label>
        </div>
        </div>
        </div>
        <hr class="my-5">
        <div class="flex px-10">
        <h1 class="font-semibold text-lg w-1/4 pt-2">Donor Location</h1>
        <!-- <p class="text-red">*Send message to donor to reveal</p> -->
        <div class="grid grid-cols-2">
        <div class="p-1 mr-10">
        <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text">District</span>
        </div>
            <h1 class="text-lg border p-2"><?php echo $row["district"]?></h1>
        </label>
        </div>
        <div class="p-1 mr-10">
        <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text">Address</span>
        </div>
            <h1 class="text-lg border p-2 w-52"><?php echo $row["address"]?>s</h1>
        </label>
        </div>
        </div>
        </div>

    </div>
</body>
</html>