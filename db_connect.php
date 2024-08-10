<?php 
    $_server = "localhost";
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone1 = $_POST['phone1'];
    $phone2 = $_POST['phone2'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $state = $_POST['state'];

    //database connection

    $conn = new mysqli('localhost','root','','parlour_booking');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into customer_tb(fname,lname,email,password,phone1,phone2,address1,address2,city,zip,state)
        values(?,?,?,?,?,?,?,?,?,?,?,)");
        $stmt->bind_param("ssssiissis",$fname,$lname,$email,$password,$phone1,$phone2,$address1,$address2,$city,$zip,$state);
        $stmt ->execute();
        echo"registration Succesfully....";
        $stmt->close();
        $conn->close();
    }

?>