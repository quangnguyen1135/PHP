<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="./Content/Login_v14/images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="./Content/Login_v14/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./Content/Login_v14/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./Content/Login_v14/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="./Content/Login_v14/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="./Content/Login_v14/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="./Content/Login_v14/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="./Content/Login_v14/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="./Content/Login_v14/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="./Content/Login_v14/css/util.css">
    <link rel="stylesheet" type="text/css" href="./Content/Login_v14/css/main.css">
    <meta name="robots" content="noindex, follow">
    <script nonce="7e255d96-36d3-4248-82d5-a77d8c1f79ae">
        try {
            (function(w, d) {
                ! function(bu, bv, bw, bx) {
                    bu[bw] = bu[bw] || {};
                    bu[bw].executed = [];
                    bu.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    bu.zaraz.q = [];
                    bu.zaraz._f = function(by) {
                        return async function() {
                            var bz = Array.prototype.slice.call(arguments);
                            bu.zaraz.q.push({
                                m: by,
                                a: bz
                            })
                        }
                    };
                    for (const bA of ["track", "set", "debug"]) bu.zaraz[bA] = bu.zaraz._f(bA);
                    bu.zaraz.init = () => {
                        var bB = bv.getElementsByTagName(bx)[0],
                            bC = bv.createElement(bx),
                            bD = bv.getElementsByTagName("title")[0];
                        bD && (bu[bw].t = bv.getElementsByTagName("title")[0].text);
                        bu[bw].x = Math.random();
                        bu[bw].w = bu.screen.width;
                        bu[bw].h = bu.screen.height;
                        bu[bw].j = bu.innerHeight;
                        bu[bw].e = bu.innerWidth;
                        bu[bw].l = bu.location.href;
                        bu[bw].r = bv.referrer;
                        bu[bw].k = bu.screen.colorDepth;
                        bu[bw].n = bv.characterSet;
                        bu[bw].o = (new Date).getTimezoneOffset();
                        if (bu.dataLayer)
                            for (const bH of Object.entries(Object.entries(dataLayer).reduce(((bI, bJ) => ({
                                    ...bI[1],
                                    ...bJ[1]
                                })), {}))) zaraz.set(bH[0], bH[1], {
                                scope: "page"
                            });
                        bu[bw].q = [];
                        for (; bu.zaraz.q.length;) {
                            const bK = bu.zaraz.q.shift();
                            bu[bw].q.push(bK)
                        }
                        bC.defer = !0;
                        for (const bL of [localStorage, sessionStorage]) Object.keys(bL || {}).filter((bN => bN.startsWith("_zaraz_"))).forEach((bM => {
                            try {
                                bu[bw]["z_" + bM.slice(7)] = JSON.parse(bL.getItem(bM))
                            } catch {
                                bu[bw]["z_" + bM.slice(7)] = bL.getItem(bM)
                            }
                        }));
                        bC.referrerPolicy = "origin";
                        bC.src = "../../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(bu[bw])));
                        bB.parentNode.insertBefore(bC, bB)
                    };
                    ["complete", "interactive"].includes(bv.readyState) ? zaraz.init() : bu.addEventListener("DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            })(window, document)
        } catch (e) {
            throw fetch("/cdn-cgi/zaraz/t"), e;
        };
    </script>
</head>
<div class="limiter" style="margin-top: 69px;">
    <div class="container-login100">
        <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
            <form action="index.php?action=dangnhap&act=dangnhap_action" class="login-form" method="post">
                <span class="login100-form-title p-b-32">
                    Account Login
                </span>
                <span class="txt1 p-b-11">
                    Username
                </span>
                <div class="wrap-input100 validate-input m-b-36">
                    <input class="input100" type="text" class="form-control" name="username" placeholder="">
                    <span class="focus-input100"></span>
                </div>
                <span class="txt1 p-b-11">
                    Password
                </span>
                <div class="wrap-input100 validate-input m-b-12" data-validate="Password is required">
                    <span class="btn-show-pass">
                        <i class="fa fa-eye"></i>
                    </span>
                    <input class="input100" type="password" class="form-control" name="password" placeholder="">
                    <span class="focus-input100"></span>
                </div>
                <div class="flex-sb-m w-full p-b-48">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>
                    <div>
                        <a href="index.php?action=forget" class="txt3">
                            Forgot Password?
                        </a>
                    </div>
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit" name="submit">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="dropDownSelect1"></div>
<script src="./Content/Login_v14/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="./Content/Login_v14/vendor/animsition/js/animsition.min.js"></script>
<script src="./Content/Login_v14/vendor/bootstrap/js/popper.js"></script>
<script src="./Content/Login_v14/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="./Content/Login_v14/vendor/select2/select2.min.js"></script>
<script src="./Content/Login_v14/vendor/daterangepicker/moment.min.js"></script>
<script src="./Content/Login_v14/vendor/daterangepicker/daterangepicker.js"></script>
<script src="./Content/Login_v14/vendor/countdowntime/countdowntime.js"></script>
<script src="./Content/Login_v14/js/main.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"84f1af7728c5045d","b":1,"version":"2024.2.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
