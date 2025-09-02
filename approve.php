<?php

require_once('connection.php');

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die('Invalid booking ID');
}

$bookid = (int)$_GET['id'];

$stmt = $con->prepare("SELECT * FROM booking WHERE BOOK_Id = ?");
$stmt->bind_param("i", $bookid);
$stmt->execute();
$result = $stmt->get_result();
$res = $result->fetch_assoc();

if (!$res) {
    die('Booking not found');
}

$car_id = $res['CAR_ID'];
$stmt2 = $con->prepare("SELECT * FROM cars WHERE CAR_ID = ?");
$stmt2->bind_param("i", $car_id);
$stmt2->execute();
$carres = $stmt2->get_result();
$carresult = mysqli_fetch_assoc($carres);
$email=$res['EMAIL'];
$carname=$carresult['CAR_NAME'];
if($carresult['AVAILABLE']=='Y')
{
if($res['BOOK_STATUS']=='APPROVED' || $res['BOOK_STATUS']=='RETURNED')
{
    echo '<script>alert("ALREADY APPROVED")</script>';
    echo '<script> window.location.href = "adminbook.php";</script>';
}
else{
    $stmt3 = $con->prepare("UPDATE booking SET BOOK_STATUS='APPROVED' WHERE BOOK_ID = ?");
    $stmt3->bind_param("i", $bookid);
    $stmt3->execute();
    
    $stmt4 = $con->prepare("UPDATE cars SET AVAILABLE='N' WHERE CAR_ID = ?");
    $stmt4->bind_param("i", $res['CAR_ID']);
    $stmt4->execute();
    
    echo '<script>alert("APPROVED SUCCESSFULLY")</script>';
    // $to_email = $email;
    // $subject = "DONOT-REPLY";
    // $body = "YOUR BOOKING FOR THE CAR $carname IS BEEN APPROVED WITH BOOKING ID : $bookid";
    // $headers = "From: sender email";
    
    // if (mail($to_email, $subject, $body, $headers))
    
    // {
    //     echo "Email successfully sent to $to_email...";
    // }
    
    // else

    // {
    // echo "Email sending failed!";
    // }
    echo '<script> window.location.href = "adminbook.php";</script>';
}  
}
else{
    echo '<script>alert("CAR IS NOT AVAILABLE")</script>';
    echo '<script> window.location.href = "adminbook.php";</script>';
}


?>