<?php
// include_once "Model/connect.php";
// include_once "Model/hanghoa.php";
// spl_autoload
// cach 1:
// spl_autoload_register('myModelClassLoad');
// function myModelClassLoad($className){
//     $path="Model/";
//     include_once $path.$className.'.php';
// }
session_start();
// cach 2:
include_once "Model/class.phpmailer.php";
set_include_path(get_include_path() . PATH_SEPARATOR . 'Model/');
spl_autoload_extensions('.php');
spl_autoload_register();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="google-site-verification" content="jYju4H1NsKaKi86beL-83zv13dgtOPRMgYvVYkNzaTI" />
    <link rel="alternate" hreflang="vi" href="index.php" />
    <title>Home page - Gong cha Vietnam</title>
    <!-- IE -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.7.0.min.js"></script>

    <link rel="shortcut icon" type="image/x-icon" href="./Content/wp-content/themes/theme/favicon.ico" />
    <!-- other browsers -->
    <link rel="icon" type="image/x-icon" href="./Content/wp-content/themes/theme/favicon.ico" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="./Content/xmlrpc.html">
    <link rel="stylesheet" href="./Content/wp-content/themes/theme/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./Content/cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <title>Home page - Gong cha Vietnam</title>
    <meta name='robots' content='max-image-preview:large' />

    <!-- This site is optimized with the Yoast SEO plugin v7.3 - https://yoast.com/wordpress/plugins/seo/ -->
    <meta name="description" content="(Tiếng Việt) Ưu đãi Khám phá ngay các chương trình ưu đãi cực hấp dẫn của Gong Cha trong tháng này! Chào mừng bạn đến với trà sữa Gong Cha, hãy cùng khám phá những khuyến mãi và ưu đãi của chúng tôi trong tháng này nhé" />
    <link rel="canonical" href="index.html" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="(Tiếng Việt) Ưu đãi Khám phá ngay các chương trình ưu đãi cực hấp dẫn của Gong Cha trong tháng này! Chào mừng bạn đến với trà sữa Gong Cha, hãy cùng khám phá những khuyến mãi và ưu đãi của chúng tôi trong tháng này nhé" />
    <meta name="twitter:title" content="Home page - Gong cha Vietnam" />
    <meta name="twitter:image" content="./Content/wp-content/uploads/2023/11/ginger4.395x280-1.jpg" />
    <script type='application/ld+json'>
        {
            "@context": "https:\/\/schema.org",
            "@type": "WebSite",
            "@id": "#website",
            "url": "http:\/\/gongcha.com.vn\/en\/",
            "name": "Gong cha Vietnam",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "http:\/\/gongcha.com.vn\/en\/?s={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>
    <!-- / Yoast SEO plugin. -->

    <link rel='dns-prefetch' href='http://cdnjs.cloudflare.com/' />
    <link rel='dns-prefetch' href='http://s.w.org/' />
    <style type="text/css">
    </style>

    <link rel='stylesheet' id='sb_instagram_styles-css' href='./Content/wp-content/plugins/instagram-feed/css/sb-instagram-2-2.min747d.css?ver=2.4.5' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-css' href='./Content/wp-includes/css/dist/block-library/style.min37ad.css?ver=6.0.1' type='text/css' media='all' />
    <style id='global-styles-inline-css' type='text/css'>
       
    </style>
    <script data-cfasync="false" src="./Content/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript">
        var sbiajaxurl = "./Content/wp-admin/admin-ajax.html";
    </script>
    <link rel='stylesheet' id='flexslider-css' href='./Content/wp-content/plugins/js_composer/assets/lib/bower/flexslider/flexslider.min7661.css?ver=5.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='vc_tta_style-css' href='./Content/wp-content/plugins/js_composer/assets/css/js_composer_tta.min7661.css?ver=5.4.2' type='text/css' media='all' />
    <script type='text/javascript' id='contact-form-7-js-extra'>
        /* <![CDATA[ */
        var wpcf7 = {
            "apiSettings": {
                "root": "http:\/\/gongcha.com.vn\/en\/wp-json\/contact-form-7\/v1",
                "namespace": "contact-form-7\/v1"
            },
            "recaptcha": {
                "messages": {
                    "empty": "Please verify that you are not a robot."
                }
            },
            "cached": "1"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='./Contenst/wp-content/plugins/contact-form-7/includes/js/scripts20fd.js?ver=4.9.2' id='contact-form-7-js'></script>
    <script type='text/javascript' src='./Content/wp-content/themes/theme/js/bootstrap.min.js' id='bootstrap-js-js'></script>
    <script type='text/javascript' src='./Content/wp-content/themes/theme/plugins/swiper/js/swiper.min.js' id='swipper-js-js'></script>
    <script type='text/javascript' src='./Content/wp-content/themes/theme/plugins/slide-menu/scripts/slide-menu.min.js' id='slide-menu-js-js'></script>
    <script type='text/javascript' src='./Content/wp-content/themes/theme/plugins/icheck-1.x/icheck.js' id='icheck-js-js'></script>
    <script type='text/javascript' src='./Content/wp-content/themes/theme/plugins/owl-carousel/owl.carousel.min.js' id='owl-carousel-js-js'></script>
    <script type='text/javascript' src='./Content/wp-content/themes/theme/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js' id='scrollbar-js-js'></script>
    <script type='text/javascript' src='./Content/wp-content/themes/theme/js/skip-link-focus-fix.js' id='skip-link-focus-fix-js'></script>
    <script type='text/javascript' id='wpdreams-ajaxsearchlite-js-extra'>
        /* <![CDATA[ */
        var ajaxsearchlite = {
            "ajaxurl": "http:\/\/gongcha.com.vn\/wp-admin\/admin-ajax.php",
            "backend_ajaxurl": "http:\/\/gongcha.com.vn\/wp-admin\/admin-ajax.php",
            "js_scope": "jQuery"
        };
        var ASL = {
            "ajaxurl": "http:\/\/gongcha.com.vn\/wp-admin\/admin-ajax.php",
            "backend_ajaxurl": "http:\/\/gongcha.com.vn\/wp-admin\/admin-ajax.php",
            "js_scope": "jQuery",
            "detect_ajax": "0",
            "scrollbar": "1",
            "js_retain_popstate": "0",
            "version": "4724"
        };
        /* ]]> */
    </script>

    <script type='text/javascript' src='./Content/wp-content/plugins/ajax-search-lite/js/min/jquery.ajaxsearchlite.min199e.js?ver=4.7.14' id='wpdreams-ajaxsearchlite-js'></script>
    <script type='text/javascript' src='./Content/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min7661.js?ver=5.4.2' id='wpb_composer_front_js-js'></script>
    <script type='text/javascript' src='./Content/wp-content/plugins/js_composer/assets/lib/bower/flexslider/jquery.flexslider-min7661.js?ver=5.4.2' id='flexslider-js'></script>
    <script type='text/javascript' src='./Content/wp-content/plugins/js_composer/assets/lib/vc_accordion/vc-accordion.min7661.js?ver=5.4.2' id='vc_accordion_script-js'></script>
    <script type='text/javascript' src='./Content/wp-content/plugins/js_composer/assets/lib/vc-tta-autoplay/vc-tta-autoplay.min7661.js?ver=5.4.2' id='vc_tta_autoplay_script-js'></script>
    <script type='text/javascript' src='./Content/wp-content/plugins/js_composer/assets/lib/vc_tabs/vc-tabs.min7661.js?ver=5.4.2' id='vc_tabs_script-js'></script>
    <script type="text/javascript" src="http://gongcha.com.vn/wp-content/plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="http://gongcha.com.vn/wp-content/plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="http://gongcha.com.vn/wp-content/plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type='text/javascript' id='sb_instagram_scripts-js-extra'>
        /* <![CDATA[ */
        var sb_instagram_js_options = {
            "font_method": "svg",
            "resized_url": "http:\/\/gongcha.com.vn\/wp-content\/uploads\/sb-instagram-feed-images\/",
            "placeholder": "http:\/\/gongcha.com.vn\/wp-content\/plugins\/instagram-feed\/img\/placeholder.png"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='./Content/wp-content/plugins/instagram-feed/js/sb-instagram-2-2.min747d.js?ver=2.4.5' id='sb_instagram_scripts-js'></script>
    <!-- END WP FOOTER -->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#copy_viewrow').css({
                'color': '#efefef'
            });
            $('#copy_viewrow').find('a').css({
                'color': '#efefef'
            });
        });
    </script>
    <link rel='stylesheet' id='contact-form-7-css' href='./Content/wp-content/plugins/contact-form-7/includes/css/styles20fd.css?ver=4.9.2' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css' href='./Content/wp-content/plugins/revslider/public/assets/css/settings066b.css?ver=5.0.6' type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        .tp-caption a:hover {
            color: #ffa902
        }
    </style>
    <link rel='stylesheet' id='wp-pagenavi-css' href='./Content/wp-content/plugins/wp-pagenavi/pagenavi-css44fd.css?ver=2.70' type='text/css' media='all' />
    <link rel='stylesheet' id='style-swipper-css' href='./Content/wp-content/themes/theme/plugins/swiper/css/swiper37ad.css?ver=6.0.1' type='text/css' media='all' />
    <link rel='stylesheet' id='i-check-css' href='./Content/wp-content/themes/theme/plugins/icheck-1.x/skins/square/red37ad.css?ver=6.0.1' type='text/css' media='all' />
    <link rel='stylesheet' id='theme-style-css' href='./Content/wp-content/themes/theme/style37ad.css?ver=6.0.1' type='text/css' media='all' />
    <link rel='stylesheet' id='style-css' href='./Content/wp-content/themes/theme/themes37ad.css?ver=6.0.1' type='text/css' media='all' />
    <link rel='stylesheet' id='scrollbar-css-css' href='./Content/wp-content/themes/theme/plugins/scrollbar/jquery.mCustomScrollbar.min37ad.css?ver=6.0.1' type='text/css' media='all' />
    <link rel='stylesheet' id='owl-carousel-css-css' href='./Content/wp-content/themes/theme/plugins/owl-carousel/assets/owl.carousel37ad.css?ver=6.0.1' type='text/css' media='all' />
    <link rel='stylesheet' id='owl-carousel-style-css-css' href='./Content/wp-content/themes/theme/plugins/owl-carousel/assets/owl.theme.default.min37ad.css?ver=6.0.1' type='text/css' media='all' />
    <link rel='stylesheet' id='slide-menu-css' href='./Content/wp-content/themes/theme/plugins/slide-menu/styles/slide-menu37ad.css?ver=6.0.1' type='text/css' media='all' />

    <link rel='stylesheet' id='wpdreams-asl-basic-css' href='./Content/wp-content/plugins/ajax-search-lite/css/style.basic199e.css?ver=4.7.14' type='text/css' media='all' />
    <link rel='stylesheet' id='wpdreams-ajaxsearchlite-css' href='./Content/wp-content/plugins/ajax-search-lite/css/style-simple-red199e.css?ver=4.7.14' type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_front-css' href='./Content/wp-content/uploads/js_composer/js_composer_front_custom7661.css?ver=5.4.2' type='text/css' media='all' />
    <script type='text/javascript' src='./Content/wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0' id='jquery-core-js'></script>
    <script type='text/javascript' src='./Content/wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'></script>
    <script type='text/javascript' src='./Content/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min066b.js?ver=5.0.6' id='tp-tools-js'></script>
    <script type='text/javascript' src='./Content/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min066b.js?ver=5.0.6' id='revmin-js'></script>
    <script type='text/javascript' src='./Content/./Content/cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js' id='modernize-js'></script>
    <script type='text/javascript' id='app-js-js-extra'>
        /* <![CDATA[ */
        var ajax_object = {
            "ajax_url": "http:\/\/gongcha.com.vn\/wp-admin\/admin-ajax.php"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='./Content/wp-content/themes/theme/js/app.js' id='app-js-js'></script>
    <link rel="https://api.w.org/" href="wp-json/index.html" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/14.json" />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed685c.json?url=http%3A%2F%2Fgongcha.com.vn%2Fen%2F" />
    <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embedb315?url=http%3A%2F%2Fgongcha.com.vn%2Fen%2F&amp;format=xml" />
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress.">
    <meta name="generator" content="Powered by Slider Revolution 5.0.6 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <style type="text/css">

img.wp-smiley,
img.emoji {
    display: inline !important;
    border: none !important;
    box-shadow: none !important;
    height: 1em !important;
    width: 1em !important;
    margin: 0 0.07em !important;
    vertical-align: -0.1em !important;
    background: none !important;
    padding: 0 !important;
}
body {
    --wp--preset--color--black: #000000;
    --wp--preset--color--cyan-bluish-gray: #abb8c3;
    --wp--preset--color--white: #ffffff;
    --wp--preset--color--pale-pink: #f78da7;
    --wp--preset--color--vivid-red: #cf2e2e;
    --wp--preset--color--luminous-vivid-orange: #ff6900;
    --wp--preset--color--luminous-vivid-amber: #fcb900;
    --wp--preset--color--light-green-cyan: #7bdcb5;
    --wp--preset--color--vivid-green-cyan: #00d084;
    --wp--preset--color--pale-cyan-blue: #8ed1fc;
    --wp--preset--color--vivid-cyan-blue: #0693e3;
    --wp--preset--color--vivid-purple: #9b51e0;
    --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
    --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
    --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
    --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
    --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
    --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
    --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
    --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
    --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
    --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
    --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
    --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
    --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
    --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
    --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
    --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
    --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
    --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
    --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
    --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
    --wp--preset--font-size--small: 13px;
    --wp--preset--font-size--medium: 20px;
    --wp--preset--font-size--large: 36px;
    --wp--preset--font-size--x-large: 42px;
}

.has-black-color {
    color: var(--wp--preset--color--black) !important;
}

.has-cyan-bluish-gray-color {
    color: var(--wp--preset--color--cyan-bluish-gray) !important;
}

.has-white-color {
    color: var(--wp--preset--color--white) !important;
}

.has-pale-pink-color {
    color: var(--wp--preset--color--pale-pink) !important;
}

.has-vivid-red-color {
    color: var(--wp--preset--color--vivid-red) !important;
}

.has-luminous-vivid-orange-color {
    color: var(--wp--preset--color--luminous-vivid-orange) !important;
}

.has-luminous-vivid-amber-color {
    color: var(--wp--preset--color--luminous-vivid-amber) !important;
}

.has-light-green-cyan-color {
    color: var(--wp--preset--color--light-green-cyan) !important;
}

.has-vivid-green-cyan-color {
    color: var(--wp--preset--color--vivid-green-cyan) !important;
}

.has-pale-cyan-blue-color {
    color: var(--wp--preset--color--pale-cyan-blue) !important;
}

.has-vivid-cyan-blue-color {
    color: var(--wp--preset--color--vivid-cyan-blue) !important;
}

.has-vivid-purple-color {
    color: var(--wp--preset--color--vivid-purple) !important;
}

.has-black-background-color {
    background-color: var(--wp--preset--color--black) !important;
}

.has-cyan-bluish-gray-background-color {
    background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
}

.has-white-background-color {
    background-color: var(--wp--preset--color--white) !important;
}

.has-pale-pink-background-color {
    background-color: var(--wp--preset--color--pale-pink) !important;
}

.has-vivid-red-background-color {
    background-color: var(--wp--preset--color--vivid-red) !important;
}

.has-luminous-vivid-orange-background-color {
    background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
}

.has-luminous-vivid-amber-background-color {
    background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
}

.has-light-green-cyan-background-color {
    background-color: var(--wp--preset--color--light-green-cyan) !important;
}

.has-vivid-green-cyan-background-color {
    background-color: var(--wp--preset--color--vivid-green-cyan) !important;
}

.has-pale-cyan-blue-background-color {
    background-color: var(--wp--preset--color--pale-cyan-blue) !important;
}

.has-vivid-cyan-blue-background-color {
    background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
}

.has-vivid-purple-background-color {
    background-color: var(--wp--preset--color--vivid-purple) !important;
}

.has-black-border-color {
    border-color: var(--wp--preset--color--black) !important;
}

.has-cyan-bluish-gray-border-color {
    border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
}

.has-white-border-color {
    border-color: var(--wp--preset--color--white) !important;
}

.has-pale-pink-border-color {
    border-color: var(--wp--preset--color--pale-pink) !important;
}

.has-vivid-red-border-color {
    border-color: var(--wp--preset--color--vivid-red) !important;
}

.has-luminous-vivid-orange-border-color {
    border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
}

.has-luminous-vivid-amber-border-color {
    border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
}

.has-light-green-cyan-border-color {
    border-color: var(--wp--preset--color--light-green-cyan) !important;
}

.has-vivid-green-cyan-border-color {
    border-color: var(--wp--preset--color--vivid-green-cyan) !important;
}

.has-pale-cyan-blue-border-color {
    border-color: var(--wp--preset--color--pale-cyan-blue) !important;
}

.has-vivid-cyan-blue-border-color {
    border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
}

.has-vivid-purple-border-color {
    border-color: var(--wp--preset--color--vivid-purple) !important;
}

.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
    background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
}

