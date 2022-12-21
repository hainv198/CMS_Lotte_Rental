@extends('layout.web.master')
@section('content')
    <div class="hero-section hero-background">
        <h1 class="page-title">Lotte Rental Car</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="{{route('home')}}" class="permal-link">Trang chủ</a></li>
                <li class="nav-item"><a href="{{route('services')}}" class="permal-link">Sản phẩm & dịch vụ</a></li>
                <li class="nav-item"><span class="current-page">Danh sách dịch vụ</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain category-page left-sidebar">
        <div class="container">
            <div class="row">
                <!-- Main content -->
                <aside id="sidebar" class="sidebar col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="biolife-mobile-panels">
                        <span class="biolife-current-panel-title">Sidebar</span>
                        <a class="biolife-close-btn" href="#" data-object="open-mobile-filter">&times;</a>
                    </div>
                    <div class="sidebar-contain">
                        <div class="widget biolife-filter">
                            <h4 class="wgt-title">Sản phẩm & dịch vụ</h4>
                            <div class="wgt-content">
                                <ul class="cat-list">
                                    <li class="cat-list-item"><a href="#" class="cat-link">Dịch vụ thuê xe</a></li>
                                    <li class="cat-list-item"><a href="#" class="cat-link">Thuê thiết bị</a></li>
                                    <li class="cat-list-item"><a href="#" class="cat-link">Bán xe & thiết bị</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget price-filter biolife-filter">
                            <h4 class="wgt-title">Khoảng giá</h4>
                            <div class="wgt-content">
                                <div class="frm-contain">
                                    <form action="#" name="price-filter" id="price-filter" method="get">
                                        <p class="f-item">
                                            <label for="pr-from">$</label>
                                            <input class="input-number" type="number" id="pr-from" value="" name="price-from">
                                        </p>
                                        <p class="f-item">
                                            <label for="pr-to">đến $</label>
                                            <input class="input-number" type="number" id="pr-to" value="" name="price-from">
                                        </p>
                                        <p class="f-item">
                                            <button class="btn-submit" type="submit">
                                                <i class='bx bx-search-alt'></i>
                                            </button>
                                        </p>
                                    </form>
                                </div>

                            </div>
                        </div>

                        <div class="widget biolife-filter">
                            <h4 class="wgt-title">Hãng xe</h4>
                            <div class="wgt-content">
                                <div class="check_box mt-3">
                                    <input type="checkbox" name="Kia" >
                                    <label for="">Kia</label>
                                    <br>
                                    <input type="checkbox" name="Kia" >
                                    <label for="">GM</label>
                                    <br>
                                    <input type="checkbox" name="Kia" >
                                    <label for="">Hyundai</label>
                                    <br>

                                </div>
                            </div>
                        </div>

