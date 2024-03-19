<?php
    session_start();
    //input databse to form
    $dbName = $_POST['Name'];
    $dbEmail = $_POST['Email'];
    $dbPass = $_POST['Password'];
    $dbPhone = $_POST['Phone'];

    // connect database
    require_once("../Product/php/connect.php");

    
    $addCustomer = "INSERT INTO `CUSTOMERS` (`C_NAME`,`C_EMAIL`,`C_PASSWORD`, `C_PHONE`) VALUES
    ('$dbName','$dbEmail','$dbPass','$dbPhone')";
    
    if(mysqli_query($conn, $addCustomer)){
        $_SESSION['status'] = "Thêm khách hàng thành công!";
        header('location:customer_list.php');
    }
?>