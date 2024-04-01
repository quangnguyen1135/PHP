<?php
//b1: xac dinh co bao nhieu san pham, select count(*)
$hh = new cthanghoa();
$count = $hh->getHangHoaCT()->rowCount(); //14
//b2: limit
$limit = 20;
//b3: tinh ra co bao nhieu trang
$trang = new page();
$page = $trang->findPage($count, $limit); //2 trang
//b4: tinh ra start
$start = $trang->findStart($limit); // 8
//b5: tao bien chua trang hien tai
$current_page = isset($_GET['page']) ? $_GET['page'] : 1
?>
<div class="ui-theme-settings">
    <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
        <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
    </button>
    <div class="theme-settings__inner">
        <div class="scrollbar-container">
            <div class="theme-settings__options-wrapper">
                <h3 class="themeoptions-heading">Layout Options</h3>
                <div class="p-3">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                            <div class="switch-animate switch-on">
                                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Fixed Header</div>
                                        <div class="widget-subheading">Makes the header top fixed, always
                                            visible!</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                            <div class="switch-animate switch-on">
                                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Fixed Sidebar</div>
                                        <div class="widget-subheading">Makes the sidebar left fixed, always
                                            visible!</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                            <div class="switch-animate switch-off">
                                                <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Fixed Footer</div>
                                        <div class="widget-subheading">Makes the app footer bottom fixed, always
                                            visible!</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <h3 class="themeoptions-heading">
                    <div> Header Options </div>
                    <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class>
                        Restore Default
                    </button>
                </h3>
                <div class="p-3">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h5 class="pb-2">Choose Color Scheme</h5>
                            <div class="theme-settings-swatches">
                                <div class="swatch-holder bg-primary switch-header-cs-class" data-class="bg-primary header-text-light"></div>
                                <div class="swatch-holder bg-secondary switch-header-cs-class" data-class="bg-secondary header-text-light"></div>
                                <div class="swatch-holder bg-success switch-header-cs-class" data-class="bg-success header-text-light"></div>
                                <div class="swatch-holder bg-info switch-header-cs-class" data-class="bg-info header-text-light"></div>
                                <div class="swatch-holder bg-warning switch-header-cs-class" data-class="bg-warning header-text-dark"></div>
                                <div class="swatch-holder bg-danger switch-header-cs-class" data-class="bg-danger header-text-light"></div>
                                <div class="swatch-holder bg-light switch-header-cs-class" data-class="bg-light header-text-dark"></div>
                                <div class="swatch-holder bg-dark switch-header-cs-class" data-class="bg-dark header-text-light"></div>
                                <div class="swatch-holder bg-focus switch-header-cs-class" data-class="bg-focus header-text-light"></div>
                                <div class="swatch-holder bg-alternate switch-header-cs-class" data-class="bg-alternate header-text-light"></div>
                                <div class="divider"></div>
                                <div class="swatch-holder bg-vicious-stance switch-header-cs-class" data-class="bg-vicious-stance header-text-light"></div>
                                <div class="swatch-holder bg-midnight-bloom switch-header-cs-class" data-class="bg-midnight-bloom header-text-light"></div>
                                <div class="swatch-holder bg-night-sky switch-header-cs-class" data-class="bg-night-sky header-text-light"></div>
                                <div class="swatch-holder bg-slick-carbon switch-header-cs-class" data-class="bg-slick-carbon header-text-light"></div>
                                <div class="swatch-holder bg-asteroid switch-header-cs-class" data-class="bg-asteroid header-text-light"></div>
                                <div class="swatch-holder bg-royal switch-header-cs-class" data-class="bg-royal header-text-light"></div>
                                <div class="swatch-holder bg-warm-flame switch-header-cs-class" data-class="bg-warm-flame header-text-dark"></div>
                                <div class="swatch-holder bg-night-fade switch-header-cs-class" data-class="bg-night-fade header-text-dark"></div>
                                <div class="swatch-holder bg-sunny-morning switch-header-cs-class" data-class="bg-sunny-morning header-text-dark"></div>
                                <div class="swatch-holder bg-tempting-azure switch-header-cs-class" data-class="bg-tempting-azure header-text-dark"></div>
                                <div class="swatch-holder bg-amy-crisp switch-header-cs-class" data-class="bg-amy-crisp header-text-dark"></div>
                                <div class="swatch-holder bg-heavy-rain switch-header-cs-class" data-class="bg-heavy-rain header-text-dark"></div>
                                <div class="swatch-holder bg-mean-fruit switch-header-cs-class" data-class="bg-mean-fruit header-text-dark"></div>
                                <div class="swatch-holder bg-malibu-beach switch-header-cs-class" data-class="bg-malibu-beach header-text-light"></div>
                                <div class="swatch-holder bg-deep-blue switch-header-cs-class" data-class="bg-deep-blue header-text-dark"></div>
                                <div class="swatch-holder bg-ripe-malin switch-header-cs-class" data-class="bg-ripe-malin header-text-light"></div>
                                <div class="swatch-holder bg-arielle-smile switch-header-cs-class" data-class="bg-arielle-smile header-text-light"></div>
                                <div class="swatch-holder bg-plum-plate switch-header-cs-class" data-class="bg-plum-plate header-text-light"></div>
                                <div class="swatch-holder bg-happy-fisher switch-header-cs-class" data-class="bg-happy-fisher header-text-dark"></div>
                                <div class="swatch-holder bg-happy-itmeo switch-header-cs-class" data-class="bg-happy-itmeo header-text-light"></div>
                                <div class="swatch-holder bg-mixed-hopes switch-header-cs-class" data-class="bg-mixed-hopes header-text-light"></div>
                                <div class="swatch-holder bg-strong-bliss switch-header-cs-class" data-class="bg-strong-bliss header-text-light"></div>
                                <div class="swatch-holder bg-grow-early switch-header-cs-class" data-class="bg-grow-early header-text-light"></div>
                                <div class="swatch-holder bg-love-kiss switch-header-cs-class" data-class="bg-love-kiss header-text-light"></div>
                                <div class="swatch-holder bg-premium-dark switch-header-cs-class" data-class="bg-premium-dark header-text-light"></div>
                                <div class="swatch-holder bg-happy-green switch-header-cs-class" data-class="bg-happy-green header-text-light"></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <h3 class="themeoptions-heading">
                    <div>Sidebar Options</div>
                    <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class>
                        Restore Default
                    </button>
                </h3>
                <div class="p-3">
                    <ul class="list-group">

                        <li class="list-group-item">
                            <h5 class="pb-2">Choose Color Scheme</h5>
                            <div class="theme-settings-swatches">
                                <div class="swatch-holder bg-primary switch-sidebar-cs-class" data-class="bg-primary sidebar-text-light"></div>
                                <div class="swatch-holder bg-secondary switch-sidebar-cs-class" data-class="bg-secondary sidebar-text-light"></div>
                                <div class="swatch-holder bg-success switch-sidebar-cs-class" data-class="bg-success sidebar-text-dark"></div>
                                <div class="swatch-holder bg-info switch-sidebar-cs-class" data-class="bg-info sidebar-text-dark"></div>
                                <div class="swatch-holder bg-warning switch-sidebar-cs-class" data-class="bg-warning sidebar-text-dark"></div>
                                <div class="swatch-holder bg-danger switch-sidebar-cs-class" data-class="bg-danger sidebar-text-light"></div>
                                <div class="swatch-holder bg-light switch-sidebar-cs-class" data-class="bg-light sidebar-text-dark"></div>
                                <div class="swatch-holder bg-dark switch-sidebar-cs-class" data-class="bg-dark sidebar-text-light"></div>
                                <div class="swatch-holder bg-focus switch-sidebar-cs-class" data-class="bg-focus sidebar-text-light"></div>
                                <div class="swatch-holder bg-alternate switch-sidebar-cs-class" data-class="bg-alternate sidebar-text-light"></div>
                                <div class="divider"></div>
                                <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class" data-class="bg-vicious-stance sidebar-text-light"></div>
                                <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class" data-class="bg-midnight-bloom sidebar-text-light"></div>
                                <div class="swatch-holder bg-night-sky switch-sidebar-cs-class" data-class="bg-night-sky sidebar-text-light"></div>
                                <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class" data-class="bg-slick-carbon sidebar-text-light"></div>
                                <div class="swatch-holder bg-asteroid switch-sidebar-cs-class" data-class="bg-asteroid sidebar-text-light"></div>
                                <div class="swatch-holder bg-royal switch-sidebar-cs-class" data-class="bg-royal sidebar-text-light"></div>
                                <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class" data-class="bg-warm-flame sidebar-text-dark"></div>
                                <div class="swatch-holder bg-night-fade switch-sidebar-cs-class" data-class="bg-night-fade sidebar-text-dark"></div>
                                <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class" data-class="bg-sunny-morning sidebar-text-dark"></div>
                                <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class" data-class="bg-tempting-azure sidebar-text-dark"></div>
                                <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class" data-class="bg-amy-crisp sidebar-text-dark"></div>
                                <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class" data-class="bg-heavy-rain sidebar-text-dark"></div>
                                <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class" data-class="bg-mean-fruit sidebar-text-dark"></div>
                                <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class" data-class="bg-malibu-beach sidebar-text-light"></div>
                                <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class" data-class="bg-deep-blue sidebar-text-dark"></div>
                                <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class" data-class="bg-ripe-malin sidebar-text-light"></div>
                                <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class" data-class="bg-arielle-smile sidebar-text-light"></div>
                                <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class" data-class="bg-plum-plate sidebar-text-light"></div>
                                <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class" data-class="bg-happy-fisher sidebar-text-dark"></div>
                                <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class" data-class="bg-happy-itmeo sidebar-text-light"></div>
                                <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class" data-class="bg-mixed-hopes sidebar-text-light"></div>
                                <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class" data-class="bg-strong-bliss sidebar-text-light"></div>
                                <div class="swatch-holder bg-grow-early switch-sidebar-cs-class" data-class="bg-grow-early sidebar-text-light"></div>
                                <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class" data-class="bg-love-kiss sidebar-text-light"></div>
                                <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class" data-class="bg-premium-dark sidebar-text-light"></div>
                                <div class="swatch-holder bg-happy-green switch-sidebar-cs-class" data-class="bg-happy-green sidebar-text-light"></div>
                            </div>
                        </li>


                    </ul>
                </div>
                <h3 class="themeoptions-heading">
                    <div>Main Content Options</div>
                    <button type="button" class="btn-pill btn-shadow btn-wide ml-auto active btn btn-focus btn-sm">Restore
                        Default</button>
                </h3>
                <div class="p-3">
                    <ul class="list-group">

                        <li class="list-group-item">
                            <h5 class="pb-2">Page Section Tabs</h5>
                            <div class="theme-settings-swatches">
                                <div role="group" class="mt-2 btn-group">
                                    <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="body-tabs-line"> Line</button>
                                    <button type="button" class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class" data-class="body-tabs-shadow"> Shadow </button>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <h5 class="pb-2">Light Color Schemes
                            </h5>
                            <div class="theme-settings-swatches">
                                <div role="group" class="mt-2 btn-group">
                                    <button type="button" class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class" data-class="app-theme-white"> White Theme</button>
                                    <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="app-theme-gray"> Gray Theme</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
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
                                <a href="index.php?action=cthanghoa&act=cthanghoa_all" class="mm-active">
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
                            <table style="width: 100%;" id="example_warpper" class="table table-hover table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID hàng hóa</th>
                                        <th>ID loại</th>
                                        <th>Đơn giá</th>
                                        <th>Hình</th>
                                        <th>Giảm giá</th>
                                        <th>Cập Nhật</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $hh = new cthanghoa();
                                    $result = $hh->getCTHangHoaPage($start, $limit);
                                    while ($set = $result->fetch()) :
                                    ?>
                                        <tr>
                                            <td><?php echo $set['idhanghoa']; ?></td>
                                            <td><?php echo $set['idloai']; ?></td>
                                            <td><?php echo $set['dongia']; ?></td>
                                            <td><?php echo $set['hinh']; ?></td>
                                            <td><?php echo $set['giamgia']; ?></td>
                                            <td><a href="index.php?action=cthanghoa&act=update_cthanghoa&id=<?php echo $set['idhanghoa']; ?>">Cập nhật</a></td>
                                            <td><a href="index.php?action=cthanghoa&act=del_hanghoa_ct&id=<?php echo $set['idhanghoa']; ?>">Xóa</a></td>
                                        </tr>
                                </tbody>
                            <?php
                                    endwhile;
                            ?>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6 div col-md-offset-3 text-center">
                                <ul class="pagination">
                                    <?php
                                    if ($current_page > 1 && $page > 1) {
                                        echo '<li><a href="/Duan/Admin2/index.php?action=cthanghoa&act=cthanghoa_all&page=' . ($current_page - 1) . '">Prev</a></li>';
                                    }

                                    for ($i = 1; $i <= $page; $i++) : ?>
                                        <li><a href="/Duan/Admin2/index.php?action=cthanghoa&act=cthanghoa_all&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                    <?php endfor;

                                    if ($current_page < $page && $page > 1) {
                                        echo '<li><a href="/Duan/Admin2/index.php?action=cthanghoa&act=cthanghoa_all&page=' . ($current_page + 1) . '">Next</a></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>