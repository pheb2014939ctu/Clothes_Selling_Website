<?php
    //input databse to form
    $dbid = $_GET['id'];

    // connect database
    require_once("connect.php");

    
    $delproduct = "DELETE FROM PRODUCT WHERE P_ID='$dbid'";
    
    if(mysqli_query($conn, $delproduct)){
        
        header('location:../product_list.php');
    }
?>