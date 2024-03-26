  <!-- quảng cáo -->
  <?php
    include "quangcao.php";
    ?>
  <!-- end quảng cáo -->
  <?php
    //b1: xac dinh co bao nhieu san pham, select count(*)
    $hh = new hanghoa();
    $count = $hh->getHangHoaAll()->rowCount(); //14
    //b2: limit
    $limit = 8;
    //b3: tinh ra co bao nhieu trang
    $trang = new page();
    $page = $trang->findPage($count, $limit); //2 trang
    //b4: tinh ra start
    $start = $trang->findStart($limit); // 8
    //b5: tao bien chua trang hien tai
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1
    ?>
  <!-- end số lượt xem san phẩm -->
  <!-- sản phẩm-->
  <?php
    $act = 1;
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'sanpham') {
            if (isset($_GET['act']) && $_GET['act'] == 'sanphamkhuyenmai') {
                $act = 2;
            } else {
                $act = 1;
            }
        }
    }
    ?>


  <!--Section: Examples-->
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right">
              <?php
                if ($act == 1) {
                    echo '<h3 class="mb-5 font-weight-bold" style="color:red">Tat ca san pham </h3>';
                }
                if ($act == 2) {
                    echo '<h3 class="mb-5 font-weight-bold" style="color:red">Tat ca san pham khuyen mai</h3>';
                }
                ?>
          </div>
      </div>
      <!--Grid row-->
      <div class="row">
          <?php
            $hh = new hanghoa();
            if ($act == 1) {
                // $result = $hh->getHangHoaAll();
                $result = $hh->getHangHoaAllPage($start, $limit);
            }
            if ($act == 2) {
                $result = $hh->getHangHoaAllSale();
            }
            while ($set = $result->fetch()) :
            ?>
              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-left">
                  <div class="view overlay z-depth-1-half">
                      <img src="Content/imagetourdien/<?php echo $set['hinh']; ?>" class="img-fluid" alt="">
                      <div class="mask rgba-white-slight"></div>
                  </div>
                  <?php
                    if ($act == 1) {
                        echo '<h5 class="my-4 font-weight-bold" style="color: red;"> ' . number_format($set['dongia']) . ' <sup><u>đ</u></sup></h5>';
                    }
                    if ($act == 2) {
                        echo '<h5 class="my-4 font-weight-bold" style="color: red;"> ' . number_format($set['dongia']) . ' <sup><u>đ</u></sup></h5>';
                    }
                    ?>

                  <a href="">
                      <span><?php echo $set['tenhh'] . " - " . $set['mausac']; ?></span></br></a>
                  <button class="btn btn-danger" id="may4" value="lap 4">New</button>
                  <h5>Số lượt xem:<?php echo $set['soluotxem']; ?></h5>

              </div>
          <?php endwhile; ?>
      </div>

      <!--Grid row-->

  </section>


  <!-- end sản phẩm mới nhất -->

  <div class="col-md-6 div col-md-offset-3">
      <ul class="pagination">
          <?php
            for ($i = 0; $i < $page; $i++) :
            ?>
              <li><a href="/index.php?action=sanpham&page=<?php echo $i; ?><?php echo $i?>"></a></li>
          <?php endfor; ?>
      </ul>
  </div>