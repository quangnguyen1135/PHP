<div class="app-header header-shadow">
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
    
    <div class="app-header__content">
        <div class="app-header-left">
            <div class="search-wrapper">
                <div class="input-holder">
                    <input type="text" class="search-input" placeholder="Type to search">
                    <button class="search-icon"><span></span></button>
                </div>
                <button class="close"></button>
            </div>
            <ul class="header-megamenu nav">

                <li class="btn-group nav-item">
                    <a class="nav-link" data-toggle="dropdown" aria-expanded="false">
                        <span class="badge badge-pill badge-danger ml-0 mr-2">4</span> Settings
                        <i class="fa fa-angle-down ml-2 opacity-5"></i>
                    </a>
                    <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu">
                        <div class="dropdown-menu-header">
                            <div class="dropdown-menu-header-inner bg-secondary">
                                <div class="menu-header-image opacity-5" style="background-image: url('assets/images/dropdown-header/abstract2.jpg');">
                                </div>
                                <div class="menu-header-content">
                                    <h5 class="menu-header-title">Overview</h5>
                                    <h6 class="menu-header-subtitle">Dropdown menus for everyone</h6>
                                </div>
                            </div>
                        </div>
                        <div class="scroll-area-xs">
                            <div class="scrollbar-container">
                                <h6 tabindex="-1" class="dropdown-header">Key Figures</h6>
                                <button type="button" tabindex="0" class="dropdown-item">Service
                                    Calendar</button>
                                <button type="button" tabindex="0" class="dropdown-item">Knowledge Base</button>
                                <button type="button" tabindex="0" class="dropdown-item">Accounts</button>
                                <div tabindex="-1" class="dropdown-divider"></div>
                                <button type="button" tabindex="0" class="dropdown-item">Products</button>
                                <button type="button" tabindex="0" class="dropdown-item">Rollup Queries</button>
                            </div>
                        </div>
                        <ul class="nav flex-column">
                            <li class="nav-item-divider nav-item"></li>
                            <li class="nav-item-btn nav-item">
                                <button class="btn-wide btn-shadow btn btn-danger btn-sm">Cancel</button>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <div class="app-header-right">
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt>
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-info">
                                            <?php if (isset($_SESSION['idnv'])) : ?>
                                                <div class="menu-item">
                                                    <a href="">
                                                        <?php echo $_SESSION['hoten']; ?>
                                                    </a>
                                                    <!-- Dropdown menu for logged-in user -->
                                                    <ul class="dropdown-menu">
                                                        <li class="menu-item">
                                                            <a href="index.php?action=dangnhap&act=logout">Log out</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            <?php else : ?>
                                                <div class="menu-item">
                                                    <a href="index.php">Login</a>
                                                </div>
                                            <?php endif; ?>
                                            <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city3.jpg');">
                                            </div>
                                            <div class="menu-header-content text-left">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt>
                                                        </div>
                                                        <?php if (isset($_SESSION['idnv'])) : ?>

                                                            <div class="widget-content-left">
                                                                <div class="widget-heading"> <?php echo $_SESSION['hoten']; ?></div>
                                                                <div class="widget-subheading opacity-8">A short profile description</div>
                                                            </div>
                                                            <div class="widget-content-right mr-2">
                                                                <button class="btn-pill btn-shadow btn-shine btn btn-focus">Logout</button>
                                                            </div>
                                                        <?php endif; ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="widget-content-left  ml-3 header-user-info">
            <?php if (isset($_SESSION['idnv'])) : ?>

                <div class="widget-heading"> <?php echo $_SESSION['hoten']; ?> </div>
            <?php endif; ?>

            <div class="widget-subheading"> VP People Manager </div>
        </div>
        <div class="widget-content-right header-user-info ml-3">
            <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                <i class="fa text-white fa-calendar pr-1 pl-1"></i>
            </button>
        </div>
    </div>
</div>
