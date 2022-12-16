@extends('layout.web.master')
@section('content')
    <!-- Sub Visual -->
    <div id="sub_visual" class="sub_visual bg10">
        <div class="pg_tit_wrap">

            <!-- Path -->
            <div class="path">
                <a href="index.html">
                    <span class="home">Trang chủ</span></a>
                <a href="LPC01001.html"><span>Giới thiệu</span></a>
                <span>Cơ cấu tổ chức</span>
            </div>
            <!--// Path -->

            <h3 class="pg_tit">Cơ cấu tổ chức</h3>
            <a href="LPC02001.html" class="next_menu">Sản phẩm & dịch vụ</a>
        </div>
    </div>
    <!--// Sub Visual -->

    <!-- Sub Content -->
    <section class=" box-detail-number">
        <div class="container ">
            <div class="description-about-company col-md-12 pt-5">
                <p class="text-center">
                    Lotte Rental Việt Nam được thành lập vào năm 2007. Chúng tôi luôn cố gắng phấn đấu để nâng cao giá trị doanh nghiệp và tối ưu hóa lợi nhuận của khách hàng
                </p>
            </div>
            <div class="row " style="padding: 64px 0 96px">
                <div class="col-md-3">
                    <div class="d-flex flex-column justify-content-center box-count-number">
                        <div class="img-history">
                            <img src="{{asset('assets/web/images/web/icon/icons8-calendar-60.png')}}" alt="" >
                        </div>
                        <div class="year__rental">
                            <p>
                                <span>+ 15</span> năm
                            </p>
                        </div>
                        <div class="description__rental">
                            <p>
                                Thành lập từ năm 2007
                            </p>
                        </div>

                    </div>

                </div>
                <div class="col-md-3">
                    <div class="d-flex flex-column justify-content-center box-count-number">
                        <div class="img-history">
                            <img src="{{asset('assets/web/images/web/icon/manager-100.png')}}" alt="">
                        </div>
                        <div class="year__rental">
                            <p>
                                <span>+ 5</span> Quản lí Hàn
                            </p>
                        </div>
                        <div class="description__rental">
                            <p>
                                Nâng cao bộ máy quản lí
                            </p>
                        </div>

                    </div>

                </div>
                <div class="col-md-3">
                    <div class="d-flex flex-column justify-content-center box-count-number">
                        <div class="img-history">
                            <img src="{{asset('assets/web/images/web/icon/employee.png')}}" alt="">
                        </div>
                        <div class="year__rental">
                            <p>
                                <span>+ 30</span> Nhân viên văn phòng
                            </p>
                        </div>
                        <div class="description__rental">
                            <p>
                                Trẻ trung nhiệt huyết
                            </p>
                        </div>

                    </div>

                </div>
                <div class="col-md-3">
                    <div class="d-flex flex-column justify-content-center box-count-number">
                        <div class="img-history">
                            <img src="{{asset('assets/web/images/web/icon/icons8-engineer-60.png')}}" alt="">
                        </div>
                        <div class="year__rental">
                            <p>
                                <span>+ 1116</span> Lái xe & Quản lí
                            </p>
                        </div>
                        <div class="description__rental">
                            <p>
                                Đội ngũ đào tạo chuyên sâu
                            </p>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </section>

    <div class="bg__home"></div>
    <section class=" section-white ">
        <div class="header_feedback_about">
            <h2>PHÁP NHÂN TẠI VIỆT NAM</h2>
            <span class="cp_under_line"></span>
        </div>
        <div class=" row container m-auto">
            <div class="col-md-8">
                <div class="horizontal">
                    <div class="verticals twelve">
                        <section class="management-tree">
                            <div class="mgt-container">
                                <div class="mgt-wrapper">
                                    <div class="mgt-item">
                                        <div class="mgt-item-parent">
                                            <div class="person">
                                                <img src="{{asset('assets/web/images/web/main/matureman1-128.webp')}}" alt="">
                                                <p class="name">Tổng giám đốc</p>
                                            </div>
                                        </div>

                                        <div class="mgt-item-children">

                                            <div class="mgt-item-child">
                                                <div class="mgt-item">

                                                    <div class="mgt-item-parent">
                                                        <div class="person">
                                                            <img src="{{asset('assets/web/images/web/main/malecostume-128.webp')}}" alt="">
                                                            <p class="name">Auto</p>
                                                        </div>
                                                    </div>

                                                    <div class="mgt-item-children">
                                                        <div class="mgt-item-child">
                                                            <div class="person">
                                                                <img src="{{asset('assets/web/images/web/main/boy-128.webp')}}" alt="">
                                                                <p class="name">Chi nhánh Hà Nội</p>
                                                            </div>
                                                        </div>

                                                        <div class="mgt-item-child">
                                                            <div class="person">
                                                                <img src="{{asset('assets/web/images/web/main/boy-128.webp')}}" alt="">
                                                                <p class="name">Chi Nhánh Hồ Chí Minh</p>
                                                            </div>
                                                        </div>

                                                        <div class="mgt-item-child">
                                                            <div class="person">
                                                                <img src="{{asset('assets/web/images/web/main/boy-128.webp')}}" alt="">
                                                                <p class="name">Chi Nhánh Đà Nẵng</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="mgt-item-child">
                                                <div class="mgt-item">

                                                    <div class="mgt-item-parent">
                                                        <div class="person">
                                                            <img src="https://cdn1.iconfinder.com/data/icons/user-pictures/100/female1-128.png" alt="">
                                                            <p class="name">Thiết bị</p>
                                                        </div>
                                                    </div>

                                                    <div class="mgt-item-children">

                                                        <div class="mgt-item-child">
                                                            <div class="person">
                                                                <img src="{{asset('assets/web/images/web/main/boy-128.webp')}}" alt="">
                                                                <p class="name">Quản lí thiết bị phân tích tín hiệu</p>
                                                            </div>
                                                        </div>

                                                        <div class="mgt-item-child">
                                                            <div class="mgt-item">

                                                                <div class="mgt-item-parent">
                                                                    <div class="person">
                                                                        <img src="{{asset('assets/web/images/web/main/boy-128.webp')}}" alt="">
                                                                        <p class="name">Quản lí OA, thiết bị y tế</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="name__about">
                    <h2>Chi tiết pháp nhân</h2>
                    <p style="font-size: 15px">
                        Pháp nhân tại Việt Nam được chia thành kinh doanh ô tô và kinh doanh cho thuê thiết bị
                    </p>

                    <p class="font-weight-bold">
                        Auto
                    </p>
                    <ul class="list-pb">
                        <li>Phòng nhân sự/ Mua hàng</li>
                        <li>Phòng kế toán/ Bảo hiểm</li>
                        <li>Phòng kinh doanh</li>
                        <li>Phòng điều phối/ Thanh toán xe</li>
                        <li>Phòng quản lí xăng dầu sửa chữa</li>
                        <li>Phòng quản lí lái xe</li>
                    </ul>
                    <p class="font-weight-bold">Thiết bị</p>
                    <ul class="list-pb">
                        <li>
                            Mỗi phòng ban có team Kinh doanh, Thanh toán, Nhập khẩu <br>
                            (CV backoffice do CN HN kiêm nhiệm )
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
@endsection