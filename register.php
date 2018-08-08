<?php

include ("index.php");

$name = $_POST['Name'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$mobile = $_POST['phone'];
$active = 1;
$response = array();


$query = "INSERT INTO user (U_name,U_email,U_password,u_mobile,U_active) 
  		  VALUES('$name', '$email','$password','$mobile','$active')";

if (mysqli_query($conn, $query)) {

  //  echo mysqli_error($conn);
    //$response['status'] = 1;
    //$response['message'] = "Registartion Successful";
    //echo json_encode($response);

    header("Location:./log.php");
    exit();
} else {

    echo mysqli_error($conn);
    $response['status'] = 0;
    $response['message'] = "Registartion Not successful";
    echo json_encode($response);
    
}
?>