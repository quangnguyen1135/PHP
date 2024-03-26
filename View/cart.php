<div class="table-responsive">
    <?php
    // Check if the cart is set and not empty
    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    ?>
       
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td colspan="5">
                            <h2 style="color: red;">THÔNG TIN GIỎ HÀNG</h2>
                        </td>
                    </tr>
                    <tr class="table-success">
                        <th>Số TT</th>
                        <th>Thông Tin Sản Phẩm</th>
                        <th>Tùy Chọn Của Bạn</th>
                        <th colspan="2" class="d-flex justify-content-between">
                            Giá
                            <a href="index.php?action=giohang&act=delcart" class="text-right" onclick="return confirmDelete()">Xóa giỏ hàng</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $j = 0;
                    foreach ($_SESSION['cart'] as $key => $item) {
                        $j++;
                    ?>
                        <tr>
                            <td><?php echo $j; ?></td>
                            <td>
                                <img width="100px" height="100px" src="./Content/image/<?php echo $item['hinh']; ?>">
                                <?php echo ucwords($item['name']); ?> -
                                Size: <?php echo $item['size']; ?>
                                <br>
                                Topping:
                                <?php
                                $toppings = $item['topping'];
                                foreach ($toppings as $topping) {
                                    echo $topping . ', ';
                                }
                                ?>
                            </td>
                            <td>
                                Đơn Giá: <?php echo number_format($item['cost']); ?> <br>
                                Số Lượng: <input type="number" name="newqty[]" value="<?php echo $item['qty']; ?>" /><br />
                                <p style="float: right;"> Thành Tiền <?php echo number_format($item['total']); ?> <sup><u>đ</u></sup></p>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="index.php?action=giohang&act=delcart&j=<?php echo $j; ?> " onclick="return confirmDelete1()">Xóa</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    <tr>
                        <td colspan="2">
                            <b>Tổng Tiền</b>
                        </td>
                        <td colspan="1">
                            <a href="index.php?action=menu_current">Tiếp tục mua hàng</a>
                        </td>
                        <td style="float: right;">
                            <!-- It seems like sub_Total() method is called here, ensure it's defined properly -->
                            <b><?php $gh = new giohang();
                                echo $gh->sub_Total(); ?> <sup><u>đ</u></sup></b>
                        </td>
                        <td>                        
                            <a href="index.php?action=thanhtoan">dathang</a> <!-- Changed 'ODER' to 'Đặt Hàng' for consistency -->
                        </td>
                    </tr>
                </tbody>
            </table>
        
    <?php } else {
        // If cart is empty or not set, display a message and redirect to menu_current
        echo 'Giỏ hàng đang trống.';
        echo '<script> alert("Giỏ hàng chưa có hàng.")</script>';
        echo '<meta http-equiv="refresh" content="0;url=index.php?action=menu_current"/>';
    }
    ?>
</div>

<script>
    function confirmDelete() {
        return confirm('Bạn có chắc muốn xóa toàn bộ giỏ hàng?');
    }

    function confirmDelete1() {
        return confirm('Bạn có chắc muốn xóa sản phẩm này không?');
    }
</script>
