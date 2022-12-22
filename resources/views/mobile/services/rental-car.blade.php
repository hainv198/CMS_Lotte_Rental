@extends('layout.mobile.master')
@section('content-mb')
    <!-- Sub Visual -->
    <div id="sub_visual" class="sub_visual bg02">
        <div class="visual">
            <img src="{{asset('assets/web/resource/images/mob/company/sub_visual10.jpg')}}" alt="" style="margin-top: 55px;"/>
        </div>
        <!-- Page title -->
        <div class="pg_tit_wrap">
            <h3 class="pg_tit">Dịch vụ thuê xe</h3>
            <!-- Next menu -->
            <a href="#" class="next_menu">Next menu</a>
            <!--// Next menu -->
        </div>
        <!-- Page title -->
    </div>
    <!--// Sub Visual -->

    <!-- Sub Content -->
    <div id="content" class="content">
        <div class="header_feedback_home_2 mb-2">
            <h2>Về dịch vụ</h2>
            <span class="cp_under_line"></span>
            <p>
                LOTTE  thiết kế giải pháp thuê xe linh hoạt đáp ứng trọn vẹn nhu cầu thuê xe của doanh nghiệp và cá nhân. Chúng tôi luôn cam kết mang đến những trải nghiệm hành trình tuyệt vời, và đây cũng là yếu tố then chốt tạo nên tên tuổi LOTTE Rental ngày hôm nay.
            </p>
        </div>
        <div class="row chose-us_web">
            <div  class="col-12 col-sm-6">
                <div class="header_feedback_home_3">
                    <h2 class="p-2">LOTTE Rental - THƯƠNG HIỆU UY TÍN TẠI HÀN QUỐC</h2>
                </div>
                <div class="text-left">
                    <p class="p-2">
                        LOTTE Rental đưa bạn đến bất cứ đâu với giải pháp di chuyển (có hoặc không
                        bao gồm tài xế) tiện lợi &amp; an toàn.
                    </p>
                </div>
                <div>
                    <ul class="list-group-tao">
                        <li class="rent-car-term-list-item">
                            <div class="img-header" style="display: inline-block">
                                <img alt="" class="img-content"
                                     src="{{asset('assets/web/resource/images/mob/icon/icons8-sale-price-tag-100.png')}}" width="32"/>
                            </div>
                            <span>Biểu phí cạnh tranh</span>
                        </li>
                        <li class="rent-car-term-list-item">
                            <div class="img-header" style="font-size: 32px; display: inline-block">
                                <img alt="" class="img-content"
                                     src="{{asset('assets/web/resource/images/mob/icon/icons8-car-rental-100.png')}}" width="32"
                                />
                            </div>
                            <span>Chuỗi cung ứng xe lớn.</span>
                        </li>
                        <li class="rent-car-term-list-item">
                            <div class="img-header" style="font-size: 32px; display: inline-block">
                                <img alt="" class="img-content"
                                     src="{{asset('assets/web/resource/images/mob/icon/icons8-task-100.png')}}" width="32"
                                />
                            </div>
                            <span>Tiện ích cộng thêm.</span>
                        </li>
                        <li class="rent-car-term-list-item">
                            <div class="img-header" style="font-size: 32px; display: inline-block">
                                <img alt="" class="img-content"
                                     src="{{asset('assets/web/resource/images/mob/icon/icons8-average-price-100.png')}}" width="32"
                                />
                            </div>
                            <span>Thanh toán linh hoạt dễ dàng</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6"
                 style="background-image: url({{asset('assets/web/images/web/main/Picture-home1.png')}});
                 background-position: center;
                 background-repeat: no-repeat;
                 background-size: cover;
                 width: 100%;
            ">
            </div>
        </div>
        <div class="row chose-us" style="display: none">
            <div  class="col-12 col-sm-12  pb-4">
                <div class="header_feedback_home_3">
                    <h2 class="p-2">LOTTE Rental - THƯƠNG HIỆU UY TÍN TẠI HÀN QUỐC</h2>
                </div>
                <div class="text-left">
                    <p class="p-3">
                        LOTTE Rental đưa bạn đến bất cứ đâu với giải pháp di chuyển (có hoặc không
                        bao gồm tài xế) tiện lợi &amp; an toàn.
                    </p>
                </div>
                <div>
                    <ul class="list-group-tao">
                        <li class="rent-car-term-list-item">
                            <div class="img-header" style="display: inline-block">
                                <img alt=""
                                     class="img-content"
                                     src="{{asset('assets/web/resource/images/mob/icon/icons8-sale-price-tag-100.png')}}"
                                     width="32"/>
                            </div>
                            <span>Biểu phí cạnh tranh</span>
                        </li>
                        <li class="rent-car-term-list-item">
                            <div class="img-header" style="font-size: 32px; display: inline-block">
                                <img alt="" class="img-content" src="{{asset('assets/web/resource/images/mob/icon/icons8-car-rental-100.png')}}" width="32"
                                />
                            </div>
                            <span>Chuỗi cung ứng xe lớn.</span>
                        </li>
                        <li class="rent-car-term-list-item">
                            <div class="img-header" style="font-size: 32px; display: inline-block">
                                <img alt="" class="img-content" src="{{asset('assets/web/resource/images/mob/icon/icons8-task-100.png')}}" width="32"
                                />
                            </div>
                            <span>Tiện ích cộng thêm.</span>
                        </li>
                        <li class="rent-car-term-list-item">
                            <div class="img-header" style="font-size: 32px; display: inline-block">
                                <img alt="" class="img-content" src="{{asset('assets/web/resource/images/mob/icon/icons8-average-price-100.png')}}" width="32"
                                />
                            </div>
                            <span>Thanh toán linh hoạt dễ dàng</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="header_feedback_home_2 mb-2">
        <h2>Dịch vụ của chúng tôi</h2>
        <span class="cp_under_line"></span>
        <p>
            Chúng tôi tạo nên khác biệt bằng việc luôn cam kết mang đến những trải nghiệm hành trình tuyệt vời.
        </p>
    </div>

    <div class="container_tab">
        <div class="row row_tab">
            <div class="column_tab col-md-6">
                <a  class="demo cursor" onclick="currentSlide(1)" >Thuê xe dài hạn</a>
            </div>
            <div class="column_tab col-md-6">
                <a  class="demo cursor" onclick="currentSlide(2)" >Thuê xe ngắn hạn</a>
            </div>
        </div>

        <!--  Component car one  -->
        <div class="mySlides ">
            <div class="mt-5 p-3 d-flex justify-content-between ">
                <h4> <i class='bx bx-car' ></i> <span style="font-size: 20px; text-transform: uppercase">Xe con</span> </h4>
                <a href="" class="hvr-icon-wobble-horizontal hvr-float-shadow">
                    Xem tất cả <i class='bx bx-right-arrow-alt hvr-icon'></i>
                </a>
            </div>
            <hr>
            <div class="container-fluid">
                <div class="_container-slider swiper" data-swiper-autoplay="2000">
                    <div class="slide-container">
                        <div class="card-wrapper swiper-wrapper" >
                            @foreach($rental_car as $item)
                                @if($item->status === 1 && $item->type === 1)
                                    <div class="card_item swiper-slide hvr-underline-from-left">
                                        <div class="image-box">
                                            <a href="#">
                                                <img src="{{$item->file_path}}" alt="" />
                                            </a>
                                        </div>
                                        <br>
                                        <div class="profile-details ">
                                            <div class="name-job">
                                                <h3 class="name">
                                                    {{$item->name}}
                                                </h3>
                                                <h4 class="job">
                                                    {{$item->description}}
                                                </h4>
                                                <div class="advants_card ">
                                                    <div>
                                                        <!--<span>Số ghế</span>-->
                                                        <div>
                                                            <i class='bx bx-user-circle' ></i>
                                                            <span>
                                                                    {{$item->seats}}
                                                                </span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <!--<span>Hãng xe</span>-->
                                                        <div>
                                                            <i class='bx bx-car' ></i>
                                                            <span>{{$item->car_base}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="price_card">
                                                    <span>Giá dịch vụ</span>
                                                    <span>{{$item->price}} VND</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-navBtn"></div>
                    <div class="swiper-button-prev swiper-navBtn"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <!--======-->
            <div class="mt-5 mb-3 p-3 d-flex justify-content-between ">
                <h4> <i class='bx bx-bus-school' ></i> <span style="font-size: 20px; text-transform: uppercase">Xe Bus</span> </h4>
                <a href="service_rental_detail_ver3.html" class="hvr-icon-wobble-horizontal hvr-float-shadow">
                    Xem tất cả <i class='bx bx-right-arrow-alt hvr-icon'></i>
                </a>
            </div>
            <hr>
            <div class="container-fluid">
                <div class="_container-slider swiper" data-swiper-autoplay="2000">
                    <div class="slide-container">
                        <div class="card-wrapper swiper-wrapper" >
                            @foreach($rental_bus as $item)
                                @if($item->status === 1 && $item->type === 2)
                                    <div class="card_item swiper-slide hvr-underline-from-left">
                                        <div class="image-box">
                                            <a href="#">
                                                <img src="{{$item->file_path}}" alt="" />
                                            </a>
                                        </div>
                                        <br>
                                        <div class="profile-details ">
                                            <div class="name-job">
                                                <h3 class="name">
                                                    {{$item->name}}
                                                </h3>
                                                <h4 class="job">
                                                    {{$item->description}}
                                                </h4>
                                                <div class="advants_card ">
                                                    <div>
                                                        <!--<span>Số ghế</span>-->
                                                        <div>
                                                            <i class='bx bx-user-circle' ></i>
                                                            <span>
                                                                    {{$item->seats}}
                                                                </span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <!--<span>Hãng xe</span>-->
                                                        <div>
                                                            <i class='bx bx-car' ></i>
                                                            <span>{{$item->car_base}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="price_card">
                                                    <span>Giá dịch vụ</span>
                                                    <span>{{$item->price}} VND</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </div>
        <!-- End Component car one  -->


        <!--  Component car two  -->
        <div class="mySlides">
            <div class="mt-5 p-3 d-flex justify-content-between ">
                <h4> <i class='bx bx-car' ></i> <span style="font-size: 20px; text-transform: uppercase">Xe con</span> </h4>
                <a href="service_rental_detail_ver3.html" class="hvr-icon-wobble-horizontal hvr-float-shadow">
                    Xem tất cả <i class='bx bx-right-arrow-alt hvr-icon'></i>
                </a>
            </div>
            <hr>
            <div class="container-fluid">
                <div class="_container-slider swiper" data-swiper-autoplay="2000">
                    <div class="slide-container">
                        <div class="card-wrapper swiper-wrapper" >
                            @foreach($rental_car as $item)
                                @if($item->status === 2 && $item->type === 1)
                                    <div class="card_item swiper-slide hvr-underline-from-left">
                                        <div class="image-box">
                                            <a href="#">
                                                <img src="{{$item->file_path}}" alt="" />
                                            </a>
                                        </div>
                                        <br>
                                        <div class="profile-details ">
                                            <div class="name-job">
                                                <h3 class="name">{{$item->name}}</h3>
                                                <h4 class="job">{{$item->description}}</h4>
                                                <div class="advants_card ">
                                                    <div>
                                                        <!--<span>Số ghế</span>-->
                                                        <div>
                                                            <i class='bx bx-user-circle' ></i>
                                                            <span>{{$item->seats}}</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <!--<span>Hãng xe</span>-->
                                                        <div>
                                                            <i class='bx bx-car' ></i>
                                                            <span>{{$item->car_base}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="price_card">
                                                    <span>Giá dịch vụ</span>
                                                    <span>{{$item->price}} VND</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                    <div class="swiper-button-next swiper-navBtn"></div>
                    <div class="swiper-button-prev swiper-navBtn"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <!--==========-->

            <div class="mt-5 p-3 d-flex justify-content-between ">
                <h4> <i class='bx bx-bus-school' ></i> <span style="font-size: 20px; text-transform: uppercase">Xe Bus</span> </h4>
                <a href="service_rental_detail_ver3.html" class="hvr-icon-wobble-horizontal hvr-float-shadow">
                    Xem tất cả <i class='bx bx-right-arrow-alt hvr-icon'></i>
                </a>
            </div>
            <hr>
            <div class="container-fluid mb-3">
                <div class="_container-slider swiper" data-swiper-autoplay="2000">
                    <div class="slide-container">
                        <div class="card-wrapper swiper-wrapper" >
                            @foreach($rental_bus as $item)
                                @if($item->status === 2 && $item->type === 2)
                                    <div class="card_item swiper-slide hvr-underline-from-left">
                                        <div class="image-box">
                                            <a href="#">
                                                <img src="{{$item->file_path}}" alt="" />
                                            </a>
                                        </div>
                                        <br>
                                        <div class="profile-details ">
                                            <div class="name-job">
                                                <h3 class="name">{{$item->name}}</h3>
                                                <h4 class="job">{{$item->description}}</h4>
                                                <div class="advants_card ">
                                                    <div>
                                                        <!--<span>Số ghế</span>-->
                                                        <div>
                                                            <i class='bx bx-user-circle' ></i>
                                                            <span>{{$item->seats}}</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <!--<span>Hãng xe</span>-->
                                                        <div>
                                                            <i class='bx bx-car' ></i>
                                                            <span>{{$item->car_base}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="price_card">
                                                    <span>Giá dịch vụ</span>
                                                    <span>{{$item->price}} VND</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-navBtn"></div>
                    <div class="swiper-button-prev swiper-navBtn"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <!-- End Component car two  -->
    </div>
@endsection