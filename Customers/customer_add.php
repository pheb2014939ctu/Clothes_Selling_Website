<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Product/Style/admin1.css" />
    <title>Admin-Thêm khách hàng</title>
</head>

<body>
    <?php 
        require_once("../Product/php/connect.php");

        $sqlCategory = "SELECT * FROM PRODUCT_TYPE";

        $category = mysqli_query($conn, $sqlCategory)

    ?>

    <header>
        <h1>Quản lý khách hàng</h1>
    </header>
    <section class="admin-content">
        <div class="admin-left admin-content-left">
            <ul>
                <li>
                    <a href="#">User</a>
                    <ul>
                        <li class="li-item"><a href="customer_add.php">Thêm user</a></li>
                        <li class="li-item"><a href="customer_list.php">Danh sách user</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Sản phẩm</a>
                    <ul>
                        <li class="li-item"><a href="../Product/product_add.php">Thêm sản phẩm</a></li>
                        <li class="li-item"><a href="../Product/product_list.php">Danh sách sản phẩm</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="admin-right admin-content-right">
            <div class="admin-content-right-product_add">
                <?php 
                if(isset($_SESSION['status']))
                {
                    echo $_SESSION['status'];
                    unset($_SESSION['status']);
                }
                ?>
                <br><h2>Thêm khách hàng</h2> <br>
                <form action="http://localhost/BaiTapNhomProjetcWeb/Customers/test_add.php" method="post"
                    enctype="multipart/form-data">
                    <label for="">Nhập tên khách hàng <span style="color: red">*</span></label>
                    <input type="text" name="Name" required />
                    <label for="">Email<span style="color: red">*</span></label>
                    <input type="text" name="Email" required />
                    <!-- <input type="number" min="1" max="4" name="Type" required /> -->
                    <label for="">Password<span style="color: red">*</span></label>
                    <input type="text" name="Password" required />
                    <label for="">Số điện thoại <span style="color: red">*</span></label>
                    <input type="text" name="Phone" required />
                    <button type="submit" enctype="multipart/form-data" name="btn-add-product">Thêm</button>
                </form>
            </div>
        </div>
    </section>
    <script src="select.js"></script>
</body>

</html>