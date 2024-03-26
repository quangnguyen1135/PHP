<?php

$act = "menu_current";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'menu_current':
        include_once './View/menu_current.php';
        break;
    
    case 'sanphamtheoloai':
        include_once './View/menu_current.php';
        break;

    case 'sanphamchitiet':
        include_once "./View/sanphamchitiet.php";
        break;

    case 'timkiem':
        include_once "./View/menucurrent.php";
        break;
        
}
