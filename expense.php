<?php

session_start();
//$userdata = $_SESSION['udisplay'];
include("index.php");

//@$tripid=$_POST['Id'];
@$ExpenseName = $_POST['E_name'];
@$ExpenseAmount= $_POST['E_amount'];
@$ExpenseDate= $_POST['E_date'];
//@$CategoryName = $_POST['C_name'];
//@$userid=$_POST['Id'];

$response = array();
//$cool = " select user.U_email, user.U_id from user inner join trip on trip.U_email=user.U_id;";
$userid = $_SESSION['udisplay']['Id'];


$query = "INSERT INTO expense(E_name,E_amount,E_date)
        VALUES('$ExpenseName ','$ExpenseAmount','$ExpenseDate')";
//$cool="select trip.U_email,user.U_id from user inner join trip on user.U_id=trip.U_id";
//SELECT * FROM trip INNER JOIN user ON trip.U_id = user.U_id ;



if (mysqli_query($conn, $query)) {
//    echo mysqli_error($conn);   
    // session_start();
    // $response['status'] = 0;
    $response['message'] = "Expense is successful";
    echo json_encode($response);
}
//    header("Location:./Home.php");
 else 
    {
    echo mysqli_error($conn);
    $response['status'] = 0;
    $response['message'] ="Expense Not successful";
    echo json_encode($response);
}




//echo $row;
//exit();
//echo $travel;
//exit();
/*
if(isset($_POST['email']))
{
    $last_id = mysqli_insert_id($conn);
foreach($_POST['email'] as $select) {
    $travel = "insert into traveller(T_id, U_id) values('$last_id','$select')";
    if (mysqli_query($conn, $travel)) {
        echo "added".$select;
    } else {
        echo "error traveller";
        exit();
    }
}
@$b=$_SESSION['udisplay']['Id'];
$travels = "insert into traveller(T_id, U_id) values($last_id,$b)";
    if (mysqli_query($conn, $travels)) {
        
        echo "added" . $select;
    }
    
    if(result)
    {
        header("Location:./Home.php");
    }
    else
    {
        echo "error";
        exit();
    }
}*/
?>

