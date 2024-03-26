<?php

$act = "dangnhap";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'dangnhap':
        include_once "./View/login.php";
        break;
    case 'dangnhap_action':
        $user = "";
        $pass = "";
        if (isset($_POST['submit'])) {
            $user = $_POST['username'];
            $pass = $_POST['password'];
            // mã hóa $pass
            $saltF = "G4335#";
            $salfL = "F5567!";
            $passnew = md5($saltF . $pass . $salfL);
            // đem thông tin đi truy vấn nếu có thì đăng nhập thành công
            $kh = new user();
            $logkh = $kh->logKhachhang($user, $passnew);
            if ($logkh) {
                // luu gia tri vao trong sesion
                $_SESSION['makh'] = $logkh['makh'];
                $_SESSION['tenkh'] = $logkh['tenkh'];

                // In giá trị
                // print_r($_SESSION['makh']);
                // print_r($_SESSION['tenkh']);

                echo '<script> alert("dang nhap thanh cong"); </script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home" />';
            } else {
                echo '<script> alert("dang nhap khong thanh cong"); </script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=dangnhap" />';
            }
        }
        break;
    case 'logout':
        unset($_SESSION['makh']);
        unset($_SESSION['tenkh']);
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=dangnhap"/>';
        break;
}