.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
    background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
}

.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
    background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
}

.has-luminous-vivid-orange-to-vivid-red-gradient-background {
    background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
}

.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
    background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
}

.has-cool-to-warm-spectrum-gradient-background {
    background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
}

.has-blush-light-purple-gradient-background {
    background: var(--wp--preset--gradient--blush-light-purple) !important;
}

.has-blush-bordeaux-gradient-background {
    background: var(--wp--preset--gradient--blush-bordeaux) !important;
}

.has-luminous-dusk-gradient-background {
    background: var(--wp--preset--gradient--luminous-dusk) !important;
}

.has-pale-ocean-gradient-background {
    background: var(--wp--preset--gradient--pale-ocean) !important;
}

.has-electric-grass-gradient-background {
    background: var(--wp--preset--gradient--electric-grass) !important;
}

.has-midnight-gradient-background {
    background: var(--wp--preset--gradient--midnight) !important;
}

.has-small-font-size {
    font-size: var(--wp--preset--font-size--small) !important;
}

.has-medium-font-size {
    font-size: var(--wp--preset--font-size--medium) !important;
}

.has-large-font-size {
    font-size: var(--wp--preset--font-size--large) !important;
}

.has-x-large-font-size {
    font-size: var(--wp--preset--font-size--x-large) !important;
}

