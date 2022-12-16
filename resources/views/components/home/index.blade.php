@extends('layout.web.master')
@section('content')
    <div class="bx-wrapper">
        <div class="swiper-slide">
            <a href="">
                <img src="{{asset('assets/web/images/web/main/visual01.jpg')}}" alt="">
                <!--<span>
                hahaha
                </span>-->
            </a>

        </div>
        <div class="swiper-slide">
            <a href="">
                <img src="{{asset('assets/web/images/web/main/visual02.jpg')}}" alt="">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="">
                <img src="{{asset('assets/web/images/web/main/visual03.jpg')}}" alt="">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="">
                <img src="{{asset('assets/web/images/web/main/visual04.jpg')}}" alt="">
            </a>
        </div>
    </div>
    <section class="our_biz" >
        <div class="inner">
            <div class="header_service_home" data-aos="fade-down"
                 data-aos-duration="1000">
                <h2>Dịch vụ của chúng tôi </h2>
                <span class="cp_under_line"></span>
            </div>
            <div class="our_biz_content" data-aos="fade-up"
                 data-aos-duration="1000">
                <div class="automibility active">
                    <div class="description_service">
                        <p class="name_company m-0">LOTTE rental</p>
                        <span class="our_service">Dich vụ thuê xe</span>
                    </div>
                    <ul class="our_biz_list">
                        <p class="detail_service_home1">
                            Chúng tôi cung cấp dịch vụ cho thuê xe car
                            và xe bus đến khách hàng
                        </p>
                        <li class="list_service_home1">
                            <a href="service_ldccrental_cars.html">
                                <span>Thuê xe dài hạn </span>
                            </a>
                        </li>
                        <li class="fr">
                            <a href=""><span>Thuê xe ngắn hạn</span></a>
                        </li>

                    </ul>
                </div>
                <div class="biz_solution">
                    <div class="description_service">
                        <p class="name_company m-0">LOTTE rental</p>
                        <span class="our_service">Thuê thiết bị </span>
                    </div>
                    <ul class="our_biz_list">
                        <p class="detail_service_home2">
                            Cung cấp dịch vụ cho thuê thiết bị đa dạng
                            như thiết bị văn phòng, gia dung, y tế
                        </p>
                        <li>
                            <a href="">
                                <span>Thiết bị văn phòng </span>
                            </a>
                        </li>
                        <li class="fr">
                            <a href=""><span>Máy phân tích tín hiệu</span></a>
                        </li>
                        <li class="fr">
                            <a href=""><span>Thiết bị gia dụng</span></a>
                        </li>
                        <li>
                            <a href="">
                                <span>Thiết bị y tế</span>
                            </a>
                        </li>

                    </ul>

                </div>
                <div class="life_style">
                    <div class="description_service">
                        <p class="name_company m-0">LOTTE rental</p>
                        <span class="our_service">Bán xe & Thiết bị</span>
                    </div>
                    <ul class="our_biz_list">
                        <p class="detail_service_home3">
                            Lotte Rental đem đến đa dạng các dịch vụ nhằm đáp ứng nhu cầu của khách hàng như: đấu thầu xe, thuê tài xe, bán xe ,...
                        </p>
                        <li class="list_service_home1">
                            <a href="service_ldccrental_cars.html">
                                <span>Bán xe </span>
                            </a>
                        </li>
                        <li class="fr">
                            <a href=""><span>Bán thiết bị</span></a>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </section>
    <section class="rental_history">
        <div class="inner" style="background-image: url("{{asset('assets/web/images/web/main/bg_history.jpg')}}")">
            <img src="{{asset('assets/web/images/web/main/PC_img_lotte_rental_temp_en.png')}}" alt=""/>
        </div>
    </section>



    <div  class="bg__home"></div>
    <section class="header_feedback_home" data-aos="fade-down"
         data-aos-duration="1000">
        <h2>TẠI SAO NÊN CHỌN DỊCH VỤ CỦA CHÚNG TÔI ?</h2>
        <span class="cp_under_line"></span>
    </section>
    <section class="cd-section section-white">
        <div class="features-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 ml-auto" >
                        <div class="iphone-container">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="row">
                            <div class="container">
                                <!--                                    <h2 class="title">Đa dạng dịch vụ</h2>-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="info info-horizontal">
                                    <div class="icon icon-success">
                                        <img src="{{asset('assets/web/images/web/main/why-us2.png')}}" alt="" width="55">
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Đa dạng dịch vụ</h4>
                                        <p>
                                            Chúng tôi cung cấp nhiều dịch vụ như: cho thuê xe car,xe bus, thiết bị văn phòng, thiết bị gia dụng, thiết bị y tế,...
                                        </p>
                                    </div>
                                </div>
                                <div class="info info-horizontal">
                                    <div class="icon icon-warning">
                                        <img src="{{asset('assets/web/images/web/main/why-us1.png')}}" alt="" width="55">
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Thanh toán dễ dàng</h4>
                                        <p>Bạn có thể thanh toán bằng nhiều các hình thức khác nhau</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info info-horizontal">
                                    <div class="icon icon-danger">
                                        <img src="{{asset('assets/web/images/web/main/why-us3.png')}}" alt="" width="55">
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Hỗ trợ khác hàng</h4>
                                        <p>Đội ngũ nhân viên chăm sóc khách hàng luôn luôn giải đáp, hỗ trợ khách hàng kịp thời và nhanh chóng.</p>
                                    </div>
                                </div>
                                <div class="info info-horizontal">
                                    <div class="icon icon-primary">
                                        <img src="{{asset('assets/web/images/web/main/why-us4.png')}}" alt="" width="50">
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Khách hàng tin cậy</h4>
                                        <p>Khách hàng sử dụng dịch vụ có những phản hồi tích cực và sử dụng những dịch vụ khác của công ty</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Đôis tác -->
    <section class="header_feedback_home_2" data-aos="fade-down"
         data-aos-duration="1000">
        <h2>đối tác & khách hàng </h2>
        <span class="cp_under_line"></span>
    </section>

    <section class="biolife-brand-block sm-padding-top-14px sm-margin-top-50px xs-margin-top-90px center-align-on-mobile">
        <div class="container">
            <ul class="biolife-carousel add-border-on-mobile nav-center nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 5}},{"breakpoint":992, "settings":{ "slidesToShow": 4}},{"breakpoint":768, "settings":{ "slidesToShow": 3}},{"breakpoint":600, "settings":{ "slidesToShow": 2}},{"breakpoint":480, "settings":{ "slidesToShow": 1}}]}'>
                <li>
                    <a href="#" class="link-brand-item">
                        <img src="{{asset('assets/web/images/web/main/hyundai.png')}}" width="234" height="121" alt="">
                        <p>Huyndai</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="link-brand-item">
                        <img src="{{asset('assets/web/images/web/main/kia.png')}}" width="234" height="121" alt="">
                        <p>KIA</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="link-brand-item">
                        <img src="{{asset('assets/web/images/web/main/toyota.png')}}" width="234" height="121" alt="">
                        <p>Toyota</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="link-brand-item">
                        <img src="{{asset('assets/web/images/web/main/mercedes-benz.png')}}" width="234" height="121" alt="">
                        <p>Mercedes</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="link-brand-item">
                        <img src="{{asset('assets/web/images/web/main/nissan.png')}}" width="234" height="121" alt="">
                        <p>Nissan</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="link-brand-item">
                        <img src="{{asset('assets/web/images/web/main/ford.png')}}" width="234" height="121" alt="">
                        <p>Ford</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="link-brand-item">
                        <img src="{{asset('assets/web/images/web/main/mazda.png')}}" width="234" height="121" alt="">
                        <p>Mazda</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="link-brand-item">
                        <img src="{{asset('assets/web/images/web/main/honda.png')}}" width="234" height="121" alt="">
                        <p>Honda</p>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <div class="header_feedback_home_2" data-aos="fade-down"
         data-aos-duration="1000">
        <h2>Liên hệ với chúng tôi</h2>
        <span class="cp_under_line"></span>
    </div>
    <section class="contact_us mb-2">
        <div class="container row m-auto pt-5 pb-5" >

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="contact-info-container sm-margin-top-27px xs-margin-bottom-60px xs-margin-top-60px">
                    <div class="location_rental">
                        <div class="location-item">
                            <p class="m-0"><b><i class="bx bx-map"></i> Hà Nội</b></p>
                            <span>Tầng 1, 2, Tòa nhà The Sun, đường Mễ Trì, Phường Mễ Trì, Quận Nam Từ Liêm, Hà Nội, Việt Nam

                                    </span>
                        </div>
                        <br>
                        <div class="location-item">
                            <p class="m-0"><b><i class="bx bx-map"></i> Đà Nẵng</b></p>
                            <span>Phòng A, Tầng 6, Tòa nhà văn phòng Indochina Riverside, 74 Bạch Đằng, Phường Hải Châu 1, Quận Hải Châu, Thành phố Đà Nẵng, Việt Nam

                                    </span>
                        </div>
                        <br>
                        <div class="location-item">
                            <p class="m-0"><b><i class="bx bx-map"></i> Hồ Chí Minh</b></p>
                            <span>Tầng 7, Tòa nhà Paragon, Số 03, Đường Nguyễn Lương Bằng,
                                            Phường Tân Phú, Quận 7
                                            Thành phố Hồ Chí Minh, Việt Nam
                                    </span>
                        </div>
                    </div>
                    <ul class="addr-info">
                        <li>
                            <div class="if-item">
                                <b class="tie">Điện thoại:</b>
                                <p class="dsc">(800) 123 456789</p>
                            </div>
                        </li>
                        <li>
                            <div class="if-item">
                                <b class="tie">Email:</b>
                                <p class="dsc">support@lotterental.vn</p>
                            </div>
                        </li>
                        <!--<li>
                            <div class="if-item">
                                <b class="tie">Store Open:</b>
                                <p class="dsc">8am - 08pm, Mon - Sat</p>
                            </div>
                        </li>-->
                    </ul>
                    <div class="inline">
                        <ul class="d-flex ">
                            <li>
                                <a href="#" id="kakao" class="socail-btn">
                                    <img src="{{asset('assets/web/images/web/icon/icons8-kakaotalk-48.png')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#" id="facebook" class="socail-btn">
                                    <img src="{{asset('assets/web/images/web/icon/icons8-zalo-48.png')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#" id="zalo" class="socail-btn">
                                    <img src="{{asset('assets/web/images/web/icon/icons8-facebook-48.png')}}" alt="">
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="map_contact_detail">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15357.564294263111!2d106.7215504086455!3d10.729488366079392!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2c5cc1c9a9470997!2zVMOyYSBuaMOgIFBhcmFnb24!5e0!3m2!1svi!2s!4v1667815366660!5m2!1svi!2s" width= "580" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection