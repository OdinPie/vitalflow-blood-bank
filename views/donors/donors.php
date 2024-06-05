<?php 
require_once("views/authentication/config.php");
$id = isset($_GET['id']) ? $_GET['id'] :'';
$bgroup = isset($_GET['bgroup']) ? $_GET['bgroup'] :'';
$district = isset($_GET['district']) ? $_GET['district'] :'';
$date = isset($_GET['date']) ? $_GET['date'] :'';
if($bgroup == 'ABp'){
    $bgroup = 'AB+';
}else if($bgroup == 'Ap'){
    $bgroup = 'A+';
}else if($bgroup == 'Op'){
    $bgroup = 'O+';
}
?>
<!DOCTYPE html>
<html data-theme="light" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    
    <title>Find Donors</title>
</head>
<body>
    <?php require_once('shared/nav.php') ;
    if(!$bgroup){
        $result = mysqli_query($conn,"SELECT * FROM users WHERE NOT username='ADMIN'");
    }else{
        $result = mysqli_query($conn,"SELECT * FROM users WHERE NOT username='ADMIN'AND bgroup='$bgroup' AND district='$district' AND DATEDIFF('$date', ddate) > 56");
    }
    ?>
    <div class="px-10">
    <div class="flex justify-between items-center p-5">
        <p class="font-semibold">Results(<?php echo mysqli_num_rows($result) ;?>)</p>
        <a href="donors" class="btn">All Donors</a>
    </div>
    <hr>
    <div class="flex gap-10 my-10">
            <div class="card card-compact w-72 h-80 bg-transparent shadow-xl">
            <div class="card-body">
            <h2 class="card-title text-center">Advanced Search</h2>
            <hr>
            <form action="donors">
            <div class="p-1">
            <label class="form-control w-full max-w-xs">
            <!-- <div class="label">
                <span class="label-text">Blood Group</span>
            </div> -->
            <select class="select select-bordered w-full max-w-xs" name="bgroup">
                <option value="Select Blood Group" selected disabled>Blood Group</option>
                <option value="AB-">AB-</option>
                <option value="B-">B-</option>
                <option value="ABp">AB+</option>
                <option value="Ap">A+</option>
                <option value="O-">O-</option>
                <option value="B-">B-</option>
                <option value="A-">A-</option>
                <option value="Op">O+</option>
            </select>
            </label>
            </div>
            <div class="p-1">
            <label class="form-control w-full max-w-xs">
            <!-- <div class="label">
                <span class="label-text">District</span>
            </div> -->
            <select class="select select-bordered max-w-xs" name="district" id="">
                <option disabled selected value="">Select District</option>
                <option value="Barishal">Barishal</option>
                <option value="Barguna">Barguna</option>
                <option value="Bhola">Bhola</option>
                <option value="Jhalokati">Jhalokati</option>
                <option value="Patuakhali">Patuakhali</option>
                <option value="Pirojpur">Pirojpur</option>
                <option value="Chittagong">Chittagong</option>
                <option value="Brahmanbaria">Brahmanbaria</option>
                <option value="Chandpur">Chandpur</option>
                <option value="Chittagong">Chittagong</option>
                <option value="Comilla">Comilla</option>
                <option value="Cox">Cox</option>
                <option value="Feni">Feni</option>
                <option value="Khagrachhari">Khagrachhari</option>
                <option value="Lakshmipur">Lakshmipur</option>
                <option value="Noakhali">Noakhali</option>
                <option value="Rangamati">Rangamati</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Faridpur">Faridpur</option>
                <option value="Gazipur">Gazipur</option>
                <option value="Gopalganj">Gopalganj</option>
                <option value="Kishoreganj">Kishoreganj</option>
                <option value="Madaripur">Madaripur</option>
                <option value="Manikganj">Manikganj</option>
                <option value="Munshiganj">Munshiganj</option>
                <option value="Narayanganj">Narayanganj</option>
                <option value="Narsingdi">Narsingdi</option>
                <option value="Rajbari">Rajbari</option>
                <option value="Shariatpur">Shariatpur</option>
                <option value="Tangail">Tangail</option>
                <option value="Khulna">Khulna</option>
                <option value="Chuadanga">Chuadanga</option>
                <option value="Jashore">Jashore</option>
                <option value="Jhenaidah">Jhenaidah</option>
                <option value="Khulna">Khulna</option>
                <option value="Kushtia">Kushtia</option>
                <option value="Magura">Magura</option>
                <option value="Meherpur">Meherpur</option>
                <option value="Narail">Narail</option>
                <option value="Satkhira">Satkhira</option>
                <option value="Mymensingh">Mymensingh</option>
                <option value="Mymensingh">Mymensingh</option>
                <option value="Netrokona">Netrokona</option>
                <option value="Sherpur">Sherpur</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Joypurhat">Joypurhat</option>
                <option value="Naogaon">Naogaon</option>
                <option value="Natore">Natore</option>
                <option value="Chapai">Chapai</option>
                <option value="Pabna">Pabna</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Sirajganj">Sirajganj</option>
                <option value="Rangpur">Rangpur</option>
                <option value="Gaibandha">Gaibandha</option>
                <option value="Kurigram">Kurigram</option>
                <option value="Lalmonirhat">Lalmonirhat</option>
                <option value="Nilphamari">Nilphamari</option>
                <option value="Panchagarh">Panchagarh</option>
                <option value="Rangpur">Rangpur</option>
                <option value="Thakurgaon">Thakurgaon</option>
                <option value="Sylhet">Sylhet</option>
                <option value="Moulvibazar">Moulvibazar</option>
                <option value="Sunamganj">Sunamganj</option>
                <option value="Sylhet">Sylhet</option>
            </select>
            </label>
            </div>
            <div class="p-1">
            <label class="form-control w-full max-w-xs">
            <!-- <div class="label">
                <span class="label-text">Requirement Date</span>
            </div> -->
            <input class="input input-bordered" placeholder="&nbsp Enter Date" type="date" id="date" name="date" required>
            </select>
            </label>
            </div>
            <div class="card-actions justify-end my-1">
            <button class="btn w-full rounded-none bg-pink-300">Search</button>
            </div>
            </form>
            
        </div>
        </div>
        <div class="grid grid-cols-3 gap-5">
        <?php 
        
        while($row= mysqli_fetch_assoc($result)) {?>
            <div class="card card-compact w-60 bg-base-100 shadow-xl">
            <div class="avatar flex justify-center">
                <div class="w-24 rounded-full">
                    <img src="<?php echo $row["url"] ?>" />
                </div>
                </div>            
                <div class="card-body">
                <h2 class="card-title text-center"><?php echo $row["username"] ?></h2>
                <div class="flex justify-between text-xs">
                <p>Group: <?php echo $row["bgroup"] ?></p>
                <p>District: <?php echo $row["district"] ?></p>
                </div>
                <p>Number: 01********</p>
                
                <div class="card-actions flex justify-end">
                <a href="profile?id=<?php echo $row["user_id"];?>"><button class="btn btn-outline-red rounded-none flex-1">See Details</button></a>
                </div>
            </div>
            </div>
        <?php }?>
    </div>
    <?php if(mysqli_num_rows($result) === 0){ ?>
        <div class="flex flex-1 justify-center items-center">
            <div>
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
            <dotlottie-player src="https://lottie.host/3c207588-e316-4a5f-9ad5-9788e479c5d6/nDzJ1JKpVj.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
            </div>
        </div>
        <?php }?>
    </div>
    
    </div> 

</body>
</html>