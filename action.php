<?php 

require_once("config.php");


// Register form behind the scene here:
    if(($_GET['form']=='register') AND ($_POST['btn_register']=='Register')){
     
   
        $username = $_POST['username'];
        $email =  $_POST['email'];
        $password = $_POST['password'];

        $query = "select * from userlog where email = '$email'";
 
        $queryrun = mysqli_query($conn,$query);
        
        if($queryrun->num_rows !=0){

            $alert = "email already exist";
           header("location:register.php?alert=".$alert);
            die();
        }
     $queryi = "insert into userlog (email, password) values('$email','$password')";
     $queryr = mysqli_query($conn,$queryi);
     if($queryr){
        $alert = "account created successfully";
        header("location:login.php?alert=".$alert);
        die();
     }

    }else{

        header("location:index.php");
    }