<?php
$act = "cthanghoa";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'addtopping':
        include_once "./View/AddTopping.php";
        break;
    case 'addtopping_action':
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['mahh']) && isset($_POST['topping'])) {
                $idhanghoa = $_POST['mahh'];
                $topping = $_POST['topping'];
                $tp = new cthanghoa();
                foreach ($_POST['topping'] as $selectedTopping) {
                    $sohd = $tp->insertCTTopping($selectedTopping, $idhanghoa);
                }
                echo '<script> alert("Insert thành công")</script>'; 
                echo '<meta http-equiv=refresh content="0;url=./index.php?action=cthanghoa&act=addtopping"/>';               
            } else {
                echo ('Lỗi insert !!');
            }
        }

    case 'cthanghoa':
        include_once "./View/cthanghoa.php";
        break;

    case 'cthanghoa_action':
        if (isset($_POST['submit'])) {
            $mahh = $_POST['mahh'];
            $idloai = $_POST['idloai'];
            $dongia = $_POST['dongia'];
            $hinh = $_FILES['image']['name'];
            $giamgia = $_POST['giamgia'];
            $ct = new cthanghoa();
            $kq = $ct->insertCTHangHoa($mahh, $idloai, $dongia, $hinh, $giamgia);
            if ($kq !== false) {
                uploadImage();
                echo '<script> alert("Insert thành công")</script>';
                echo '<meta http-equiv=refresh content="0;url=./index.php?action=cthanghoa&act=cthanghoa_all"/>';
            } else {
                echo '<script> alert("Insert ko thành công")</script>';
                echo '<meta http-equiv=refresh content="0;url=./index.php?action=hanghoa&act=cthanghoa"/>';
            }
        }
        break;
    case 'cthanghoa_all':
        include_once "./View/cthanghoaall.php";
        break;
    case 'update_cthanghoa':
        include_once "./View/cthanghoa.php";
        break;
    case "update_cthanghoa_action":
        // nhận thông tin
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $mahh = $_POST['idhanghoa'];
            $maloai = $_POST['idloai'];
            $dongia = $_POST['dongia'];
            $hinh = $_FILES['image']['name'];
            $giamgia = $_POST['giamgia'];
            // dem thông tin update vao database
            $hh = new cthanghoa();
            $kt = $hh->updateHangHoaCT($mahh, $maloai, $dongia, $hinh, $giamgia);
            if ($kt !== false) {
                echo '<script> alert("Update dữ liệu thành công")</script>';
                echo '<meta http-equiv=refresh content="0;url=./index.php?action=cthanghoa&act=cthanghoa_all"/>';
            } else {
                echo '<script> alert("Update dữ liệu ko thành công")</script>';
            }
        }
        break;
    case "del_hanghoa_ct":
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $hh = new cthanghoa();
            $kt = $hh->deleteHangHoaCT($id);
            if ($kt !== false) {
                echo '<script> alert("Xóa dữ liệu thành công")</script>';
                echo '<meta http-equiv=refresh content="0;url=./index.php?action=cthanghoa&act=cthanghoa_all"/>';
            } else {
                echo '<script> alert("Xóa dữ liệu không thành công")</script>';
            }
        }
        break;
}
