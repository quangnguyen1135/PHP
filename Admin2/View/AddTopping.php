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
                                <a href="index.php?action=loai">
                                    <i class="metismenu-icon"> </i>Thêm loại
                                </a>
                            </li>
                            <li>
                                <a href="index.php?action=cthanghoa&act=addtopping" class="mm-active">
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
                                <form action="index.php?action=cthanghoa&act=addtopping_action" method="post" enctype="multipart/form-data">
                                    <div class="container">
                                        <div class="col-md-6">
                                            <table class="table" style="border: 0px;">
                                                <tr>
                                                    <td>Tên sản phẩm</td>
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
                                                </tr>
                                                <tr>
                                                    <td>Topping</td>
                                                    <td>
                                                        <?php
                                                        $hh = new cthanghoa();
                                                        $topping = $hh->getTopping();
                                                        while ($set = $topping->fetch()) :
                                                        ?>
                                                            <label class="option_item" for="topping_<?php echo $set['id_topping']; ?>">
                                                                <input type="checkbox" class="checkbox" tid="prolang" name="topping[]" id="topping_<?php echo $set['id_topping']; ?>" value="<?php echo $set['id_topping']; ?>">
                                                                <div class="option_inner tch_top">
                                                                    <div name="topping"><?php echo $set['tentp']; ?></div>
                                                                </div>
                                                            </label>
                                                        <?php endwhile; ?>
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
<style>
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
        background: #286090;
        border-color: #286090;
        color: #fff;
    }
</style>