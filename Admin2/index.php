<?php
// include "Model/connect.php";
// include "Model/hanghoa.php";
// include "Model/loaisanpham.php";
 include "Model/upload.php";
session_start();
// unset($_SESSION['admin']);
set_include_path(get_include_path() . PATH_SEPARATOR . 'Model/');
spl_autoload_extensions('.php');
spl_autoload_register();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script> -->
    <!-- link đăng nhập -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Content/CSS/main.d810cf0ae7f39f28f336.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./Content/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/metismenu/dist/metisMenu.min.css">
    <link rel="stylesheet" href="./Content/metismenu-master/dist/metisMenu.css">
    <link rel="stylesheet" href="./Content/Icon-font-7-stroke-PIXEDEN-v-1.2.0/assets/Pe-icon-7-stroke.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery"></script>
    <script src="https://cdn.jsdelivr.net/npm/metismenu"></script>


    <!-- link đăng nhập -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- end -->
    <!-- end link đăng nhập -->
    <title>Admin SanPham</title>
</head>

<body>
    <!-- Thanh header tao menu -->
    <?php
    if (isset($_SESSION['admin'])) {
        include "View/headder.php";
    }
    ?>
    <!-- end hinh dong -->
    <!-- phan thân -->
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <?php
        //load controler

        $ctrl = "dangnhap";
        if (isset($_GET['action']))
            $ctrl = $_GET['action'];
        include 'Controller/' . $ctrl . '.php';
        // include 'Controller/'.$ctrl.'.php';

        //end controller
        ?>
    </div>
    </div>
    <!-- end menu right -->
    <!-- footer -->
    <?php
    if (isset($_SESSION['admin'])) {
        include "View/footer.php";
    }
    ?>
    <!-- end footer -->

</body>
<script type="text/javascript" src="./Content/js/main.d810cf0ae7f39f28f336.js"></script>

</html>