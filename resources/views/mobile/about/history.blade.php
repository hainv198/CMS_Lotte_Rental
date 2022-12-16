@extends('layout.mobile.master')
@section('content-mb')
    <div id="sub_visual" class="sub_visual bg02">
        <div class="visual">
            <img src="{{asset('assets/web/resource/images/mob/company/sub_visual07.jpg')}}" alt="" style="margin-top: 55px;"/>
        </div>
        <!-- Page title -->
        <div class="pg_tit_wrap">
            <h3 class="pg_tit">Lịch sử phát triển</h3
        </div>
        <!-- Page title -->
    </div>

    <div id="content" class="content">
        <div class="cont_tit_wrap">
            <h5 class="cont_tit">Lotte Rental vẫn đang thay đổi vì cuộc sống sung túc của khách hàng .</h5>
            <div class="history_img tab1" style="display:block">
                <img src="{{asset('assets/web/resource/images/mob/index/img_history.jpg')}}" alt="" />
            </div>
            <div class="history_img tab2">
                <img src="{{asset('assets/web/resource/images/mob/index/img_history2.jpg')}}" alt="" />
            </div>
            <div class="history_img tab3">
                <img src="{{asset('assets/web/resource/images/mob/index/img_history3.jpg')}}" alt="" />
            </div>
            <div class="tab_section history">
                <ul class="tab_nav clear s3">
                    <li class="tab active">
                        <a id="tab1" aria-controls="panel1" href="#none">
                            Tương lai<br>
                            (2015 ~ Hiện tại)
                            <!--                    <strong>Tăng cường toàn cầu hóa và chuyển đổi số</strong>-->
                        </a>
                    </li>
                    <li class="tab">
                        <a id="tab2" aria-controls="panel2" href="#none">
                            Sự phát triển<br>
                            (2000~2014)
                            <!--                    <strong>Trở thành doanh nghiệp số 1 Hàn Quốc</strong>-->
                        </a>
                    </li>
                    <li class="tab">
                        <a id="tab3" aria-controls="panel3" href="#none">
                            Từ
                            (1986~1999)
                        </a>
                    </li>
                </ul>
                <div class="tab_contents">
                    <div id="panel1" class="panel mb-4" aria-labelledby="tab1">
                        <div class="history_list end">
                            <!-- 220907 -->
                            <div class="item clear">
                                <h6>2021</h6>
                                <ul>
                                    <li>
                                        <strong>Tháng 10</strong>
                                        <br>
                                        Ra mắt dịch vụ "LOTTE Rental" giải pháp cho thuê chỉ dành cho danh nghiệp
                                    </li>
                                    <li>
                                        <strong>Tháng 8</strong>
                                        <br>
                                        Được xuất hiện trên KOSPI
                                    </li>
                                </ul>
                            </div>

                            <div class="item clear">
                                <h6>2019</h6>
                                <ul>
                                    <li>
                                        <span>Tháng 4</span> <br>
                                        Ra mắt dịch vụ “Shin-cha-jang Direct” cho phép từ báo giá trực tuyến đến hợp đồng trực tiếp
                                    </li>
                                </ul>
                            </div>
                            <!-- // 220907 -->
                            <div class="item clear">
                                <h6>2018</h6>
                                <ul>
                                    <li>
                                        <strong>Tháng 4</strong><br>
                                        Mở phiên đấu giá tự động LOTTE, Nền tảng ô tô đã được sử dụng để xuất khẩu và bán trong nước
                                    </li>
                                </ul>
                            </div>
                            <div class="item clear">
                                <h6>2017</h6>
                                <ul>
                                    <li class="myomee">
                                        <strong>Tháng 8</strong>
                                        Ra mắt nền tảng cho thuê phong cách hàn quốc đầu tiên tại Hàn Quốc "MYOMEE"
                                    </li>
                                    <li>
                                        <strong>Mar</strong> <br>
                                        Ra mắt LOTTE Rent-a-car Thái Lan (Mở rộng hoạt động kinh doanh cho thuê xe hơi & cho thuê nói chung                        </li>
                                </ul>
                            </div>
                            <div class="item clear">
                                <h6>2016</h6>
                                <ul>
                                    <li>
                                        <strong>Tháng 9</strong> <br>
                                        Ra mắt ứng dụng bảo dưỡng xe “Auto Manager”
                                    </li>
                                    <li>
                                        <strong>Tháng 7</strong> <br>
                                        Đầu tiên được xếp hạng trong 3 xếp hạng về mức độ hài lòng của khách hàng hàng đầu tại Hàn Quốc (NCSI, KS-SQI, KCSI)                        </li>
                                    <li>
                                        <strong>Tháng 3</strong> <br>
                                        Trở thành xe cho thuê số 1 Hàn Quốc (thứ 6 trong số các thương hiệu xe cho thuê trên thế giới)
                                    </li>
                                </ul>
                            </div>
                            <div class="item clear">
                                <h6>2015</h6>
                                <ul>
                                    <li>
                                        <strong>Tháng 7</strong> <br>
                                        Dịch vụ Hàn Quốc Grand Aware Hall of nổi tiếng (3 năm liên tiếp kể từ đó)
                                    </li>
                                    <li>
                                        <strong>Tháng 6</strong> <br>
                                        Thay đổi Tên và Thương hiệu Công ty, Công ty TNHH LOTTE cho thuê và LOTTE cho thuê xe
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="panel2" class="panel mb-4" aria-labelledby="tab2">
                        <div class="history_list end">
                            <div class="item clear">
                                <h6>2014</h6>
                                <ul>
                                    <li>
                                        <strong>Tháng 12 </strong> <br>
                                        Công ty cho thuê ô tô đầu tiên đạt doanh thu vượt mốc 1 nghìn tỷ won
                                    </li>
                                    <li>
                                        <strong>Tháng 5</strong>
                                        Mở phiên đấu giá ô tô đã qua sử dụng 'KT cho thuê xe đấu giá tự động'
                                    </li>
                                </ul>
                            </div>
                            <div class="item clear">
                                <h6>2013</h6>
                                <ul>
                                    <li>
                                        <strong>Tháng 11</strong> <br>
                                        Mua lại cổ phần trong Green car và dịch vụ chia sẻ xe mở rộng
                                    </li>
                                    <li>
                                        <strong>Tháng 3</strong> <br>
                                        Foundation of Auto-care from Kumho cho thuê
                                    </li>
                                </ul>
                            </div>
                            <div class="item clear">
                                <h6>2012</h6>
                                <ul>
                                    <li>
                                        <strong>Tháng 4</strong> <br>
                                        Phát triển trong thị trường xe cho thuê dài hạn B2C
                                    </li>
                                </ul>
                            </div>
                            <div class="item clear">
                                <h6>2011</h6>
                                <ul>
                                    <li><strong>Tháng 12</strong> <br>
                                        Thành lập LOTTE Auto-lease
                                    </li>
                                </ul>
                            </div>
                            <div class="item clear">
                                <h6>2010</h6>
                                <ul>
                                    <li><strong>Tháng 6</strong><br>
                                        Mua bán và sáp nhập với Bộ phận cho thuê xe của Kumho Rent-a-Car
                                    </li>
                                </ul>
                            </div>
                            <div class="item clear">
                                <h6>2008</h6>
                                <ul>
                                    <li>
                                        <strong>Tháng 3</strong>
                                        LOTTE rent-a-car tại Vietnam, Hồ Chí Minh
                                    </li>
                                </ul>
                            </div>
                            <div class="item clear">
                                <h6>2005</h6>
                                <ul>
                                    <li>
                                        <strong>Tháng 10</strong> <br>
                                        Thành lập bộ phận cho thuê KT
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="panel3" class="panel mb-4" aria-labelledby="tab3">
                        <div class="history_list end start">
                            <div class="item clear">
                                <h6>1989</h6>
                                <ul>
                                    <li>
                                        <span>Tháng 6</span> <br>
                                        Ra mắt thiết bị văn phòng cho thuê xe
                                    </li>
                                </ul>
                            </div>
                            <div class="item clear">
                                <h6>1987</h6>
                                <ul>
                                    <li>
                                        <strong>Tháng 12</strong> <br>
                                        Ra mắt doanh nghiệp cho thuê thiết bị CNTT
                                    </li>
                                </ul>
                            </div>
                            <div class="item clear">
                                <h6>1986</h6>
                                <ul>
                                    <li>
                                        <strong>May</strong> <br>
                                        Thành lập Korea Informatics Telesis Inc.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection