@extends('layout.mobile.master')
@section('content-mb')
    <!-- Sub Visual -->
    <div id="sub_visual" class="sub_visual bg02">
        <div class="visual">
            <img src="{{asset('assets/web/resource/images/mob/company/sub_visual15.jpg')}}" alt="" style="margin-top: 55px;"/>
        </div>
        <div class="pg_tit_wrap">
            <h3 class="pg_tit">Cơ cấu tổ chức</h3>
        </div>
        <!-- Page title -->
    </div>
    <!--// Sub Visual -->

    <!-- Sub Content -->
    <section class=" box-detail-number">
        <div class="container ">
            <div class="description-about-company col-md-12 pt-5">
                <p class="text-center">
                    Lotte rental là thương hiệu số 1 Hàn Quốc. Được thành lập từ năm 1989. Chúng tôi luôn cố gắng phấn đấu để nâng cao giá trị doanh nghiệp và tối ưu hóa lợi nhuận của khách hàng
                </p>
            </div>
            <div class="row ">
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
    <section class=" container">
        <div class="header_feedback_about">
            <h2>CƠ CẤU TỔ CHỨC</h2>
            <span class="cp_under_line"></span>
        </div>
        <div class=" m-auto">
            <div class="col-sm-12 col-md-12 img_manager ">
                <div class="cont_tit_wrap m-0">
                    <div style="text-align:center;padding:15px 0">
                        <img src="{{asset('assets/web/images/web/main/about__company.png')}}" alt="Mission, Vision, Core value" style="width:100%;max-width:520px">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 mt-5">
                <div class="name__about">
                    <h2>Chi tiết pháp nhân</h2>
                    <p style="font-size: 13px">
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