<?php
$selectedSize = isset($_POST['size']) ? $_POST['size'] : '';
$soluong = isset($_POST['soluong']) ? $_POST['soluong'] : 1;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $hh = new hanghoa();
    $sp = $hh->getHangHoaId($id);
    $setMain = $sp->fetch();
    $tenhh = $setMain['tenhh'];
    $dongia = $setMain['dongia'];
    if ($selectedSize === 'M') {
        $adjustedPrice = $dongia + ($dongia * 0.2);
    } elseif ($selectedSize === 'L') {
        $adjustedPrice = $dongia + ($dongia * 0.4);
    } else {
        $adjustedPrice = $dongia;
    }
    $totalPrice = $adjustedPrice * $soluong;
}
?>
<script type="text/javascript">
    function chonsize(a) {
        document.getElementById("size").value = a;
        document.getElementById("productForm").submit();
    }

    function updateTotalPrice() {
        var selectedSize = document.querySelector('input[name="size"]:checked').value;
        var quantity = document.getElementById("quantity").value;
        var adjustedPrice;
        if (selectedSize === 'M') {
            adjustedPrice = <?php echo $dongia; ?> + (<?php echo $dongia; ?> * 0.2);
        } else if (selectedSize === 'L') {
            adjustedPrice = <?php echo $dongia; ?> + (<?php echo $dongia; ?> * 0.4);
        } else {
            adjustedPrice = <?php echo $dongia; ?>;
        }
        var totalPrice = adjustedPrice * quantity;
        document.getElementById("totalPrice").innerHTML = "Giá bán: " + numberWithCommas(totalPrice) + " đ";
    }

    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
</script>
<main id="main" class="">
    <div class="shop-container">
        <div id="product" class="product">
            <form id="productForm" action="index.php?action=giohang&act=giohang_action" method="post">
                <input type="hidden" name="mahh" value="<?php echo $id; ?>">
                <div class="product-container">
                    <div class="product-main">
                        <div class="row">
                            <div class="col-12 col-md-6 img-prod">
                                <?php
                                $hinh = $hh->getHangHoaHinh($id);
                                while ($img = $hinh->fetch()) :
                                ?>
                                    <a href="" data-wpel-link="internal">
                                        <img width="510" height="510" src="<?php echo './Content/image/' . $img['hinh']; ?>" alt="">
                                    </a>
                                <?php endwhile; ?>
                            </div>
                            <div class="col-12 col-md-6 detail-prod">
                                <h1 class="product-title product_title entry-title" name="tenhh"><?php echo ucwords($tenhh) ?></h1>
                                <div class="is-divider small"></div>
                                <div class="price-wrapper">
                                    <h4 id="totalPrice" name="dongia" class="price">
                                        Giá bán: <?php echo isset($totalPrice) ? number_format($totalPrice) : number_format($dongia); ?> đ
                                    </h4>
                                </div>
                                <div class="kich-thuoc">
                                    <p class="pe-1">Chọn size (bắt buộc)</p>
                                    <?php
                                    $size = $hh->getHangHoaSized($id);
                                    while ($set = $size->fetch()) :
                                        $isChecked = ($set['size'] === 'S') ? 'checked' : ''; // Add this line
                                    ?>
                                        <input type="radio" name="size" id="size_<?php echo $set['size']; ?>" value="<?php echo $set['size']; ?>" <?php echo $isChecked; ?> onclick="chonsize('<?php echo $set['size']; ?>')" onchange="updateTotalPrice()">
                                        <label for="size_<?php echo $set['size']; ?>"><?php echo $set['size']; ?></label>
                                    <?php endwhile; ?>
                                </div>
                                <div class="topping" style="margin-top:15px">
                                    <p style="margin: 0 ">Topping:</p>
                                    <?php
                                    $topping = $hh->getHangHoaTopping($id);
                                    while ($set = $topping->fetch()) :
                                    ?>

                                        <label class="option_item" for="topping_<?php echo $set['id_topping']; ?>">
                                            <input type="checkbox" class="checkbox" tid="prolang" title="<?php echo $set['tentp']; ?>" alt="<?php echo $set['tentp']; ?>" name="topping[]" id="topping_<?php echo $set['id_topping']; ?>" value="<?php echo $set['tentp']; ?>">
                                            <div class="option_inner tch_top">
                                                <div name="topping"><?php echo $set['tentp']; ?></div>
                                            </div>
                                        </label>
                                    <?php endwhile; ?>
                                </div>
                                <div class="so-luong">
                                    <label for="quantity">Số lượng:</label>
                                    <input type="number" id="quantity" class="input-text qty text w-25" step="1" min="1" max="" name="soluong" value="1" title="Qty" size="4" placeholder="" inputmode="numeric" onchange="updateTotalPrice()">
                                </div>
                                <button type="submit" class="btn btn-primary order">
                                    <span>Thêm vào giỏ hàng</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="product_meta">
                <span class="sku_wrapper">Mã: <span class="sku">N/A</span></span>
                <span class="posted_in">Danh mục:</span> <!-- Fixed the unclosed span tag here -->
            </div>
        </div>
    </div>
</main>
<?php
if (isset($_SESSION['makh']))
?>
<p class="float-left"><b>Bình luận </b></p>
<hr>
</div>
<form action="index.php?action=binhluan" method="post">
    <div class="row">
        <input type="hidden" name="txtmahh" value="<?php echo $id ?>" />
        <img src="Content/imagetourdien/people.png" width="50px" height="50px" ; />
        <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment" placeholder="Thêm bình luận">  </textarea>
        <input type="submit" class="btn btn-primary" id="submitButton" style="float: right;" value="Bình Luận" />
    </div>
</form>
<div class="row">
    <p class="float-left"><b>Các bình luận</b></p>
    <hr>
    <?php
    $bl = new binhluan();
    $noidung = $bl->selectBinhLuan($id);
    while ($set = $noidung->fetch()) :
    ?>
        <div class="col-12">
            <div class="row">
                <img src="Content/image/people.php" alt="">
                <p><?php echo '<b>' . $set['username'] . ':</b>' . $set['content']; ?></p><br>
            </div>
        </div>
    <?php
    endwhile;
    ?>
</div>
<div class="row">
    <br />
</div>
<style>
    .product-container {
        display: flex;
        justify-content: space-between;
    }

    .product-main {
        max-width: 1200px;
        margin: auto;
    }

    .product-container img {
        max-width: 100%;
        height: auto;
    }

    .kich-thuoc,
    .so-luong {
        margin-top: 20px;
    }

    .kich-thuoc label {
        margin: 5px;
        padding: 10px 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        cursor: pointer;
    }

    .kich-thuoc input[type="radio"] {
        display: none;
    }

    .kich-thuoc input[type="radio"]:checked+label {
        background-color: #B81F32;
        color: #fff;
    }


    .option_item {
        display: inline-block;
        /* Change from block to inline-block */
        position: relative;
        margin: 10px 10px 10px 0;
    }

    .option_item .checkbox {
        /* No changes needed */
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
        opacity: 0;
    }

    .option_item .option_inner {
        background: #fff;
        border-radius: 5px;
        text-align: center;
        cursor: pointer;
        color: #666666;
        height: 40px;
        padding: 0 15px;
        display: inline-flex;
        align-items: center;
        border: 1px solid rgba(0, 0, 0, 0.15);
        position: relative;
    }

    .option_item .option_inner .name {
        /* No changes needed */
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        font-weight: 400;
    }

    .option_item .checkbox:checked~.option_inner.tch_top {
        background: #B81F32;
        border-color: #B81F32;
        color: #fff;
    }

    .order {
        margin-top: 15px;
        text-align: center;
        padding: 10px 80px;

    }
</style>