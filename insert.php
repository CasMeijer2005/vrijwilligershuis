<?php
require_once 'assets/core/db.php';


$mysqli = new mysqli('localhost', 'root', '', 'vrijwilligershuis') or die(mysqli_error($mysqli));
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $query = "INSERT INTO donaties (`name`,`phone`,`email`) VALUES ('$name','$phone','$email')";
    echo $query;
    $mysqli->query($query) or
        die($mysqli->error);

    // $_SESSION['message'] = "record has been saved!";
    // $_SESSION['msg_type'] = "success";
    header("location: index.php");
}
