<?php
$act = "cthanghoa";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'cthanghoa':
        include_once "./View/cthanghoa.php";
        break;

    case 'cthanghoa_action':
        if (isset($_POST['submit'])) {
            $mahh = $_POST['mahh'];
            $idloai = $_POST['maloai'];
            $dongia = $_POST['dongia'];
            $hinh = $_FILES['image']['name'];
            $giamgia = $_POST['giamgia'];
            ///
            echo $mahh;
            echo $idloai;
            echo $dongia;
            echo $hinh;
            echo $giamgia;

            $ct = new cthanghoa();
            $kq = $ct->insertCTHangHoa($mahh, $idloai, $dongia, $hinh, $giamgia);
            if ($kq !== false) {
                uploadImage();
                echo '<script> alert("Insert thành công")</script>';
                echo '<meta http-equiv=refresh content="0;url=../index.php?action=cthanghoa"/>';
            } else {
                echo '<script> alert("Insert ko thành công")</script>';
                echo '<meta http-equiv=refresh content="0;url=../index.php?action=cthanghoa"/>';
            }
        }
        break;
}
