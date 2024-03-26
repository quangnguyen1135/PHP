<header id="header" class="clearfix fixed-top">
    <div class="container">
        <div id="header-wrap">
            <div id="logo">
                <a href="index.php?action=home" title="Gong cha Vietnam">
                    <img src="./Content/wp-content/uploads/2018/03/Untitled-4.png" alt="" />
                </a>
            </div>
            <div id="main-menu-container" class="clearfix">
                <ul id="main-menu" class="">
                    <li id="menu-item-786" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-14 current_page_item menu-item-786">
                        <a href="index.php?action=home" aria-current="page">Home page</a>
                    </li>
                    <li id="menu-item-6" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6"><a href="index.php?action=page&act=about_us">About us</a></li>
                    <li id="menu-item-556" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-556">
                        <a href="index.php?action=page&act=recruitment">Recruitment</a>
                    </li>
                    <li id="menu-item-7" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-7">
                        <a href="danh-muc/menu-hien-tai/index.html">Menu</a>
                        <ul class="sub-menu">
                            <li id="menu-item-127" class="menu-item menu-item-type-taxonomy menu-item-object-category_product menu-item-127">
                                <a href="danh-muc/mon-moi/index.html">New drink</a>
                            </li>
                            <li id="menu-item-128" class="menu-item menu-item-type-taxonomy menu-item-object-category_product menu-item-128">
                                <a href="danh-muc/thuc-uong-theo-mua/index.html">Seasonal drink</a>
                            </li>
                            <li id="menu-item-129" class="menu-item menu-item-type-taxonomy menu-item-object-category_product menu-item-129">
                                <a href="index.php?action=menu_current">Current Menu</a>
                            </li>
                        </ul>
                    </li>
                    <li id="menu-item-502" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-502"><a href="index.php?action=page&act=contact">Contact</a></li>
                    <?php if (isset($_SESSION['makh'])) : ?>
                        <li id="menu-item-502" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-502">
                            <a href="">
                                <?php echo $_SESSION['tenkh']; ?>
                            </a>
                            <!-- Dropdown menu for logged-in user -->
                            <ul class="dropdown-menu">
                                <li id="menu-item-503" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-503">
                                    <a href="index.php?action=dangnhap&act=logout">Log out</a>
                                </li>
                            </ul>
                        </li>
                    <?php else : ?>
                        <li id="menu-item-502" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-502">
                            <a href="index.php?action=dangnhap">Login</a>
                        </li>
                        <li id="menu-item-502" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-502">
                            <a href="index.php?action=dangky">Register</a>
                        </li>
                    <?php endif; ?>

                    <li id="menu-item-502" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-502"><a href="index.php?action=giohang">Cart</a></li>
                    <li id="menu-item-12" class="social menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="https://www.facebook.com/Vietnam.GongCha"><i class="fa fa-facebook-official"></i></a></li>
                    <li id="menu-item-46" class="social menu-item menu-item-type-custom menu-item-object-custom menu-item-46"><a href="https://www.instagram.com/gongchavietnam/"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <a href="#" class="slide-menu-control" data-target="slidebars-menu" data-action="toggle" id="open-sidemenu"><i class="fa fa-bars"></i></a>
            <div class="search-btn-wrap">
                <a href="#" class="btn-search"><i class="fa fa-search"></i></a>
                <div id="search-wrap">
                    <div id='ajaxsearchlite1' class="wpdreams_asl_container asl_w asl_m asl_m_1">
                        <div class="probox">
                            <div class='promagnifier'>
                                <div class='innericon'>
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                        <path id="magnifier-2-icon" d="M460.355,421.59L353.844,315.078c20.041-27.553,31.885-61.437,31.885-98.037
                    C385.729,124.934,310.793,50,218.686,50C126.58,50,51.645,124.934,51.645,217.041c0,92.106,74.936,167.041,167.041,167.041
                    c34.912,0,67.352-10.773,94.184-29.158L419.945,462L460.355,421.59z M100.631,217.041c0-65.096,52.959-118.056,118.055-118.056
                    c65.098,0,118.057,52.959,118.057,118.056c0,65.096-52.959,118.056-118.057,118.056C153.59,335.097,100.631,282.137,100.631,217.041
                    z" />
                                    </svg>
                                </div>
                            </div>
                            <div class='prosettings' style='display:none;' data-opened=0>
                                <div class='innericon'>
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                        <polygon id="arrow-25-icon" transform="rotate(90 256 256)" points="142.332,104.886 197.48,50 402.5,256 197.48,462 142.332,407.113 292.727,256 " />
                                    </svg>
                                </div>
                            </div>
                            <div class='proinput'>
                                <form action="index.php" method="post" autocomplete="off">
                                    <input type="search" class="orig" name="txtsearch" placeholder="Search here.." value="">
                                    <input type="submit" value="Start search" style="width:0; height: 0; visibility: hidden;">
                                </form>

                            </div>
                            <div class='proloading'>
                                <div class="asl_loader">
                                    <div class="asl_loader-inner asl_simple-circle"></div>
                                </div>
                            </div>
                            <div class='proclose'>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                    <polygon id="x-mark-icon" points="438.393,374.595 319.757,255.977 438.378,137.348 374.595,73.607 255.995,192.225 137.375,73.622 73.607,137.352 192.246,255.983 73.622,374.625 137.352,438.393 256.002,319.734 374.652,438.378 " />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div id="asl_hidden_data">
                        <svg style="position:absolute" height="0" width="0">
                            <filter id="aslblur">
                                <feGaussianBlur in="SourceGraphic" stdDeviation="4" />
                            </filter>
                        </svg>
                        <svg style="position:absolute" height="0" width="0">
                            <filter id="no_aslblur"></filter>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<style>
    .fixed {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }
</style>
<!-- Add this script tag to your HTML -->
<script>
    window.onscroll = function() {
        var header = document.getElementById("header");
        var sticky = header.offsetTop;

        if (window.pageYOffset > sticky) {
            header.classList.add("fixed");
        } else {
            header.classList.remove("fixed");
        }
    };
</script>