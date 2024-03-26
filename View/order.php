<div class="table-responsive">
  <?php
  if (!isset($_SESSION['makh'])) :

    echo '<script> alert("Bạn phải đăng nhập")</script>';
    echo '<meta http-equiv="refresh" content="0; url=./index.php?action=dangnhap"/>';

  ?>
  <?php
  else :
  ?>
    <form action="" method="post">
      <table class="table table-bordered" border="0">
        <?php
        if (isset($_SESSION['mshd'])) {
          $mshd = $_SESSION['mshd'];
          $hd = new hoadon();
          // Sử dụng phương thức fetch để lấy dòng dữ liệu từ kết quả truy vấn
          $khhd = $hd->getKhachHangHD($mshd)->fetch(PDO::FETCH_ASSOC);
          // Kiểm tra xem có kết quả trả về không trước khi truy cập vào các trường
          if ($khhd) {
            $tenkh = $khhd['tenkh'];
            $dc = $khhd['diachi'];
            $sodt = $khhd['sodienthoai'];
            $ngay = $khhd['ngaydat'];
          } else {
            // Xử lý khi không có kết quả trả về từ truy vấn
            // Ví dụ: hiển thị thông báo lỗi hoặc xử lý khác tùy thuộc vào yêu cầu của bạn
            echo "Không thể tìm thấy thông tin khách hàng cho số hóa đơn này.";
          }
        }
        ?>
        <tr>
          <td colspan="4">
            <h2 style="color: red;">HÓA ĐƠN</h2>
          </td>
        </tr>
        <tr>
          <td colspan="2">Số Hóa đơn: <?php echo $mshd ?> </td>
          <td colspan="2"> Ngày lập: <?php echo $ngay ?> </td>
        </tr>
        <tr>
          <td colspan="2">Họ và tên:</td>
          <td colspan="2"><?php echo $tenkh ?></td>
        </tr>
        <tr>
          <td colspan="2">Địa chỉ: </td>
          <td colspan="2"><?php echo $dc ?></td>
        </tr>
        <tr>
          <td colspan="2">Số điện thoại: </td>
          <td colspan="2"><?php echo $sodt ?></td>
        </tr>
      </table>
      <!-- Thông tin sản phẩm -->
      <table class="table table-bordered">
        <thead>
          <tr class="table-success">
            <th style="width: 5%;">Số TT</th>
            <th style="width: 20%;">Thông Tin Sản Phẩm</th>
            <th style="width: 25%;">Tùy Chọn Của Bạn</th>
            <th style="width: 15%;">Giá</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $mshd = $_SESSION['mshd'];
          $j = 0;
          $sp = $hd->getHangHoaHD($mshd);
          while ($set = $sp->fetch()) :
            $j++;
          ?>
            <tr>
              <td><?php echo $j ?></td>
              <td><?php echo $set['tenhh'] ?></td>
              <td>Size: <?php echo $set['sized'] ?> - Topping: <?php echo $set['topping'] ?> </td>
              <td>Đơn Giá: <?php echo number_format($set['dongia'])  ?> - Số Lượng: <?php echo $set['soluongmua']; ?><br /></td>
            </tr>
          <?php
          endwhile;
          ?>
          <tr>
            <td colspan="3">
              <b>Tổng Tiền</b>
            </td>
            <td style="float: right;">
              <b>
                <?php
                $gh = new giohang();
                echo $gh->sub_Total();
                ?>
                <sup><u>đ</u></sup></b>
            </td>
          </tr>
        </tbody>
      </table>
    </form>
  <?php
  endif;
  ?>
</div>