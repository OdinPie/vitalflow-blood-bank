<?php
 // Check if form data is received
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // Access form data
     $username = $_POST['username'];
     $number = $_POST['number'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $bgroup = $_POST['bgroup'];
     $address = $_POST['address'];
     $district = $_POST['district'];
     $url = $_POST['url'];
     $nid = $_POST['nid'];
     $dob = $_POST['dob'];
     $ddate = $_POST['ddate'];
     $gender = $_POST['gender'];
     $validator_name = $_POST['validator_name'];
     $validator_designation = $_POST['validator_designation'];
     
     $conn = mysqli_connect('localhost:3307', 'root', '', 'bloodbank');
     if ($conn->connect_error) {
        die('Connection Failed' .$conn->connect_error);
     }else{
        $statement = $conn->prepare("INSERT INTO users (username, number, password, email,
        bgroup, nid, dob, gender, address, district, ddate, url, validator_name,validator_designation ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?) ;");
     }  $statement->bind_param("sisssissssssss",$username, $number, $password, $email,$bgroup, $nid
                            ,$dob,$gender,$address,$district,$ddate, $url , $validator_name, $validator_designation);
        $statement->execute();
        echo "data saved successfully";
        $statement->close();
 } else {
     // Handle if form data is not received
     echo "Form data not received!";
 }
 