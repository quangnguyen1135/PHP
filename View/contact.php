
<body class="page-template page-template-templates page-template-contact page-template-templatescontact-php page page-id-499 desktop wpb-js-composer js-comp-ver-5.4.2 vc_responsive">
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "../../connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div id="page" class="" canvas="container">
        <script src='../../www.google.com/recaptcha/api.js'></script>
        <div id="page-heading" style="background-image: url(./Content/wp-content/uploads/2018/03/banner-lienhe.jpg)">
            <div class="container">
                <h2 class="page-title">Liên hệ</h2>
                <p>Please fill the form to submit your feedback to Gong Cha. </p>
            </div>
        </div>
        <div id="breadcrumbs">
            <div class="container">
                <div id="breadcrumbs-nav">
                    <!-- Breadcrumb NavXT 6.0.4 -->
                    <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Gong Cha Vietnam." href="../index.html" class="home"><i class="fa fa-home"></i> </a>
                        <meta property="position" content="1">
                    </span> <i class="fa fa-angle-right"></i> <span property="itemListElement" typeof="ListItem"><span property="name">Liên hệ</span>
                        <meta property="position" content="2">
                    </span>
                </div>
            </div>
        </div>
        <main class="has-pd pd-bdtop-50">
            <section>
                <div class="container">
                    <p>Gong Cha luôn mong muốn nhận được nhưng phản hồi quý giá của quý khách hàng để có cơ hội hoàn thiện sản phẩm, dịch vụ hơn nữa. Những đóng góp của quý khách hàng luôn là tài sản vô giá đối với chúng tôi</p>
                    <hr>
                    <form action="#" method="post" id="contact-form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input required value="" type="text" class="form-input" name="fullname" placeholder="Họ và tên">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input required value="" type="email" class="form-input" name="email" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input required value="" type="tel" class="form-input" name="phone" placeholder="Số điện thoại">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select id="select-city" name="city" id="" class="form-input">
                                                <option value="-1">Tỉnh/ Thành</option>
                                                <option value="41">Kiên Giang</option>
                                                <option value="44">Sóc Trăng</option>
                                                <option value="47">Nha Trang</option>
                                                <option value="49">Đà Lạt</option>
                                                <option value="21">Hồ Chí Minh</option>
                                                <option value="20">Hà Nội</option>
                                                <option value="30">Đà Nẵng</option>
                                                <option value="28">Bình Dương</option>
                                                <option value="23">Biên Hòa</option>
                                                <option value="26">Cần Thơ</option>
                                                <option value="35">Long An</option>
                                                <option value="27">Huế</option>
                                                <option value="36">Mỹ Tho</option>
                                                <option value="29">Vũng Tàu</option>
                                                <option value="25">Thanh Hóa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select required id="select-store" name="store" id="" class="form-input">
                                                <option value="-1">Cửa hàng phản hồi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" id="conctact-check-group">
                            <p><label>Vấn đề phản hồi</label></p>
                            <label class="form-label" for="thanphien">
                                <input id="thanphien" class="icheck" checked type="radio" name="problem" value="thanphien"> Than phiền
                            </label>
                            <label class="form-label" for="khenngoi">
                                <input class="icheck" type="radio" id="khenngoi" name="problem" value="khenngoi"> Khen ngợi
                            </label>
                            <label class="form-label" for="dexuat">
                                <input class="icheck" type="radio" id="dexuat" name="problem" value="dexuat"> Đề xuất
                            </label>
                            <label class="form-label" for="thethanhvien">
                                <input class="icheck" type="radio" id="thethanhvien" name="problem" value="thethanhvien"> Thẻ thành viên
                            </label>
                            <label class="form-label" for="nhuongquyen">
                                <input class="icheck" type="radio" id="nhuongquyen" name="problem" value="nhuongquyen"> Nhượng quyền
                            </label>
                            <label class="form-label" for="tuyendung">
                                <input class="icheck" type="radio" id="tuyendung" name="problem" value="tuyendung"> Tuyển dụng
                            </label>
                            <label class="form-label" for="vandekhac">
                                <input class="icheck" type="radio" id="vandekhac" name="problem" value="vandekhac"> Vấn đề khác
                            </label>
                        </div>
                        <p class="text-primary" id="nhuongquyen-info" style="display: none;">Hiện tại Gong Cha Việt Nam đã ngưng chương trình nhượng quyền.</p>
                        <!--<div class="form-group">-->
                        <!--    <label>Ảnh đính kèm</label>-->
                        <!--    <input type="file" class="" name="file_att">-->
                        <!--</div>-->
                        <div class="form-group">
                            <p for="">Nội dung phản hồi</p>
                            <textarea required class="form-control" name="feedback_content" id="" cols="30" rows="10"></textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                            <h3>THỎA THUẬN BẢO MẬT THÔNG TIN</h3>
                            <ul>
                                <p>1. Gong Cha sẽ luôn giữ bí mật các thông tin của khách hàng và tuân thủ những quy định pháp luật về bảo mật thông tin có liên quan.</p>
                                <p>
                                    2. Gong Cha có thể tiết lộ thông tin cá nhân cho mục đích giải quyết khiếu nại, than phiền của khách hàng cho:
                                <p>
                                <p>- Các bộ phận trực thuộc Gong Cha Việt Nam;</p>
                                <p>- Bên thứ ba được ủy quyền chính thức từ Gong Cha Việt Nam cho việc giải quyết các than phiền, khiếu nại mang tính chất nghiêm trọng.</p>
                            </ul>
                            <p><strong>* LƯU Ý:</strong></p>
                            <p>Quý khách vui lòng cung cấp chính xác các thông tin cá nhân để Gong Cha có thể liên hệ giải quyết các thắc mắc, phản hồi và phàn nàn của khách hàng một cách nhanh chóng nhất.</p>
                            <p>Các ngày Thứ bảy, Chủ nhật, ngày lễ sẽ khiến quá trình giải quyết phản hồi của quý khách chậm hơn thường lệ</p>
                            <label for="agree">
                                <input class="icheck" type="checkbox" name="dongy" id="dongy">
                                Tôi xác nhận các thông tin cá nhân cung cấp ở trên là hoàn toàn chính xác và đồng ý để Gong Cha sử dụng các thông tin đó cho mục đích giải quyết phản hồi.
                            </label>
                        </div>
                        <hr>
                        <div class="form-group" id="form-action-wrap">
                            <button id="action-send-feedback" type="submit" name="submit" class="btn btn-primary">GỬI Ý KIẾN</button>
                            <div class="g-recaptcha" data-sitekey="6LcahUwUAAAAAIxT8c10CD5N9Uee9aTcQjTi3ch9"></div>
                        </div>
                    </form>
                </div>
            </section>
        </main>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('input[name="problem"]').on('ifChecked', function() {
                    if (jQuery(this).val() == 'nhuongquyen')
                        jQuery('#nhuongquyen-info').show();
                    else
                        jQuery('#nhuongquyen-info').hide();
                })
            })
        </script>
    </div><!-- end #page -->
</body>
