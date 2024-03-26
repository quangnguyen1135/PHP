<?php
$act = "contact";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'contact':
        include_once "./View/contact.php";
        break;

    case 'about_us':
        include_once "./View/about_us.php";
        break;
    case 'recruitment':
        include_once "./View/recruitment.php";
        break;
}
