<?php
if (isset($_GET['id'])) {
  $mahh = $_GET['id'];
  $hh = new hanghoa();
  $kq = $hh->getHangHoaID($mahh);
  $tenhh = $kq['tenhh'];
  $maloai = $kq['idloai'];
  // Lấy tên file hình ảnh hiện tại
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
                <a href="index.php?action=cthanghoa&act=cthanghoa_all">
                  <i class="metismenu-icon"> </i>Chi tiết sản phẩm
                </a>
              </li>
              <li>
                <a href="index.php?action=hanghoa&act=ct_hanghoa">
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
  <div class="app-main__outer">
    <div class="app-main__inner">
      <div class="tabs-animation">
        <div class="card mb-3">
          <div class="card-header-tab card-header">
            <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>DANH SÁCH HÀNG HÓA
            </div>
            <div class="btn-actions-pane-right actions-icon-btn">
              <div class="btn-group dropdown">
                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                  <i class="pe-7s-menu btn-icon-wrapper"></i>
                </button>
                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                  <h6 tabindex="-1" class="dropdown-header">Header</h6>
                  <button type="button" tabindex="0" class="dropdown-item">
                    <i class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
                  </button>
                  <button type="button" tabindex="0" class="dropdown-item">
                    <i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                  </button>
                  <button type="button" tabindex="0" class="dropdown-item">
                    <i class="dropdown-icon lnr-book"> </i><span>Actions</span>
                  </button>
                  <div tabindex="-1" class="dropdown-divider"></div>
                  <div class="p-3 text-right">
                    <button class="mr-2 btn-shadow btn-sm btn btn-link">View
                      Details</button>
                    <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="main-card mb-3 card">
            <div class="card-body">
              <div class="row col-md-8">

                <?php
                if ($ac == 1) {
                  echo '<form action="index.php?action=hanghoa&act=insert_action" method="Post" enctype="multipart/form-data">';
                } else {
                  echo '<form action="index.php?action=hanghoa&act=update_action" method="Post" enctype="multipart/form-data">';
                }
                ?>
                <div class="container">
                  <div class="col-md-6">
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
                        <td>Số lượt xem</td>
                        <td><input type="number" class="form-control" value="<?php if (isset($slx)) echo $slx; ?>" name="slx" required>
                        </td>
                      </tr>
                      <tr>
                        <td>Ngày lập</td>
                        <td><input type="date" class="form-control" value="<?php if (isset($ngaylap)) echo $ngaylap; ?>" name="ngaylap" required>
                        </td>
                      </tr>
                      <tr>
                        <td>Mô tả</td>
                        <td><input type="text" class="form-control" value="<?php if (isset($mota)) echo $mota; ?>" name="mota" required>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <input class="btn btn-primary" type="submit" value="Xác nhận">
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>