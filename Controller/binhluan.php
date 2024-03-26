<?php

if (isset($_SESSION['makh'])) {
    $makh = $_SESSION['makh'];
    $masp = $_SESSION['txtmahh'];
    $noidung = $_POST['comment'];
    //
    $bl = new binhluan();
    $bl->insertComment($makh, $masp, $noidung);
}
echo '<meta http-equiv="refresh" content="0;url=./index.php?action=menu_current&act=sanphamchitiet&id=' . $masp . '"/>';
