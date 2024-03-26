<?php
class giohang
{
    // Method to add item information to the cart
    function addCart($mahh, $size, $topping, $soluong)
    {
        // Get product information from its id
        $sp = new hanghoa();
        $idspStmt = $sp->getHangHoaId($mahh); 
        $idsp = $idspStmt->fetch(PDO::FETCH_ASSOC); 
        
        $tensp = $idsp['tenhh'];
        $dongia = $idsp['dongia'];
        $img = $idsp['hinh'];
        $total = $soluong * $dongia;
    
        // Check if the same product with the same size and toppings already exists in the cart
        $flag = false;
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['mahh'] == $mahh && $item['size'] == $size && $item['topping'] == $topping) {
                $flag = true;
                // Update quantity
                $_SESSION['cart'][$key]['qty'] += $soluong;
            }
            // Update total price
            $_SESSION['cart'][$key]['total'] = $_SESSION['cart'][$key]['qty'] * $_SESSION['cart'][$key]['cost'];
        }
        // If the product doesn't exist in the cart, add it
        if (!$flag) {
            $item = array(
                'mahh' => $mahh,
                'name' => $tensp,
                'hinh' => $img,
                'size' => $size,
                'topping' => $topping,
                'cost' => $dongia,
                'qty' => $soluong,
                'total' => $total,
            );
            // Add item to the cart array
            $_SESSION['cart'][] = $item;
        }
    }

    // Method to update total price based on selected options
    function updateTotalPrice($dongia, $selectedSize, $quantity, $selectedToppings)
    {
        $adjustedPrice = $dongia;
        if ($selectedSize === 'M') {
            $adjustedPrice += ($dongia * 0.2);
        } elseif ($selectedSize === 'L') {
            $adjustedPrice += ($dongia * 0.4);
        }
        
        // Calculate price based on quantity and selected size
        $totalPrice = $adjustedPrice * $quantity;
        
        // Handle selected toppings
        if (!empty($selectedToppings)) {
            $hh = new hanghoa();
            foreach ($selectedToppings as $toppingId) {
                // Get topping price from the database
                $toppingPrice = $hh->getToppingPrice($toppingId);
                
                // Add topping price to total price
                $totalPrice += $toppingPrice;
            }
        }
        
        // Return the calculated total price
        return $totalPrice;
    }

    // Method to calculate subtotal of the cart
    function sub_Total()
    {
        $subtotal = 0;
        foreach ($_SESSION['cart'] as $item) {
            $subtotal += $item['total'];
        }
        $subtotal = number_format($subtotal, 2);
        return $subtotal;
    }

    // Method to update quantity and total price of an item in the cart
    function update($index, $soluong) {
        $soluong = intval($soluong);
        if ($soluong <= 0) {
            // If quantity is less than or equal to zero, remove the item from the cart
            unset($_SESSION['cart'][$index]);
        } else {
            // Update the quantity and total price of the item
            $_SESSION['cart'][$index]['qty'] = $soluong;
            $_SESSION['cart'][$index]['total'] = $_SESSION['cart'][$index]['qty'] * $_SESSION['cart'][$index]['cost'];
        }
    }   
}
