<?php 
    if (isset($_POST["submit"])) {
        $bgroup = $_POST["bgroup"];
        $rdate = $_POST["rdate"];
        $division = $_POST["division"];
        $district = $_POST["district"];
        $no_of_bags = $_POST["no_of_bags"];
        $hospital = $_POST["hospital"];
        $message = $_POST["message"];
        $user_id = $_SESSION["id"];

        $conn = mysqli_connect('localhost:3307', 'root', '', 'bloodbank');
        if ($conn->connect_error) {
            die ("conncetion error!!".$conn->connect_error);
        }else{
        // echo $conn;
        $statement = $conn->prepare('INSERT INTO requests (bgroup, rdate, division, district, no_of_bags, hospital, details, user_id) VALUES (?,?,?,?,?,?,?,?)');
        // echo $statement;
        $statement->bind_param("ssssissi",$bgroup,$rdate,$division,$district,$no_of_bags,$hospital,$message,$user_id);
        $statement->execute();
        $statement->close();
        }
    }
?>
<body>
    <div class="container flex justify-center items-center bg-slate-200 h-[100%]">
        <div class="form-container rounded-xl bg-slate-200 text-slate-400 p-10">
            <form method="POST">
                <h1 class="text-2xl font-bold text-black">Request for Blood</h1><br>
                <div class="flex gap-10 my-2">
                <select name="bgroup" class="select select-bordered w-[300px] bg-white">
                <option disabled selected>Blood Group</option>
                <option value="AB-">AB-</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="A+">A+</option>
                <option value="O-">O-</option>
                <option value="A-">A-</option>
                <option value="O+">O+</option>
                </select> 
                <input class="w-[300px] p-3 rounded-full bg-white" placeholder="Requirement Date" type="text" onfocus="this.type='date'" onblur="this.type='text' " name="rdate" id="">               
                </div>
                <div class="flex gap-10 my-2">
                <select class="select select-bordered w-[300px] bg-white" name="division">
                    <option value="" disabled selected>Select Division</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Sylhet">Sylhet</option>
                </select>
                <select class="select select-bordered w-[300px] bg-white" name="district" id="">
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
                </div>
            <div class="flex gap-10 my-2">
            <input type="number" placeholder="Number of Bags" name="no_of_bags" class="input input-bordered bg-white w-[300px]" />
            <input type="text" placeholder="Name of Hospital" name="hospital" class="input input-bordered bg-white w-[300px]" />

            </div>
            <textarea name="message" class="w-full rounded-xl bg-white p-3 my-2" placeholder="Write additional details here..." id=""></textarea>
            <br>
            <button name="submit" class="btn btn-error w-full">Request Blood</button>
            </form>
        </div>
    </div>
</body>
</html>