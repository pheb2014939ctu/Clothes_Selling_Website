<?php
    //input databse to form
    $dbid = $_GET['id'];

    // connect database
    require_once("../Product/php/connect.php");

    
    $delCustomer = "DELETE FROM CUSTOMERS WHERE C_ID='$dbid'";
    
    if(mysqli_query($conn, $delCustomer)){
        
        header('location:customer_list.php');
    }
?>