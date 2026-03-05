<?php
include "connect.php";

$donor_name = $_POST['donor_name'];
$food_type = $_POST['food_type'];
$quantity = $_POST['quantity'];
$location = $_POST['location'];
$pickup_time = $_POST['pickup_time'];

$sql = "INSERT INTO donations(donor_name,food_type,quantity,location,pickup_time)
VALUES('$donor_name','$food_type','$quantity','$location','$pickup_time')";

mysqli_query($conn,$sql);

echo "Food Donation Submitted Successfully";
?>
