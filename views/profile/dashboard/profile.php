<?php
    $current_user_id = isset($_SESSION["id"]) ? $_SESSION["id"] : 0;
    $id = isset($_GET["id"]) ? $_GET["id"] : -1;
    $conn = mysqli_connect("localhost:3307", "root", "", "bloodbank");
    $result = mysqli_query($conn,"SELECT * FROM users where user_id='$id'");
    $row = mysqli_fetch_assoc($result);

    if (isset($_POST["send"])){
        $message = $_POST["message"];
        $receiver_id = $id;
        $sender_id = $current_user_id;
        $sent_time = date("Y-m-d H:i:s");
        
        $statement = $conn->prepare("INSERT INTO messages (receiver_id,sender_id, sent_time, message) VALUES (?,?,?,?)");
        $statement->bind_param("iiss", $receiver_id,$sender_id,$sent_time,$message);
        $statement->execute();
        $statement->close();
    }
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
    <div class="relative">
        <div hidden class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-3/4 bg-pink-100 rounded-lg p-10">
                <div class="flex justify-end">
                <button onclick="hideModal()"><i class="fa-solid fa-circle-xmark"></i></button>
                </div>
            <form method="POST">
                <h1 class="text-center">Send Message</h1><br>
                <textarea class="w-[300px] rounded-lg" name="message" placeholder="within 1000 characters" id="message"></textarea><br>
                <div class="flex mt-1 justify-center">
                <button name="send" class="btn"><i class="fa-solid fa-paper-plane"></i></button>
                </div>
            </form>
        </div>
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
        <?php if($row['status']){?>
        <i class="fa-solid fa-circle-check"></i>
        <?php } 
        
        $today = date("Y-m-d");
        $ddate = $row["ddate"];
        $diff = date_diff(date_create($today), date_create($ddate))->format("%a") ;
        if($diff < 56){ ?>
        <div class="badge badge-neutral">Not Eligible</div>
        <?php } else { ?>
        <div class="badge badge-neutral">Eligible</div>
   <?php } 
        if($id != $current_user_id){ ?>
        <button onclick="showModal()" class="btn btn-sm">Send Message</button>
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
            <h1 class="text-lg border p-2 w-52"><?php echo $row["address"]?></h1>
        </label>
        </div>
        </div>
        </div>

    </div>
    </div>
    <!-- <script src="views/profile/dashboard/profile.js"></script> -->
    <script>
        function showModal(){
            document.querySelector(".absolute").removeAttribute('hidden');
        }

        function hideModal(){
            document.querySelector(".absolute").setAttribute('hidden',true);
            document.getElementById("message").value = '';
        }
    </script>
</body>
</html>