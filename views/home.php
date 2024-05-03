<!DOCTYPE html>
<html data-theme="valentine">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>VitalFlow🩸</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='style/style.css'>
    <script src='js/main.js'></script>
</head>
<body>
    <header>
    <?php include_once("shared/nav.html") ?>
    </header>
    <div class="banner bg-[#eb3738] relative">
    <img class="opacity-20" src="assets/hands.png" alt="">
    <div class="content text-center absolute top-1/4 -translate-y-10 left-1/2 -translate-x-1/2">
        <h1 class="text-4xl font-bold text-white">VitalFlow</h1><br>
        <p class='text-white'>Connecting donors with rare blood groups to those in need, ensuring life-saving transfusions with ease.</p>
        <form action="">
            <div class="group-select flex bg-[#fae7f4] rounded-3xl my-5">
            <select class="select max-w-xs" name="group" id="">
                <option disabled selected value="">Blood Group</option>
                <option value="">AB-</option>
                <option value="">B-</option>
                <option value="">AB+</option>
                <option value="">A+</option>
                <option value="">O-</option>
                <option value="">B-</option>
                <option value="">A-</option>
                <option value="">O+</option>
            </select>
            <select class="select max-w-xs" name="district" id="">
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
            <input class="bg-[#fae7f4]" placeholder="&nbsp Enter Date" type="date" id="date">
            <button class="btn bg-[#fae7f4] flex-1 rounded-full">Search</button>
            </div>
        </form><br>
        <div class="btn-container">
            <button class="btn btn-outline text-white">Be a Donor</button>
            <!-- <button class="rounded-full outline outline-2 outline-white text-white">Be a Donor</button> -->
            <button class="btn">Find a Donor</button>
        </div>
    </div>
    </div>
</body>
</html>
