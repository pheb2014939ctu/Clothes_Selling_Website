<?php 
session_start();
    require_once("connect.php");

    $dbid = $_GET['id'];
    
    if(isset($_POST['btn-edit-product'])){

        $dbName = $_POST['Name'];
        $dbType = $_POST['Type'];
        $dbPrice = $_POST['price'];
        $dbDescription = $_POST['description'];

        $sqlEdit = "UPDATE PRODUCT SET P_NAME = '$dbName', P_DESCRIPTION = '$dbDescription', PT_ID = '$dbType', P_PRICE = '$dbPrice' WHERE P_ID = $dbid";

        if(mysqli_query($conn, $sqlEdit)) {
            $_SESSION['status'] = "Cập nhật thành công!";
            header('location:../product_list.php');
            }    
        }
            ?>