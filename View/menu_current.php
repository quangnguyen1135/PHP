<?php
//b1: xac dinh co bao nhieu san pham, select count(*)
$hh = new hanghoa();
$count = $hh->getHangHoaAll()->rowCount(); //14
//b2: limit
$limit = 9;
//b3: tinh ra co bao nhieu trang
$trang = new page();
$page = $trang->findPage($count, $limit); //2 trang
//b4: tinh ra start
$start = $trang->findStart($limit); // 8
//b5: tao bien chua trang hien tai
$current_page = isset($_GET['page']) ? $_GET['page'] : 1
?>
<!-- end số lượt xem san phẩm -->
<style id='global-styles-inline-css' type='text/css'>
    body {
        background-color: #F5EEE8;
    }
</style>
<div>
    <div id="page-heading" style="background-image: url(./Content/wp-content/uploads/2020/08/banner-menu-1900-x-335.jpg)">
        <div class="container">
            <h2 class="page-title">Menu</h2>
            <p>Introducing attractive and varied drinks from Gong Cha</p>
        </div>
    </div>
    <div id="breadcrumbs">
        <div class="container">
            <div id="breadcrumbs-nav">
                <!-- Breadcrumb NavXT 6.0.4 -->
                <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Gong cha Vietnam." href="../../index.html" class="home"><i class="fa fa-home"></i> </a>
                    <meta property="position" content="1">
                </span> <i class="fa fa-angle-right"></i> <span property="itemListElement" typeof="ListItem"><span property="name">Menu</span>
                    <meta property="position" content="2">
                </span>
            </div>
        </div>
    </div>
    <main class="">
        <div id="terms-nav">
            <div class="container">
                <div id="terms-nav-inner">
                    <ul class="clearfix">
                        <?php
                        $hh = new hanghoa();
                        $result = $hh->getHangHoaLoai();
                        while ($set = $result->fetch()) :
                        ?>
                            <li>
                                <a class="scroll-to-top" href="index.php?action=menu_current&act=sanphamtheoloai&id=<?php echo $set['idloai']; ?>"><?php echo $set['tenloai'] ?></a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
        <section class="block-products" id="block-50">
            <!-- <div class="container">
                <h2 class="category-heading">Kem</h2>
            </div> -->
            <div class="container p-row">
                <div class="row">
                    <?php
                    $hh = new hanghoa();
                    $result = null;

                    if (isset($_GET['act']) && $_GET['act'] == 'sanphamtheoloai' && ($_GET['id'] > 0)) {
                        $maloai = $_GET['id'];
                        $result = $hh->getHangHoaTheoLoai($maloai, $start, $limit);
                    } else if (isset($_POST['txtsearch'])) { // Check if the search form is submitted
                        $tk = $_POST['txtsearch'];
                        // câu truy vấn
                        $result = $hh->timkiemSanPham($tk);
                    } else {
                        $result = $hh->getHangHoaAllPage($start, $limit);
                    }
                    if ($result) {
                        while ($set = $result->fetch()) :
                    ?>
                            <div class="col-sm-4 col-md-4 col-xs-6">
                                <div class="p-item">
                                    <div class="p-thumb">
                                        <a data-id="1615" href="index.php?action=menu_current&act=sanphamchitiet&id=<?php echo $set['mahh']; ?>">
                                            <figure><img width="958" height="958" src="./Content/image/<?php echo $set['hinh']; ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" sizes="(max-width: 958px) 100vw, 958px" /></figure>
                                        </a>
                                    </div>
                                    <div class="p-meta">
                                        <h4><a href="index.php?action=menu_current&act=sanphamchitiet&id=<?php echo $set['mahh']; ?>"><?php echo ucwords($set['tenhh']); ?></a></h4>

                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    }
                    ?>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-md-6 div col-md-offset-3 text-center">
                <ul class="pagination">
                    <?php
                    if ($current_page > 1 && $page > 1) {
                        echo '<li><a href="/Duan/index.php?action=menu_current&page=' . ($current_page - 1) . '">Prev</a></li>';
                    }

                    for ($i = 1; $i <= $page; $i++) : ?>
                        <li><a href="/Duan/index.php?action=menu_current&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php endfor;

                    if ($current_page < $page && $page > 1) {
                        echo '<li><a href="/Duan/index.php?action=menu_current&page=' . ($current_page + 1) . '">Next</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </main>
</div>