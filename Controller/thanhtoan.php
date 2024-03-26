<?php
// Ensure session is started

$act = "thanhtoan";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'thanhtoan':
        if (isset($_SESSION['makh'])) {
            $makh = $_SESSION['makh'];
            $hd = new hoadon();
            $sohd = $hd->insertHoaDon($makh);
            $_SESSION['mshd'] = $sohd;
            $total = 0;
            // Check if $sohd is successfully obtained

            foreach ($_SESSION['cart'] as $key => $item) {
                // Attempt to insert each item into the order
                $hd->insertCTHoaDon($sohd, $item['mahh'], $item['qty'], $item['size'], $item['topping'], $item['total']);
                $total += $item['total'];
            }

            // Update total amount for the order
            $hd->updateHoaDon($sohd, $makh, $total);
        }
        unset($_SESSION['cart']);
        include_once "./View/order.php";
        // Clear cart after completing the order
        break;
}
