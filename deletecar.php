<?php

require_once('connection.php');

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die('Invalid car ID');
}

$carid = (int)$_GET['id'];

$stmt = $con->prepare("DELETE FROM cars WHERE CAR_ID = ?");
$stmt->bind_param("i", $carid);
$result = $stmt->execute();

if ($result) {
    echo '<script>alert("CAR DELETED SUCCESSFULLY")</script>';
} else {
    echo '<script>alert("ERROR DELETING CAR")</script>';
}
echo '<script> window.location.href = "adminvehicle.php";</script>';

?>