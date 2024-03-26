<?php
$act = "dangky";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'dangky':
        include_once "./View/registration.php";
        break;
    case 'dangky_action':
        // gui qua nday nhugn nhung thong ti ntren form (input, select
        $tenkh = '';
        $dc = '';
        $sodt = '';
        $user = '';
        $pass = '';
        $email = '';
        if (isset($_POST['submit'])) {
            $tenkh = $_POST['txttenkh'];
            $dc = $_POST['txtdiachi'];
            $sodt = $_POST['txtsodt'];
            $user = $_POST['txtusername'];
            $pass = $_POST['txtpass'];
            $email = $_POST['txtemail'];
            // ma hoa pass
            $saltF = "G4335#";
            $salfL = "F5567!";
            $passnew = md5($saltF . $pass . $salfL);
            // controller yeu cau model phai insert vaof database
            $kh = new user();

            // check kh
            $exists = $kh->checkKhachHang($user, $email);
            var_dump($exists);

            if ($exists == false) {
                echo '<script> alert("Tên đăng nhập hoặc email đã tồn tại. Vui lòng thử lại."); </script>';
                include_once "./View/registration.php";
                exit;
            } else {
                $kq = $kh->insertKhachHang($tenkh, $user, $passnew, $email, $dc, $sodt);
                if ($kq) {
                    echo '<script> alert("dang ky thanh cong"); </script>';
                    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home" />';
                } else {
                    echo '<script> alert("dang ky khong thanh cong"); </script>';
                    include_once "./View/registration.php";
                }
            }
            break;
        }
    }
