<!DOCTYPE html>
<html theme="light" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../style/style.css">
    <title>Sign Up</title>
</head>
<body>
<div class="flex justify-center items-center">
    <div class="flex justify-between items-center bg-slate-100 shadow-2xl rounded-2xl p-[5%] relative">
        <div hidden id="alert" class="absolute top-1/2 left-1/2 text-center -translate-x-1/2 -translate-y-1/2 bg-white border-8 border-red-300  p-10 rounded-lg">
            <h1 class="text-xl">Registration Successful!!</h1>
            <p>Navigating to Login Page ...</p>
        </div>
            <div class="form">
            <h1 class="text-2xl">Registration</h1><br>
            <form class="form-1" action="">
            <progress class="progress progress-error w-full mb-2" value="33" max="100"></progress>
                <label class="input input-bordered flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#a72728" class="w-4 h-4 opacity-70"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" /></svg>
                <input type="text" id="username" class="grow" placeholder="Username" required />
                </label><br>
                <label class="input input-bordered flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#a72728" class="w-4 h-4 opacity-70"><path d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" /><path d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" /></svg>
                <input type="email" id="email" class="grow" placeholder="Email" required />
                </label><br>
                <label class="input input-bordered flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"fill="#a72728" class="w-4 h-4 opacity-70" viewBox="0 0 24 24"><path d="M18.48 22.926l-1.193.658c-6.979 3.621-19.082-17.494-12.279-21.484l1.145-.637 3.714 6.467-1.139.632c-2.067 1.245 2.76 9.707 4.879 8.545l1.162-.642 3.711 6.461zm-9.808-22.926l-1.68.975 3.714 6.466 1.681-.975-3.715-6.466zm8.613 14.997l-1.68.975 3.714 6.467 1.681-.975-3.715-6.467z"/></svg>                
                <input type="number" id="number" class="grow" placeholder="Phone Number" required />
                </label><br>
                <label class="input input-bordered flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#a72728" class="w-4 h-4 opacity-70"><path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" /></svg>
                <input type="password" id="password" class="grow" placeholder="Enter Password" required/>
                </label><br>
                <div class="form-1-btns flex justify-evenly">
                <button class="btn btn-error btn-disabled">Back</button>
                <button class="btn btn-error" onclick="showNext(2,event)">Next</button>
                </div>
            </form>
            <form class="form-2" hidden action="">
            <progress class="progress progress-error w-full mb-2" value="66" max="100"></progress>
                <label class="flex gap-2">
                <select class="select w-full" name="group" id="bgroup" required>
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
                </label><br>
                <label class="input input-bordered flex items-center gap-2">
                <input type="number" id="nid" class="grow" placeholder="NID Number" required />
                </label><br>
                <label for="dob" class="text-lg mb-1 text-black">Date of Birth</label>
                <label class="flex items-center gap-2">
                <input class="input w-full my-1" required type="date" id="dob">
                </label>
                <label for="gender" class="text-lg mb-1 text-black">Select Gender</label>
                <label class="my-2 flex items-center gap-2">
                <input type="radio" name="gender" class="radio radio-error" value="male" />Male
                <input type="radio" name="gender" class="radio radio-error" value="female"/>Female
                </label>
                <div class="form-2-btns flex justify-evenly mt-1">
                <button class="btn bg-slate-200 text-black" onclick="showBack(1,event)">Back</button>
                <button class="btn btn-error " onclick="showNext(3,event)">Next</button>
                </div>
            </form>
            <form class="form-3" hidden action="">
            <progress class="progress progress-error w-full mb-2" value="100" max="100"></progress>
                <label class="input input-bordered flex items-center gap-2">
                <input type="text" id="address" class="grow" placeholder="Present Address" required />
                </label><br>
                <label class="flex items-center gap-2">
                <select class="select w-full" required name="district" id="district" >
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
                </label><br>                
                <label for="donation" class="text-lg my-2 text-black">Blood Donation Date</label><br>
                <label class="flex items-center gap-2">
                <input class="input w-full my-2" type="date" id="donation_date">
                </label><br>
                <label class="input input-bordered flex items-center gap-2">
                <input type="text" class="grow" id="url" placeholder="Image URL" required />
                </label><br>
                <div class="form-3-btns flex justify-evenly">
                <button class="btn bg-slate-200 text-black" onclick="showBack(2,event)">Back</button>
                <button onclick="process(event)" class="btn btn-error ">Register</button>
                </div>
            </form><br>
            <p>Already have an account? <a href="login" class="underline text-error">Login</a></p>
            </div>
            <div class="w-1/2 flex flex-col justify-center items-center">
            <img src="img/register.png" alt="login">
            <button class="btn"><a class="text-center" href="home">Back to Home</a></button>
        </div>
    </div></div>
    <script src="views/authentication/auth.js"></script>
</body>
</html>