.qtranxs_flag_vi {
    background-image: url(./Content/wp-content/plugins/qtranslate-xt-master/flags/vn.png);
    background-repeat: no-repeat;
}

.qtranxs_flag_en {
    background-image: url(./Content/wp-content/plugins/qtranslate-xt-master/flags/gb.png);
    background-repeat: no-repeat;
}
@font-face {
    font-family: 'aslsicons2';
    src: url('./Content/wp-content/plugins/ajax-search-lite/css/fonts/icons2.eot');
    src: url('./Content/wp-content/plugins/ajax-search-lite/css/fonts/icons2d41d.eot?#iefix') format('embedded-opentype'),
        url('./Content/wp-content/plugins/ajax-search-lite/css/fonts/icons2.woff2') format('woff2'),
        url('./Content/wp-content/plugins/ajax-search-lite/css/fonts/icons2.woff') format('woff'),
        url('./Content/wp-content/plugins/ajax-search-lite/css/fonts/icons2.ttf') format('truetype'),
        url('./Content/wp-content/plugins/ajax-search-lite/css/fonts/icons2.svg#icons') format('svg');
    font-weight: normal;
    font-style: normal;
}

div[id*='ajaxsearchlitesettings'].searchsettings .asl_option_inner label {
    font-size: 0px !important;
    color: rgba(0, 0, 0, 0);
}