<!--                        <div class="widget price-filter biolife-filter">
                            <h4 class="wgt-title">Năm sản xuất</h4>
                            <div class="wgt-content">
                                <div class="frm-contain">
                                    <form action="#" name="price-filter" id="" method="get">
                                        <p class="f-item">
                                            <select>
                                                <option>Chọn năm</option>
                                                <option>2012</option>
                                                <option>2014</option>
                                            </select>
                                        </p>

                                        <p class="f-item">
                                            <select>
                                                <option>Chọn năm</option>
                                                <option>2012</option>
                                                <option>2014</option>
                                            </select>
                                        </p>

                                    </form>
                                </div>

                            </div>
                        </div>-->
                    </div>

                </aside>

                <div id="main-content" class="main-content col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="product-category list-style">

                        <div id="top-functions-area" class="top-functions-area" >
                            <div class="flt-item to-left group-on-mobile">
                                <span class="flt-title">Tìm kiếm</span>
                                <a href="#" class="icon-for-mobile">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                                <div class="wrap-selectors">
                                    <form action="{{route('car')}}" name="frm-refine" method="get">
                                        <span class="title-for-mobile">Khoảng giá</span>
                                        <div data-title="Khoảng giá:" class="selector-item">
                                            <select name="price" class="selector" id="price">
                                                <option value="">Khoảng giá</option>
                                                <option value="1000000" name="price">> 1000000 </option>
                                                <option value="2000000" name="price"> > 2000000 </option>

                                            </select>
                                        </div>
                                        <div data-title="Hãng xe:" class="selector-item">
                                            <select name="car_base" class="selector">
                                                <option value="">Hãng xe</option>
                                                @foreach($rental_car as $item)
                                                    <option value="{{$item->car_base}}">{{$item->car_base}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div data-title="Số ghê:" class="selector-item">
                                            <select name="seats" class="selector">
                                                <option value="">Số ghế</option>
                                                @foreach($rental_car as $item)
                                                    <option value="{{$item->seats}}">{{$item->seats}} Chỗ</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div data-title="Khu vực:" class="selector-item">
                                            <select name="location" class="selector">
                                                <option value="">Khu vực</option>
                                                @foreach($rental_car as $item)
                                                    <option value="{{$item->location}}">{{$item->location}}</option>
                                                @endforeach
                                            </select>
                                        </div>
<!--                                        <div data-title="Loại dịch vụ:" class="selector-item">
                                            <select name="ability" class="selector">
                                                <option value="all">Dịch vụ</option>
                                                <option value="vl4">Thuê xe</option>
                                                <option value="vl2">Thuê thiết bị</option>
                                                <option value="vl3">Mua xe, thiết bị</option>
                                            </select>
                                        </div>-->
                                        <p class="btn-for-mobile"><button type="submit" class="btn-submit">Go</button></p>
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <ul class="products-list">
                                @if($rental_car)
                                    @foreach($rental_car as $item)
                                        <li class="product-item col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="contain-product pr-detail-layout">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="{{$item->file_path}}" alt="dd" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                    </div>
                                                    <div class="info">
                                                        <h4 class="product-title"><a href="#" class="pr-name">{{$item->name}}</a></h4>
                                                        <ul  class="text-left list-detail-info-car">
                                                            <li>
                                                                <span>{{$item->description}}</span>
                                                            </li>
                                                            <li>
                                                                <span><i class='bx bx-car'></i> {{$item->car_base}}</span>
                                                            </li>
                                                            <li>
                                                                <span><i class='bx bx-user' ></i> {{$item->seats}}</span>
                                                                <span><i class='bx bx-slider'></i> Thủ công</span>
                                                            </li>
                                                            <li>
                                                    <span>
                                                        <i class='bx bxs-map'></i>
                                                        @if($item->location === '')
                                                            Liên hệ
                                                        @endif
                                                        {{$item->location}}
                                                    </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="advance-info">
                                                        <ul class="list">
                                                            <li>Hủy xe miễn phí</li>
                                                            <li>Đăng kí trực tuyến</li>
                                                            <li>Thanh toán khi nhận hàng</li>
                                                            <li style="display: flex; gap: 10px">
                                                                <!--                                                    <span>
                                                                                                                        <img src="assets/images/web/main/vnpay-logo-inkythuatso-01-13-16-26-42.jpg" width="60" alt="">
                                                                                                                    </span>
                                                                                                                            <span class="d-flex flex-column justify-content-center">
                                                                                                                        <img src="assets/images/web/main/visa-and-mastercard-logos-logo-visa-png-logo-visa-mastercard-png-visa-logo-white-png-awesome-logos.png" width="60" alt="">
                                                                                                                    </span>-->
                                                            </li>
                                                        </ul>
                                                        <div class="buttons-price">
                                                            @if($item->price === '')
                                                                <span>Liên hệ báo giá</span>
                                                            @endif
                                                            @if($item->price)
                                                                <p>{{$item->price}} <sup>đ</sup>/tháng</p>
                                                                <a class="button-contact-detail" >Liên hệ tư vấn</a>
                                                            @endif
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>
                                    @endforeach
                                @else
                                    <div>
                                        <h2>No posts found</h2>
                                    </div>
                                @endif


                            </ul>
                        </div>

                        <div class="biolife-panigations-block d-flex justify-content-center">
                            {{$rental_car->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection