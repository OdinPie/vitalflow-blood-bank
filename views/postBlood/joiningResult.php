<?php
$conn = mysqli_connect('localhost:3307', 'root', '', 'bloodbank');
$result = mysqli_query($conn,'SELECT requests.*, users.username, users.url FROM requests INNER JOIN users ON requests.user_id=users.user_id ');

