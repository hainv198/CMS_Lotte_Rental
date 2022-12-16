@extends('layout.web.master')
@section('content')
    <!-- Sub Visual -->
    <section id="sub_visual" class="sub_visual bg13">
        <div class="pg_tit_wrap">

            <!-- Path -->
            <div class="path">
                <a href="{{route('home')}}">
                    <span class="home">Trang chủ</span></a>
                <a href="about_ldcc_rental.html"><span>Sản phẩm & dịch vụ</span></a>
                <span>Bán xe & thiết bị</span>
            </div>
            <!--// Path -->

            <h3 class="pg_tit">Bán xe & thiết bị</h3>
            <a href="" class="next_menu">Trung tâm PR</a>
        </div>
    </section>
    <!--// Sub Visual -->

    <!-- Sub Content -->
    <section id="content" class="content">


        <div class="special-slide">
            <div class="container">
                <ul class="biolife-carousel dots_ring_style" data-slick='{"arrows": false, "dots": true, "slidesMargin": 30, "slidesToShow": 1, "infinite": true, "speed": 800, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 1}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":20, "dots": false}},{"breakpoint":480, "settings":{ "slidesToShow": 1}}]}' >
                    @foreach($sales_banner as $item)
                        @if($item->type === 3)
                            <li>
                                <div class="slide-contain biolife-banner__special">
                                    <div class="banner-contain">
                                        <div class="media">
                                            <a href="#" class="bn-link">
                                                <figure>
                                                    <img src="{{$item->file_path}}"
                                                         width="616"
                                                         height="483"
                                                         alt=""
                                                         style="height: 483px;width: 616px;"
                                                    >
                                                </figure>
                                            </a>
                                        </div>

                                        <div class="text-content">
                                            <b class="first-line">Lotte Rental</b>
                                            <span class="second-line">{{$item->name}}</span>
                                            <span class="third-line">
                                            <i>
                                                {{$item->description}}
                                            </i>
                                        </span>
                                            <div class="product-detail">
                                                <!--<div class="price price-contain">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>-->
                                                <div class="buttons">
                                                    <a href="#" class="btn add-to-cart-btn">Liên hệ tư vấn</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul>
                <div class="biolife-service type01 biolife-service__type01 sm-margin-top-0 xs-margin-top-45px">
                    <!--<b class="txt-show-01">100%Nature</b>
                    <i class="txt-show-02">Fresh Fruits</i>-->
                    <ul class="services-list">
                        <li>
                            <div class="service-inner">
                                <span class="number">1</span>
                                <span class="biolife-icon icon-beer"></span>
                                <a class="srv-name" href="#">
                                    nguồn gốc sản phẩm rõ ràng
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="service-inner">
                                <span class="number">2</span>
                                <span class="biolife-icon icon-schedule"></span>
                                <a class="srv-name" href="#">
                                    đa dạng sự lựa chọn
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="service-inner">
                                <span class="number">3</span>
                                <span class="biolife-icon icon-car"></span>
                                <a class="srv-name" href="#">
                                    chất lượng xe cũ được cải thiện

                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>



        <div class="container-fluid">

            <div class="blog-posts  xs-padding-bottom-50px">
                <div class="mt-5 mb-5">
                    <div class="header_service_tab">
                        <h4 class="m-0">
                            <span style="font-size: 20px; text-transform: uppercase">Hãng xe bán chạy</span>
                            <span class="cp_under_line" style="height: 2px"></span>
                        </h4>
                        <a href="" class="hvr-icon-wobble-horizontal hvr-float-shadow">
                            Xem tất cả <i class='bx bx-right-arrow-alt hvr-icon'></i>
                        </a>
                    </div>
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
                    <br>
                    <hr>
                </div>
                <div class="container">
                    <ul class="biolife-carousel nav-center xs-margin-top-34px nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 2}},{"breakpoint":768, "settings":{ "slidesToShow": 2}},{"breakpoint":600, "settings":{ "slidesToShow": 1}}]}'>
                        @foreach($sales_car as $item)
                            @if($item->type === 1)
                                <li>
                                    <div class="slide-box container_card">
                                        <div class=" box_card">
                                            <div class="top_card">
                                                <img src="{{$item->file_path}}" alt=""/>
                                                <span>
<!--                                                <i class='bx bxl-tailwind-css'></i>
                                                <i class='bx bxl-tailwind-css'></i>-->
                                            </span>
                                            </div>
                                            <div class="bottom_card hvr-underline-from-left">
                                                <div class="car__title">
                                                    <h3 class="car__name">
                                                        <a href="">
                                                            {{$item->name}}
                                                        </a>
                                                    </h3>
                                                    <span class="car__year">{{$item->year}}</span>
                                                </div>

                                                <div class="advants">
                                                    <ul class="car__list">
                                                        <li>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z"></path></svg>
                                                            <span>{{$item->seats}} people</span>
                                                        </li>
                                                        <li>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.54,6.29,19,4.75,17.59,3.34a1,1,0,0,0-1.42,1.42l1,1-.83,2.49a3,3,0,0,0,.73,3.07l2.95,3V19a1,1,0,0,1-2,0V17a3,3,0,0,0-3-3H14V5a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3h6a3,3,0,0,0,3-3V16h1a1,1,0,0,1,1,1v2a3,3,0,0,0,6,0V9.83A5,5,0,0,0,20.54,6.29ZM12,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12h8Zm0-9H4V5A1,1,0,0,1,5,4h6a1,1,0,0,1,1,1Zm8,1.42L18.46,9.88a1,1,0,0,1-.24-1l.51-1.54.39.4A3,3,0,0,1,20,9.83Z"></path></svg>
                                                            <span>{{$item->fuel}}</span>
                                                        </li>
                                                        <li>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19.088,4.95453c-.00732-.00781-.00952-.01819-.01715-.02582s-.01819-.00995-.02606-.01733a9.97886,9.97886,0,0,0-14.08948,0c-.00787.00738-.01837.00964-.02606.01733s-.00983.018-.01715.02582a10,10,0,1,0,14.1759,0ZM12,20a7.9847,7.9847,0,0,1-6.235-3H9.78027a2.9636,2.9636,0,0,0,4.43946,0h4.01532A7.9847,7.9847,0,0,1,12,20Zm-1-5a1,1,0,1,1,1,1A1.001,1.001,0,0,1,11,15Zm8.41022.00208L19.3999,15H15a2.99507,2.99507,0,0,0-2-2.81573V9a1,1,0,0,0-2,0v3.18427A2.99507,2.99507,0,0,0,9,15H4.6001l-.01032.00208A7.93083,7.93083,0,0,1,4.06946,13H5a1,1,0,0,0,0-2H4.06946A7.95128,7.95128,0,0,1,5.68854,7.10211l.65472.65473A.99989.99989,0,1,0,7.75732,6.34277l-.65466-.65466A7.95231,7.95231,0,0,1,11,4.06946V5a1,1,0,0,0,2,0V4.06946a7.95231,7.95231,0,0,1,3.89734,1.61865l-.65466.65466a.99989.99989,0,1,0,1.41406,1.41407l.65472-.65473A7.95128,7.95128,0,0,1,19.93054,11H19a1,1,0,0,0,0,2h.93054A7.93083,7.93083,0,0,1,19.41022,15.00208Z"></path></svg>
                                                            <span>{{$item->distance}} km</span>
                                                        </li>
                                                        <li>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,12a1,1,0,1,0,1,1A1,1,0,0,0,12,12Zm9.71-2.36a0,0,0,0,1,0,0,10,10,0,0,0-19.4,0,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0,4.72,0,0,0,0,1,0,0A10,10,0,0,0,9.61,21.7h0a9.67,9.67,0,0,0,4.7,0h0a10,10,0,0,0,7.31-7.31,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0-4.72ZM12,4a8,8,0,0,1,7.41,5H4.59A8,8,0,0,1,12,4ZM4,12a8.26,8.26,0,0,1,.07-1H6v2H4.07A8.26,8.26,0,0,1,4,12Zm5,7.41A8,8,0,0,1,4.59,15H7a2,2,0,0,1,2,2Zm4,.52A8.26,8.26,0,0,1,12,20a8.26,8.26,0,0,1-1-.07V18h2ZM13.14,16H10.86A4,4,0,0,0,8,13.14V11h8v2.14A4,4,0,0,0,13.14,16ZM15,19.41V17a2,2,0,0,1,2-2h2.41A8,8,0,0,1,15,19.41ZM19.93,13H18V11h1.93A8.26,8.26,0,0,1,20,12,8.26,8.26,0,0,1,19.93,13Z"></path></svg>
                                                            <span>{{$item->feature}}</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="car__footer">
                                                    <span class="car__price">${{$item->price}} </span>
                                                    <a href="car.html" class="car__more"><span>Liên hệ</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <!--Bán thiết bị-->
        <div class="container-fluid">
            <div class="blog-posts  xs-padding-bottom-50px">
                <div class="mt-5 mb-5">
                    <div class="header_service_tab">
                        <h4>
                            <span style="font-size: 20px; text-transform: uppercase">Thiết bị bán chạy</span>
                            <span class="cp_under_line" style="height: 2px"></span>
                        </h4>

                        <a href="service_rental_detail_ver2.html" class="hvr-icon-wobble-horizontal hvr-float-shadow">
                            Xem tất cả <i class='bx bx-right-arrow-alt hvr-icon'></i>
                        </a>
                    </div>
                    <hr>
                </div>
                <div class="container">
                    <ul class="biolife-carousel nav-center xs-margin-top-34px nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 2}},{"breakpoint":768, "settings":{ "slidesToShow": 2}},{"breakpoint":600, "settings":{ "slidesToShow": 1}}]}'>
                        @foreach($sale_equipment as $item)
                            @if($item->type === 2)
                                <li>
                                    <div class="slide-box container_card">
                                        <div class=" box_card">
                                            <div class="top_card">
                                                <img src="{{$item->file_path}}" alt=""/>
                                                <span>
                                                    <i class='bx bxl-tailwind-css'></i>
                                                    <i class='bx bxl-tailwind-css'></i>
                                                </span>
                                            </div>
                                            <div class="bottom_card hvr-underline-from-left">
                                                <h3>Hyundai SantaFe</h3>
                                                <p>
                                                    description
                                                </p>
                                                <div class="advants">
                                                    <div>
                                                        <span>Thời gian bảo hành</span>
                                                        <div>
                                                            <i class='bx bx-user-circle' ></i>
                                                            <span>16</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span>Năm sản xuất</span>
                                                        <div>
                                                            <i class='bx bx-timer'></i>
                                                            <span>2011</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span>Hãng xe</span>
                                                        <div>
                                                            <i class='bx bx-car' ></i>
                                                            <span>Hyundai</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <span>Giá dịch vụ</span>
                                                    <span>1.000.000 VND</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endif
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>




    </section>
@endsection