div[id*='ajaxsearchlitesettings'].searchsettings .asl_option_inner label:after {
    font-size: 11px !important;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
}

div[id*='ajaxsearchlite'].wpdreams_asl_container {
    width: 100%;
    margin: 0px 0px 0px 0px;
}

div[id*='ajaxsearchliteres'].wpdreams_asl_results div.resdrg span.highlighted {
    font-weight: bold;
    color: rgba(217, 49, 43, 1);
    background-color: rgba(238, 238, 238, 1);
}

div[id*='ajaxsearchliteres'].wpdreams_asl_results .results div.asl_image {
    width: 70px;
    height: 70px;
}

div.asl_r .results {
    max-height: none;
}

.qtranxs-lang-menu .sub-menu {
    text-align: left !important;
}


#page-heading h2,
#page-heading p {
    color: #000;
}

.vc_custom_1522151768080 {
    background-color: #f9f9f9 !important;
}

.vc_custom_1522924577802 {
    padding-top: 40px !important;
    padding-bottom: 40px !important;
    background-image: url(./Content/wp-content/uploads/2018/04/Banner-Tinh-T%c3%bay-Tr%c3%a022308c.jpg?id=804) !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
}

.vc_custom_1514363366790 {
    padding-top: 40px !important;
    padding-bottom: 40px !important;
    background-color: #f5eee8 !important;
}

.vc_custom_1514363333620 {
    background-color: #f5eee8 !important;
}

.vc_custom_1522151768080 {
    background-color: #f9f9f9 !important;
}

.vc_custom_1522924577802 {
    padding-top: 40px !important;
    padding-bottom: 40px !important;
    background-image: url(http://gongcha.com.vn/wp-content/uploads/2018/04/Banner-Tinh-Túy-Trà22.jpg?id=804) !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
}

.vc_custom_1514363366790 {
    padding-top: 40px !important;
    padding-bottom: 40px !important;
    background-color: #f5eee8 !important;
}

.vc_custom_1514363333620 {
    background-color: #f5eee8 !important;
}

.vc_custom_1522643945006 {
    padding-right: 0px !important;
    padding-left: 0px !important;
}

.vc_custom_1522643930271 {
    padding-right: 0px !important;
    padding-left: 0px !important;
    background-color: #f9f9f9 !important;
}

.vc_custom_1514197570464 {
    padding-right: 0px !important;
    padding-left: 0px !important;
}

.vc_custom_1514197446103 {
    padding-right: 0px !important;
    padding-left: 0px !important;
}

.vc_custom_1522725237028 {
    padding-right: 0px !important;
    padding-left: 0px !important;
    background-color: #f3dfad !important;
}

.vc_custom_1514366217054 {
    padding-right: 0px !important;
    padding-left: 0px !important;
    background-color: #fafafa !important;
}

.vc_custom_1522643945006 {
    padding-right: 0px !important;
    padding-left: 0px !important;
}

.vc_custom_1522643930271 {
    padding-right: 0px !important;
    padding-left: 0px !important;
    background-color: #f9f9f9 !important;
}

.vc_custom_1514197570464 {
    padding-right: 0px !important;
    padding-left: 0px !important;
}

.vc_custom_1514197446103 {
    padding-right: 0px !important;
    padding-left: 0px !important;
}

.vc_custom_1522725237028 {
    padding-right: 0px !important;
    padding-left: 0px !important;
    background-color: #f3dfad !important;
}

.vc_custom_1519879450035 {
    padding-right: 0px !important;
    padding-left: 0px !important;
    background-color: #f5eee8 !important;
}

.vc_custom_1514366217054 {
    padding-right: 0px !important;
    padding-left: 0px !important;
    background-color: #fafafa !important;
}
    </style>
</head>


<body>
    <!-- header -->
    <?php

    include_once "View/headder.php";
    ?>
    <!-- hiên thi noi dung -->
    <div class="container-fluid">
        <div class="row">
            <!--hien thi noi dung ở đây-->
            <?php
            //muons trang chủ hiện thị view nào lên thì khởi tạo biến đó
            $ctrl = "home";

            if (isset($_GET['action'])) {
                $ctrl = $_GET['action']; //san pham
            }
            include_once "Controller/$ctrl.php";
            ?>
        </div>
    </div>
    <?php
    if ($ctrl !== 'dangnhap') {
        include_once "View/footer.php";
    }
    ?>
</body>

</html>