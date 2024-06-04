<!DOCTYPE html>
<html data-theme="valentine">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>VitalFlow🩸</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='style/style.css'>
    <script src='js/main.js'></script>
</head>
<body class="bg-white">
    <header>
    <?php include_once("shared/nav.php") ?>
    </header>
    <div class="banner bg-[#eb3738] relative">
    <img class="opacity-20" src="assets/hands.png" alt="">
    <div class="content text-center absolute top-1/4 -translate-y-10 left-1/2 -translate-x-1/2">
        <h1 class="text-4xl font-bold text-white">VitalFlow</h1><br>
        <p class='text-white'>Connecting donors with rare blood groups to those in need, ensuring life-saving transfusions with ease.</p>
        <form action="donors">
            <div class="group-select flex bg-[#fae7f4] rounded-3xl my-5">
            <select class="select max-w-xs" name="bgroup" id="" required>
                <option disabled selected value="">Blood Group</option>
                <option value='AB-'>AB-</option>
                <option value="B-">B-</option>
                <option value="ABp">AB+</option>
                <option value="Ap">A+</option>
                <option value="O-">O-</option>
                <option value="A-">A-</option>
                <option value="Op">O+</option>
            </select>
            <select class="select max-w-xs" name="district" id="" required>
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
            <input class="bg-[#fae7f4]" placeholder="&nbsp Enter Date" type="date" id="date" name="date" required>
            <button class="btn bg-[#fae7f4] flex-1 rounded-full">Search</button>
            </div>
        </form><br>
        <div class="btn-container">
            <a href="blood-request-posts"><button class="btn btn-outline text-white">Be a Donor</button></a>
            <!-- <button class="rounded-full outline outline-2 outline-white text-white">Be a Donor</button> -->
            <a href="donors"><button class="btn">Find a Donor</button></a>
        </div>
    </div>
    </div>
    <!-- procedure -->
    <div class="flex justify-center gap-10 text-center py-10">
        <div class="flex flex-col items-center w-52">
            <div class="rounded-full bg-red-600 p-7">
            <i class="fa-solid fa-magnifying-glass text-4xl text-white"></i>
            </div>
            <h1 class="text-xl">Find Donor</h1>
            <p class="text-xs">Find donors all around the nation</p>
        </div>
        <div class="flex flex-col items-center w-52">
            <div class="rounded-full bg-red-600 p-7">
            <i class="fa-solid fa-bed-pulse text-4xl text-white"></i>
            </div>
            <h1 class="text-xl">Register as a Donor</h1>
            <p class="text-xs">Volunteer to be a donor and save lives</p>
        </div>
        <div class="flex flex-col items-center w-52">
            <div class="rounded-full bg-red-600 p-7">
            <i class="fa-regular fa-clock text-4xl text-white"></i>
            </div>
            <h1 class="text-xl">Schedule Donation</h1>
            <p class="text-xs">1 to 1 chat with donors to scedule a meet</p>
        </div>
        <div class="flex flex-col items-center w-52">
            <div class="rounded-full bg-red-600 p-7">
            <i class="fa-solid fa-chalkboard-user text-4xl text-white"></i>
            </div>
            <h1 class="text-xl">Educational Resources</h1>
            <p class="text-xs">Gain knowledge and spread awareness on blood donations </p>
        </div>
    </div>
    <!-- about us -->
    <div class="flex items-center gap-10 px-14">
        <img class="w-1/2" src="img/about.jpg" alt="about_us">
        <div class="w-2/3">
            <h1 class="text-2xl font-semibold">Who we <span class="text-red-600">Are</span>?</h1>
            <p>VitalFlow is an automated blood service that connects blood searchers with blood donors. It is  a free service for all</p><br>
            <h1 class="text-2xl font-semibold">Vision</h1>
            <p>VitalFlow is an automated blood service that connects blood searchers </p><br>
            <h1 class="text-2xl font-semibold">Mission</h1>
            <p>VitalFlow is an automated blood service that connects blood searchers</p>
        </div>
    </div>
    <!-- Milestones -->
    <div class="flex justify-center gap-10 py-10">
        <div class="card bg-white shadow-lg text-center p-10">
        <i class="fa-solid fa-heart-pulse text-5xl"></i>
        <h1 class="text-3xl font-bold">4556</h1>
        <p>Success Smile</p>
        </div>
        <div class="card bg-white shadow-lg text-center p-10">
        <i class="fa-solid fa-stethoscope text-5xl"></i>
        <h1 class="text-3xl font-bold">5556</h1>
        <p>Happy Donors</p>
        </div>
        <div class="card bg-white shadow-lg text-center p-10">
        <i class="fa-solid fa-people-group text-5xl"></i>
        <h1 class="text-3xl font-bold">2345</h1>
        <p>happy Receipients</p>
        </div>
        <div class="card bg-white shadow-lg text-center p-10">
        <i class="fa-solid fa-award text-5xl"></i>
        <h1 class="text-3xl font-bold">235</h1>
        <p>Prestigious Awards</p>
        </div>
    </div>
    <!-- footer -->
    <footer class="footer p-10 bg-base-200 text-base-content">
  <aside>
    <p>VitalFlow.<br>Providing reliable service since 2010</p>
  </aside> 
  <nav>
    <h6 class="footer-title">Services</h6> 
    <a class="link link-hover">Branding</a>
    <a class="link link-hover">Design</a>
    <a class="link link-hover">Marketing</a>
    <a class="link link-hover">Advertisement</a>
  </nav> 
  <nav>
    <h6 class="footer-title">Company</h6> 
    <a class="link link-hover">About us</a>
    <a class="link link-hover">Contact</a>
    <a class="link link-hover">Jobs</a>
    <a class="link link-hover">Press kit</a>
  </nav> 
  <nav>
    <h6 class="footer-title">Legal</h6> 
    <a class="link link-hover">Terms of use</a>
    <a class="link link-hover">Privacy policy</a>
    <a class="link link-hover">Cookie policy</a>
  </nav>
</footer>
</body>
</html>
