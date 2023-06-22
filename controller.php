<?php


print_r($_POST);
// fetching data from index
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pickup_location = $_POST['pickup_location'];
$destination = $_POST['destination'];
$pickup_date = $_POST['pickup_date'];
$time = $_POST['time'];


// connecting database
include 'databaseconnect.php';

// inserting into database
$sql = "INSERT INTO booking_table(name,email,phone,pickup_location,destination,pickup_date,time)
        VALUES('$name','$email','$phone','$pickup_location','$destination','$pickup_date','$time')";

        // execute sql
        if($connection->query($sql)){
            echo "Record Inserted Successfully";
            header("Location:index.php");
        }else{
            echo "Error inserting record". $connection->error;
        }

?>