@extends('layout.web.master')
@section('content')
    <!-- Sub Visual -->
    <section id="sub_visual" class="sub_visual bg03">
        <div class="pg_tit_wrap">

            <!-- Path -->
            <div class="path">
                <a href="{{route('home')}}">
                    <span class="home">Trang chủ</span></a>
                <a href="{{route('services')}}"><span>Sản phẩm & dịch vụ</span></a>
                <span>Thuê thiết bị</span>
            </div>
            <!--// Path -->

            <h3 class="pg_tit">Thuê thiết bị</h3>
            <a href="" class="next_menu">Dịch vụ khác</a>
        </div>
    </section>
    <!--// Sub Visual -->

    <!-- Sub Content -->
    <section id="content" class="content">
        <div class="special-slide">
            <div class="container">
                <ul class="biolife-carousel dots_ring_style" data-slick='{"arrows": false, "dots": true, "slidesMargin": 30, "slidesToShow": 1, "infinite": true, "speed": 800, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 1}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":20, "dots": false}},{"breakpoint":480, "settings":{ "slidesToShow": 1}}]}' >
                    @foreach($equipment_banner as $item)
                        @if($item->type === 1)
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
                                            <br>
                                            <b>
                                                Giá chỉ từ {{$item->price_pro}} <sup>đ</sup> / tháng
                                            </b>
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
            </div>
        </div>
    </section>


    <section class="content">
        <div class="cont_tit_wrap">
            <h5 class="esg-tit1">VỀ DỊCH VỤ </h5>
            <span class="cp_under_line"></span>
            <p class="esg-tit2">
                Thông qua các dịch vụ cho thuê, chúng tôi cung cấp giải pháp kinh doanh khả quan nhất để giúp thiết lập nên các cơ sở doanh nghiệp và cải tiến phòng làm việc của họ.                </p>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 d-flex flex-column justify-content-center">
                <div  class="service-bg" style="width: 100%">
                    <img src="{{asset('assets/web/images/web/main/thue-may-moc-thiet-bi.jpg')}}" alt="" width="570">
                </div>
            </div>
            <div  class="col-12 col-sm-6 pt-5 pb-4">
                <div class="p-4">
                    <div>
                        <h2>LOTTE Rental - THƯƠNG HIỆU UY TÍN TẠI HÀN QUỐC</h2>
                    </div>
                    <div>
                        <ul class="list-group-tao">
                            <li class="rent-car-term-list-item">
                                <div class="img-header" style="display: inline-block">
                                    <img alt="" class="img-content" src="{{asset('assets/web/images/web/icon/icons8-wrench-100.png')}}" width="35"/>
                                </div>
                                <p>
                                    <strong>Lắp đặt nhanh chóng</strong> <br>
                                    <span>
                                            Chúng tôi giao đồ, lắp đặt và bàn giao hoàn thiện đúng giờ.
                                        </span>
                                </p>
                            </li>
                            <li class="rent-car-term-list-item">
                                <div class="img-header" style="display: inline-block">
                                    <img alt="" class="img-content" src="{{asset('assets/web/images/web/icon/icons8-online-support-100.png')}}" width="35"/>
                                </div>
                                <p>
                                    <strong>Tư vấn nhiệt tình</strong> <br>
                                    <span>
                                            Nhân viên tư vấn nhiệt tình và đầy đủ với nhu cầu của bạn.
                                        </span>
                                </p>
                            </li>
                            <li class="rent-car-term-list-item">
                                <div class="img-header" style="display: inline-block">
                                    <img alt="" class="img-content" src="{{asset('assets/web/images/web/icon/icons8-checkmark-100.png')}}" width="35"/>
                                </div>
                                <p>
                                    <strong>Kỹ thuật lành nghề</strong> <br>
                                    <span>Chúng tôi làm hài lòng tất cả các khách hàng khó tính  và gắn bó lâu dài.</span>
                                </p>
                            </li>
                            <li class="rent-car-term-list-item">
                                <div class="img-header" style="display: inline-block">
                                    <img alt="" class="img-content" src="{{asset('assets/web/images/web/icon/icons8-average-price-100.png')}}" width="35"/>
                                </div>
                                <p>
                                    <strong>Thanh toán tiện lợi</strong> <br>
                                    <span>
                                            Chúng tôi giao đồ, lắp đặt và bàn giao hoàn thiện đúng giờ.
                                        </span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>


        <div class="cont_tit_wrap m-0 pt-3">
            <h5 class="esg-tit1">DỊCH VỤ CỦA CHÚNG TÔI </h5>
            <span class="cp_under_line"></span>
            <p class="esg-tit2">Chúng tôi tạo nên khác biệt bằng việc luôn cam kết mang đến những trải nghiệm hành trình tuyệt vời.</p>
        </div>


        <div class="container_tab mt-5">
            <div class="content_service">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                            Thiết bị văn phòng
                        </a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                            Máy phát tín hiệu
                        </a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
                            Thiết bị gia dụng
                        </a>
                        <a class="nav-item nav-link" id="nav-contact-tab_2" data-toggle="tab" href="#nav-contact-tyt" role="tab" aria-controls="nav-contact" aria-selected="false">
                            Thiết bị y tế
                        </a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="grid container-fluid p-0">
                            <div class="row">
                                @foreach($equipment_office as $office )
                                    @if($office->type === 2)
                                        <div class="col-md-3">
                                            <!--                                            <figure class="effect-lily">
                                                <img src="{{$office->file_path}}" alt="img12"/>
                                                <figcaption>
                                                    <div>
                                                        <h2>{{$office->name}}</h2>
                                                        <p>
                                                            <a href="">Liên hệ tư vấn </a>
                                                        </p>
                                                    </div>
                                                    &lt;!&ndash;<a href="#">View more</a>&ndash;&gt;
                                                </figcaption>
                                            </figure>-->
                                            <div class="product-slide">
                                                <div class="product">
                                                    <div class="product-header">
                                                        <div class="top-right">
                                                            <div class="product-feature-badge-item installment">
                                                                <span>todos </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-image">
                                                            <a>
                                                                <img class=" ls-is-cached lazyloaded" loading="lazy" width="180px" height="180px"
                                                                     src="{{$office->file_path}}">
                                                            </a>
                                                        </div>
                                                        <div class="tags-image">

                                                        </div>
                                                        <div class="frame">

                                                        </div>
                                                    </div>
                                                    <div class="product-body">
                                                        <div class="product-feature-badge"></div>
                                                        <div class="product-title">
                                                            <a>
                                                                {{$office->name}}
                                                            </a>
                                                        </div>
                                                        <div class="product-price">
                                                            <p class="final-price">{{$office->price}} đ</p>
                                                        </div>
                                                        <div class="compare-button justify-content-center" style="display: flex;">
                                                            <a style="display: flex;"
                                                               class="add-compare compare-button ty-btn__text ty-add-to-compare cm-ajax cm-ajax-full-render"
                                                               data-ca-target-id="compare,show_popup,comparison_list"
                                                               data-ca-external-click-id="80953" compare-id="80953"
                                                               rel="nofollow">
                                                                Liên hệ tư vấn
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-footer"></div>
                                                </div></div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="grid container-fluid p-0">
                            <div class="row">
                                @foreach($equipment_signal_generator as $item )
                                    @if($item->type === 3)
                                        <div class="col-md-3">
                                            <div class="product-slide">
                                                <div class="product">
                                                    <div class="product-header">
                                                        <div class="top-right">
                                                            <div class="product-feature-badge-item installment">
                                                                <span>todos </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-image">
                                                            <a>
                                                                <img class=" ls-is-cached lazyloaded" loading="lazy" width="180px" height="180px"
                                                                     src="{{$item->file_path}}">
                                                            </a>
                                                        </div>
                                                        <div class="tags-image">

                                                        </div>
                                                        <div class="frame">

                                                        </div>
                                                    </div>
                                                    <div class="product-body">
                                                        <div class="product-feature-badge"></div>
                                                        <div class="product-title">
                                                            <a>
                                                                {{$item->name}}
                                                            </a>
                                                        </div>
                                                        <div class="product-price">
                                                            <p class="final-price">{{$item->price}} đ</p>
                                                        </div>
                                                        <div class="compare-button justify-content-center" style="display: flex;">
                                                            <a style="display: flex;"
                                                               class="add-compare compare-button ty-btn__text ty-add-to-compare cm-ajax cm-ajax-full-render"
                                                               data-ca-target-id="compare,show_popup,comparison_list"
                                                               data-ca-external-click-id="80953" compare-id="80953"
                                                               rel="nofollow">
                                                                Liên hệ tư vấn
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-footer"></div>
                                                </div></div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="grid container-fluid p-0">
                            <div class="row">
                                @foreach($equipment_house as $item )
                                    @if($item->type === 4)
                                        <div class="col-md-3">
                                            <div class="product-slide">
                                                <div class="product">
                                                    <div class="product-header">
                                                        <div class="top-right">
                                                            <div class="product-feature-badge-item installment">
                                                                <span>todos </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-image">
                                                            <a>
                                                                <img class=" ls-is-cached lazyloaded" loading="lazy" width="180px" height="180px"
                                                                     src="{{$item->file_path}}">
                                                            </a>
                                                        </div>
                                                        <div class="tags-image">

                                                        </div>
                                                        <div class="frame">

                                                        </div>
                                                    </div>
                                                    <div class="product-body">
                                                        <div class="product-feature-badge"></div>
                                                        <div class="product-title">
                                                            <a>
                                                                {{$item->name}}
                                                            </a>
                                                        </div>
                                                        <div class="product-price">
                                                            <p class="final-price">{{$item->price}} đ</p>
                                                        </div>
                                                        <div class="compare-button justify-content-center" style="display: flex;">
                                                            <a style="display: flex;"
                                                               class="add-compare compare-button ty-btn__text ty-add-to-compare cm-ajax cm-ajax-full-render"
                                                               data-ca-target-id="compare,show_popup,comparison_list"
                                                               data-ca-external-click-id="80953" compare-id="80953"
                                                               rel="nofollow">
                                                                Liên hệ tư vấn
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-footer"></div>
                                                </div></div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact-tyt" role="tabpanel" aria-labelledby="nav-contact-tab_2">
                        <div class="grid container-fluid p-0">
                            <div class="row">
                                @foreach($equipment_medical as $item )
                                    @if($item->type === 5)
                                        <div class="col-md-3">
                                            <div class="product-slide">
                                                <div class="product">
                                                    <div class="product-header">
                                                        <div class="top-right">
                                                            <div class="product-feature-badge-item installment">
                                                                <span>todos </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-image">
                                                            <a>
                                                                <img class=" ls-is-cached lazyloaded" loading="lazy" width="180px" height="180px"
                                                                     src="{{$item->file_path}}">
                                                            </a>
                                                        </div>
                                                        <div class="tags-image">

                                                        </div>
                                                        <div class="frame">

                                                        </div>
                                                    </div>
                                                    <div class="product-body">
                                                        <div class="product-feature-badge"></div>
                                                        <div class="product-title">
                                                            <a>
                                                                {{$item->name}}
                                                            </a>
                                                        </div>
                                                        <div class="product-price">
                                                            <p class="final-price">{{$item->price}} đ</p>
                                                        </div>
                                                        <div class="compare-button justify-content-center" style="display: flex;">
                                                            <a style="display: flex;"
                                                               class="add-compare compare-button ty-btn__text ty-add-to-compare cm-ajax cm-ajax-full-render"
                                                               data-ca-target-id="compare,show_popup,comparison_list"
                                                               data-ca-external-click-id="80953" compare-id="80953"
                                                               rel="nofollow">
                                                                Liên hệ tư vấn
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-footer"></div>
                                                </div></div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
@endsection