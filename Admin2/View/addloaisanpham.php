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
                <a href="index.php?action=hanghoa&act=ct_hanghoa">
                  <i class="metismenu-icon"> </i>Thêm chi tiết sản phẩm
                </a>
              </li>
              <li>
                <a href="index.php?action=loai" class="mm-active">
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

  <div class="row col-md-offset-4">
    <div class="card-header info">
      QUẢN LÝ LOẠI HÀNG
    </div>
    <div class="card-body">
      <form action="index.php?action=loai&act=loai_action" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <input type="submit" value="Submit">
      </form>
      <div class="form-group">
        <label for="">Mã danh mục</label>
        <input type="text" readonly name="id" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Tên danh mục</label>
        <input type="text" name="namecata" class="form-control">

      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Lưu</button>
        <a href="" class="btn btn-danger">Danh sách</a>
      </div>
      </form>
    </div>
  </div>
</div>