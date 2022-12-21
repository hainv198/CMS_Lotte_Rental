@extends('layout.web.master')
@section('content')




    <!-- Sub Visual -->
    <section id="sub_visual" class="sub_visual esg">
        <div class="pg_tit_wrap">

            <!-- Path -->
            <div class="path">
                <a href="{{route('home')}}">
                    <span class="home">Trang chủ</span></a>
                <a href="{{route('services')}}"><span>Sản phẩm & dịch vụ</span></a>
                <span>Dịch vụ thuê xe</span>
            </div>
            <!--// Path -->

            <h3 class="pg_tit">Thuê thiết bị</h3>
            <a href="" class="next_menu">Dịch vụ khác</a>
        </div>
    </section>
    <!--// Sub Visual -->

    <!-- Sub Content -->
    <section id="content" class="content">

        <div class="cont_tit_wrap">
            <h5 class="esg-tit1">VỀ DỊCH VỤ </h5>
            <span class="cp_under_line"></span>
            <p class="esg-tit2">
                LOTTE  thiết kế giải pháp thuê xe linh hoạt đáp ứng trọn vẹn nhu cầu thuê xe của doanh nghiệp và cá nhân. Chúng tôi luôn cam kết mang đến những trải nghiệm hành trình tuyệt vời, và đây cũng là yếu tố then chốt tạo nên tên tuổi LOTTE Rental ngày hôm nay.
            </p>
        </div>


        <div class="row">
            <div  class="col-12 col-sm-6 pt-5 pb-4">
                <div>
                    <h2>LOTTE Rental - THƯƠNG HIỆU UY TÍN TẠI HÀN QUỐC</h2>
                </div>
                <div class="text-left">
                    <p class="text-center">
                        LOTTE Rental đưa bạn đến bất cứ đâu với giải pháp di chuyển (có hoặc không
                        bao gồm tài xế) tiện lợi &amp; an toàn.
                    </p>
                </div>
                <div>
                    <ul class="list-group-tao">
                        <li class="rent-car-term-list-item">
                            <div class="img-header" style="display: inline-block">
                                <img alt="" class="img-content" src="{{asset('assets/web/images/web/icon/icons8-sale-price-tag-100.png')}}" width="32"/>
                            </div>
                            <span>Biểu phí cạnh tranh</span>
                        </li>
                        <li class="rent-car-term-list-item">
                            <div class="img-header" style="font-size: 32px; display: inline-block">
                                <img alt="" class="img-content" src="{{asset('assets/web/images/web/icon/icons8-car-rental-100.png')}}" width="32"/>
                            </div>
                            <span>Chuỗi cung ứng xe lớn.</span>
                        </li>
                        <li class="rent-car-term-list-item">
                            <div class="img-header" style="font-size: 32px; display: inline-block">
                                <img alt="" class="img-content" src="{{asset('assets/web/images/web/icon/icons8-task-100.png')}}" width="32"/>
                            </div>
                            <span>Tiện ích cộng thêm.</span>
                        </li>
                        <li class="rent-car-term-list-item">
                            <div class="img-header" style="font-size: 32px; display: inline-block">
                                <img alt="" class="img-content" src="{{asset('assets/web/images/web/icon/icons8-average-price-100.png')}}" width="32"
                                />
                            </div>
                            <span>Thanh toán linh hoạt dễ dàng</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div  class="service-bg">
                    <img src="{{asset('assets/web/images/web/main/Picture-home1.png')}}" alt="">
                </div>
            </div>
        </div>


        <div class="cont_tit_wrap">
            <h5 class="esg-tit1">DỊCH VỤ CỦA CHÚNG TÔI </h5>
            <span class="cp_under_line"></span>
            <p class="esg-tit2">Chúng tôi tạo nên khác biệt bằng việc luôn cam kết mang đến những trải nghiệm hành trình tuyệt vời.</p>
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
                <div class="mt-5 mb-5">
                    <div class="header_service_tab">
                        <h4>
                            <i class='bx bx-car' ></i> <span style="font-size: 26px; text-transform: uppercase">Xe con</span>
                        </h4>
                        <a href="{{route('car')}}" class="hvr-icon-wobble-horizontal hvr-float-shadow">
                            Xem tất cả <i class='bx bx-right-arrow-alt hvr-icon'></i>
                        </a>
                    </div>

                    <hr>
                </div>

                <div class="container-fluid">
                    <div class="_container-slider swiper" data-swiper-autoplay="2000">
                        <div class="slide-container">
                            <div class="card-wrapper swiper-wrapper" >
{{--                                @dd($long_time)--}}
                                @foreach($rental_car as $item)
                                    @if($item->type === 1 && $item->status === 1)
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
<!--                        <div class="swiper-button-next swiper-navBtn"></div>
                        <div class="swiper-button-prev swiper-navBtn"></div>-->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <!--======-->
                <div class="mt-5 mb-5">
                    <div class="header_service_tab">
                        <h4> <i class='bx bx-bus-school' ></i> <span style="font-size: 26px; text-transform: uppercase">Xe Bus</span> </h4>
                        <a href="{{route('bus')}}" class="hvr-icon-wobble-horizontal hvr-float-shadow">
                            Xem tất cả <i class='bx bx-right-arrow-alt hvr-icon'></i>
                        </a>
                    </div>
                    <hr>
                </div>
                <div class="container-fluid">

                    <div class="_container-slider swiper" data-swiper-autoplay="3000">
                        <div class="slide-container_bus">
                            <div class="card-wrapper swiper-wrapper" data-swiper-autoplay="2000">
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
                        <!--<div class="swiper-button-next swiper-navBtn"></div>
                        <div class="swiper-button-prev swiper-navBtn"></div>-->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </div>
            <!-- End Component car one  -->
            <!--  Component car two  -->
            <div class="mySlides">
                <div class="mt-5 mb-5">
                    <div class="header_service_tab">
                        <h4> <i class='bx bx-car' ></i> <span style="font-size: 26px; text-transform: uppercase">Xe con</span> </h4>                            <a href="#" class="hvr-icon-wobble-horizontal hvr-float-shadow">
                            Xem tất cả <i class='bx bx-right-arrow-alt hvr-icon'></i>
                        </a>
                    </div>
                    <hr>
                </div>
                <div class="container-fluid">
                    <div class="_container-slider swiper" data-swiper-autoplay="2000">
                        <div class="slide-container_box_2">
                            <div class="card-wrapper swiper-wrapper" data-swiper-autoplay="2000">
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

                <div class="mt-5 mb-5">
                    <div class="mt-5 mb-5">
                        <div class="header_service_tab">
                            <h4> <i class='bx bx-car' ></i> <span style="font-size: 26px; text-transform: uppercase">Xe bus</span> </h4>                            <a href="#" class="hvr-icon-wobble-horizontal hvr-float-shadow">
                                Xem tất cả <i class='bx bx-right-arrow-alt hvr-icon'></i>
                            </a>
                        </div>

                        <hr>
                    </div>
                </div>
                <div class="container-fluid">

                    <div class="_container-slider swiper" data-swiper-autoplay="3000">
                        <div class="slide-container_bus_box2">
                            <div class="card-wrapper swiper-wrapper" data-swiper-autoplay="2000">
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

    </section>
@endsection