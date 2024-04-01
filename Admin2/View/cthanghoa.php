<?php
if (isset($_GET['id'])) {
  $mahh = $_GET['id'];
  $hh = new hanghoa();
  $kq = $hh->getHangHoaCT_ID($mahh);
  $idhanghoa = $kq['idhanghoa'];
  $tenhh = $kq['tenhh'];
  $maloai = $kq['idloai'];
  // Lấy tên file hình ảnh hiện tại
  $dongia = $kq['dongia'];
  $hinh = $kq['hinh'];
  $giamgia = $kq['giamgia'];
}
?>


<?php
$ac = 1;
if (isset($_GET['action'])) {
  if (isset($_GET['act']) && $_GET['act'] == 'ct_hanghoa') {
    $ac = 1;
  } else {
    $ac = 2;
  }
}
?>

<div class="app-main">
  <div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
      <div class="logo-src"></div>
      <div class="header__pane ml-auto">
        <div>
          <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>
      </div>
    </div>
    <div class="app-header__mobile-menu">
      <div>
        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </div>
    </div>
    <div class="app-header__menu">
      <span>
        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
          <span class="btn-icon-wrapper">
            <i class="fa fa-ellipsis-v fa-w-6"></i>
          </span>
        </button>
      </span>
    </div>
    <div class="scrollbar-sidebar">
      <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
          <li class="app-sidebar__heading">Menu</li>
          <li class="mm-active" style="height: 3em">
            <a href="#">
              <i class="metismenu-icon pe-7s-display2" style="font-size: 2em;"></i> Tables
              <i class="metismenu-state-icon has-arrow  caret-left"></i>
            </a>
            <ul>
            <li>
                <a href="index.php?action=hanghoa&act=dashboard">
                  <i class="metismenu-icon"> </i>Dashboard
                </a>
              </li>
              <li>
                <a href="index.php?action=hanghoa">
                  <i class="metismenu-icon"> </i>Data Tables
                </a>
              </li>
              <li>
                <a href="index.php?action=hanghoa&act=add_hanghoa">
                  <i class="metismenu-icon"> </i>Thêm sản phẩm
                </a>
              </li>
              <li>
                <a href="index.php?action=cthanghoa&act=cthanghoa_all">
                  <i class="metismenu-icon"> </i>Chi tiết sản phẩm
                </a>
              </li>
              <li>
                <a href="index.php?action=hanghoa&act=ct_hanghoa" class="mm-active">
                  <i class="metismenu-icon"> </i>Thêm chi tiết sản phẩm
                </a>
              </li>
              <li>
                <a href="index.php?action=loai">
                  <i class="metismenu-icon"> </i>Thêm loại
                </a>
              </li>
              <li>
                <a href="index.php?action=cthanghoa&act=addtopping">
                  <i class="metismenu-icon"> </i>Thêm Topping cho sản phẩm
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row col-md-4 col-md-offset-4">
    <?php
    if ($ac == 1) {
      echo ' <form action="index.php?action=cthanghoa&act=cthanghoa_action" method="post" enctype="multipart/form-data">';
    } else {
      echo '<form action="index.php?action=cthanghoa&act=update_cthanghoa_action" method="post" enctype="multipart/form-data">';
    }
    ?>

    <table class="table" style="border: 0px;">

      <tr>
        <td>Mã hàng hóa</td>
        <?php if ($ac == 2) : ?>
          <td><?php echo $set['idhanghoa']; ?><input type="number" class="form-control" name="idhanghoa" value="<?php if (isset($idhanghoa)) echo $idhanghoa; ?>" readonly></td>
      <tr>
        <td>Tên hàng hóa</td>
        <td><?php echo $set['tenhh']; ?><input type="text" class="form-control" name="tenhh" value="<?php if (isset($tenhh)) echo $tenhh; ?>" readonly></td>
      </tr>
    <?php else : ?>
      <td>
        <select name="mahh" class="form-control" style="width:150px;">
          <?php
          $hh = new hanghoa();
          $hang = $hh->getHangHoa();
          while ($set = $hang->fetch()) :
          ?>
            <option value="<?php echo $set['mahh']; ?>"><?php echo $set['tenhh']; ?></option>
          <?php
          endwhile;
          ?>
        </select>
      </td>
    <?php endif; ?>
    </tr>
    <tr>
      <td>Loại</td>
      <td><select name="idloai" class="form-control" style="width:150px;">
          <?php
          $selectLoai = -1;
          if (isset($idloai) && $idloai != -1) {
            $selectLoai = $idloai;
          }
          $loai = new loai();
          $result = $loai->getLoai();
          while ($set = $result->fetch()) :
          ?>
            <option value="<?php echo $set['idloai'] ?>" <?php if ($selectLoai == $set['idloai']) echo 'selected'; ?>><?php echo $set['tenloai'] ?></option>
          <?php
          endwhile;
          ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Đơn giá</td>
      <td><input type="number" class="form-control" name="dongia" required></td>
    </tr>
    <tr>
      <td>Hình</td>
      <td>
        <label><img width="50px" height="50px" src=""></label>
        Chọn file để upload:
        <input type="file" name="image" id="fileupload">
      </td>
    </tr>
    <tr>
      <td>Giảm giá</td>
      <td><input type="number" class="form-control" name="giamgia" required></td>
    </tr>
    <tr>
      <td colspan="2">
        <input type="submit" name="submit" value="submit"  class="btn btn-primary">
      </td>
    </tr>

    </table>
    </form>
  </div>
</div>