<?php 
require_once("views/authentication/config.php");
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
    <?php require_once('shared/nav.php') ?>
    <div class="px-10">
    <div class="flex justify-between items-center p-5">
        <p class="font-semibold">Results(03)</p>
        <div class="flex gap-2">
        <p class="text-sm">SORT BY</p>
        <select class="border" name="sort" id="">
            <option value="Newest">Newest</option>
            <option value="Oldest">Oldest</option>
        </select>
        </div>
    </div>
    <hr>
    <div class="flex gap-10 my-10">
            <div class="card card-compact w-72 bg-transparent shadow-xl">
            <div class="card-body">
            <h2 class="card-title text-center">Advanced Search</h2>
            <hr>
            <div class="p-1">
            <label class="form-control w-full max-w-xs">
            <div class="label">
                <span class="label-text">Blood Group</span>
            </div>
            <select class="select select-bordered w-full max-w-xs">
                <option value="AB-">AB-</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="A+">A+</option>
                <option value="O-">O-</option>
                <option value="B-">B-</option>
                <option value="A-">A-</option>
                <option value="O+">O+</option>
            </select>
            </label>
            </div>
            <div class="p-1">
            <label class="form-control w-full max-w-xs">
            <div class="label">
                <span class="label-text">District</span>
            </div>
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
            <div class="card-actions justify-end">
            <button class="btn w-full rounded-none bg-pink-300">Search</button>
            </div>
        </div>
        </div>
        <div class="grid grid-cols-3 gap-5">
        <?php 
        $result = mysqli_query($conn,"SELECT * FROM users");
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
    </div>
    
    </div>
    
</body>
</html>