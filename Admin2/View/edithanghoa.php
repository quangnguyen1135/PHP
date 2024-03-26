<?php
if (isset($_GET['id'])) {
  $mahh = $_GET['id'];
  $hh = new hanghoa();
  $kq = $hh->getHangHoaID($mahh);
  $tenhh = $kq['tenhh'];
  $maloai = $kq['maloai'];
  $dacbiet = $kq['dacbiet'];
  $slx = $kq['soluotxem'];
  $ngaylap = $kq['ngaylap'];
  $mota = $kq['mota'];
}
?>
<?php
$ac = 1;
if (isset($_GET['action'])) {
  if (isset($_GET['act']) && $_GET['act'] == 'add_hanghoa') {
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
          <li>
            <a href="#">
              <i class="metismenu-icon pe-7s-rocket" style="font-size: 2em"></i>Dashboards
              <i class="metismenu-state-icon has-arrow caret-left"></i>
            </a>
            <ul>
              <li>
                <a href="index.html">
                  <i class="metismenu-icon"></i>Analytics
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="metismenu-icon"></i> Minimal
                  <i class="metismenu-state-icon has-arrow caret-left"></i>
                </a>
                <ul>
                  <li>
                    <a href="dashboards-minimal-1.html">
                      <i class="metismenu-icon"></i>Variation 1
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>

          <li class="mm-active" style="height: 3em">
            <a href="#">
              <i class="metismenu-icon pe-7s-display2" style="font-size: 2em;"></i> Tables
              <i class="metismenu-state-icon has-arrow  caret-left"></i>
            </a>
            <ul>
              <li>
                <a href="index.php?action=hanghoa">
                  <i class="metismenu-icon"> </i>Data Tables
                </a>
              </li>
              <li>
                <a href="index.php?action=hanghoa&act=add_hanghoa" class="mm-active">
                  <i class="metismenu-icon"> </i>Thêm sản phẩm
                </a>
              </li>
              <li>
                <a href="index.php?action=loai" class="mm-active">
                  <i class="metismenu-icon"> </i>Thêm loại
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
      echo '<form action="index.php?action=hanghoa&act=insert_action" method="Post" enctype="multipart/form-data">';
    } else {
      echo '<form action="index.php?action=hanghoa&act=update_action" method="Post" enctype="multipart/form-data">';
    }
    ?>

    <table class="table" style="border: 0px;">

      <tr>
        <td>Mã hàng</td>
        <td> <input type="text" class="form-control" name="mahh" value="<?php if (isset($mahh)) echo $mahh; ?>" readonly /></td>
      </tr>
      <tr>
        <td>Tên hàng</td>
        <td><input type="text" class="form-control" name="tenhh" value="<?php if (isset($tenhh)) echo $tenhh; ?>" maxlength="100px"></td>
      </tr>

      <tr>
        <td>Mã loại</td>
        <td>
          <select name="maloai" class="form-control" style="width:150px;">
            <?php
            $selectLoai = -1;
            if (isset($maloai) && $maloai != -1) {
              $selectLoai = $maloai;
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
        <td>Đặc biệt</td>
        <td><input type="text" class="form-control" value="<?php if (isset($dacbiet)) echo $dacbiet; ?>" name="dacbiet">
        </td>
      </tr>
      <tr>
        <td>Số lượt xem</td>
        <td><input type="text" class="form-control" value="<?php if (isset($slx)) echo $slx; ?>" name="slx">
        </td>
      </tr>
      <tr>
        <td>Ngày lập</td>
        <td><input type="date" class="form-control" value="<?php if (isset($ngaylap)) echo $ngaylap; ?>" name="ngaylap">
        </td>
      </tr>
      <tr>
        <td>Mô tả</td>
        <td><input type="text" class="form-control" value="<?php if (isset($mota)) echo $mota; ?>" name="mota">
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" value="Xác nhận">
        </td>
      </tr>

    </table>
    </form>

  </div>
</div>