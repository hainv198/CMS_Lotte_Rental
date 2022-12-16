@extends('layout.mobile.master')
@section('content-mb')
    <div id="sub_visual" class="sub_visual bg02">
        <div class="visual">
            <img src="{{asset('assets/web/resource/images/mob/company/sub_visual15.jpg')}}" alt=""
                 style="margin-top: 55px;"/>
        </div>
        <!-- Page title -->
        <div class="pg_tit_wrap">
            <h3 class="pg_tit">Thông tin chung</h3>
            <!-- Next menu -->
            <a href="#" class="next_menu">Next menu</a>
            <!--// Next menu -->
        </div>
        <!-- Page title -->
    </div>
    <!--// Sub Visual -->
    <div id="content" class="content">
        <div class="cont_tit_wrap">
            <h5 class="cont_tit">Create a Better Life,<br/>
                <span class="f_red">LOTTE rental</span>
            </h5>
            <p class="text-center"><span style="color: #DA281C; font-weight: 500">LOTTE Rental</span>, dẫn đầu trong
                ngành công nghiệp cho thuê đưa ra một mô hình tiêu dùng mới với <br>
                tiêu chí
                <i style="color: #DA281C; font-weight: 500">“Tạo cuộc sống tốt đẹp hơn cho khách hàng”</i>.<br>
            </p>
            <p class="text-center">
                Hơn 30 năm kinh doanh với sức mạnh thương hiệu số 1 Hàn Quốc,<br>
                cung cấp các dịch vụ tiêu dùng hợp lý thông qua mua hàng đơn giản, những trải nghiệm mới và các <br>
                <em> giải pháp cho các vấn đề liên quan đến việc sở hữu. Tại Việt Nam, Lotte rental hiện đang có 3 chi
                    nhánh ở Hồ Chí Minh, Hà Nội, Đà Nẵng</em>
            </p>
            <div class="img_list pd">
                <div class="item">
                    <p class="img">
                        <img src="{{asset('assets/web/resource/images/mob/company/create.png')}}" alt="create">
                    </p>
                    <h6 class="mt10">
                        Tạo ra các dịch vụ cho khách hàng,
                        từ cho thuê xe hơi đến các giải pháp
                        về vấn đề kinh doanh và điều này bao gồm
                        cung cấp giá trị cho việc sử dụng tổng hợp, chia sẻ
                    </h6>
                </div>
                <div class="item">
                    <p class="img">
                        <img src="{{asset('assets/web/resource/images/mob/company/better.png')}}" alt="better">
                    </p>
                    <h6 class="mt10">
                        Công ty đặt mình vào vị trí
                        của khách hàng để cung cấp dịch vụ
                        không chỉ Nhanh hơn mà còn Thuận tiện hơn.
                    </h6>
                </div>
                <div class="item">
                    <p class="img">
                        <img src="{{asset('assets/web/resource/images/mob/company/life.png')}}" alt="life">
                    </p>
                    <h6 class="mt10">
                        Tạo ra một Phong cách sống Mới,
                        vượt ra ngoài ranh giới của dịch vụ
                        thông thường.
                    </h6>
                </div>
            </div>
        </div>

        <!-- 190826 -->
        <div class="cont_tit_wrap">
            <h5 class="cont_tit">LOTTE rental’s Vision system</h5>
            <div style="text-align:center;padding:15px 0">
                <img src="{{asset('assets/web/resource/images/mob/company/img.png')}}" alt="Mission, Vision, Core value"
                     style="width:100%;max-width:400px">
            </div>
        </div>

    </div>
@endsection