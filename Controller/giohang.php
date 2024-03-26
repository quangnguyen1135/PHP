<?php

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array(); // tạo giỏ hàng chứa hàng, mỗi món hàng 1 object
}

$act = "giohang";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'giohang':
        include_once "./View/cart.php";
        break;
    case 'giohang_action':

        // nhận thông tin 1 món hàng cần mua
        // mahh, màu, size, soluong
        $id = 0;
        $tenhh = '';
        $size = '';
        $topping = '';
        $soluong = 0;
        $dongia = 0;
        if (isset($_POST['mahh'], $_POST['soluong'], $_POST['topping'])) {
            $id = $_POST['mahh'];
            $size = $_POST['size'];
            $soluong = $_POST['soluong'];
            $topping = $_POST['topping'];
            // đem thông tin add vào giỏ hàng

            $cart = new giohang();
            $cart->addCart($id, $size, $topping , $soluong);
            print_r($cart);

            echo '<meta http-equiv="refresh" content="0,url=./index.php?action=giohang"/>';
            include_once "./View/cart.php";
        } else {
            // Handle the case where form data is not set
            echo "console.log('Form data not set');";
        }
        break;
    case 'delcart':
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['act']) && $_GET['act'] === 'delcart') {
            // Check if the 'j' parameter is set and valid
            if (isset($_GET['j']) && is_numeric($_GET['j']) && $_GET['j'] > 0) {
                $deleteIndex = (int)$_GET['j'];
                if ($deleteIndex <= count($_SESSION['cart'])) {
                    // Use array_splice to remove the item from the cart
                    array_splice($_SESSION['cart'], $deleteIndex - 1, 1);
                }
            } else {
                // Invalid or missing parameters, redirect to the menu
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=menu_current" />';
                exit;
            }

            // Redirect based on the remaining cart items
            if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang" />';
            } else {
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=menu_current" />';
            }
            exit;
        } else {
            // Invalid request method or missing parameters, redirect to the menu
            header('Location: /index.php?action=menu_current');
            exit;
        }
        break;
    case 'update':
        if (isset($_POST['update']) && isset($_POST['newqty'])) {
            $updateIndex = $_POST['update'];
            $newqty = $_POST['newqty'][$updateIndex];

            // Instantiate the giohang class
            $up = new giohang();

            // Call the update function
            $up->update($updateIndex, $newqty);

            // Redirect to the shopping cart page after updating
            header('Location: ./index.php?action=giohang');
            exit();
        }
        break;
}
