@extends('layout.web.master')
@section('content')
    <div id="sub_visual" class="sub_visual bg10">
        <div class="pg_tit_wrap">

            <!-- Path -->
            <div class="path">
                <a href="index.html">
                    <span class="home">Trang chủ</span></a>
                <a href="LPC01001.html"><span>Giới thiệu</span></a>
                <span>Về Lotte Rental</span>
            </div>
            <!--// Path -->

            <h3 class="pg_tit">Về Lotte Rental</h3>
            <a href="LPC02001.html" class="next_menu">Lịch sử phát triển</a>
        </div>
    </div>
    <div id="content" class="content">
        <div class="cont_tit_wrap wide">
            <h5 class="cont_tit_top">Create a Better Life, <span class="f_red">LOTTE rental</span></h5>

            <p class="cont_desc"><span style="color: #DA281C; font-weight: 500">LOTTE Rental</span>, dẫn đầu trong ngành công nghiệp cho thuê đưa ra một mô hình tiêu dùng mới với <br/>
                tiêu chí
                <i style="color: #DA281C; font-weight: 500">“Tạo cuộc sống tốt đẹp hơn cho khách hàng”</i>.<br/>
            </p>
            <p class="cont_desc">
                Hơn 30 năm kinh doanh với sức mạnh thương hiệu số 1 Hàn Quốc,<br/>
                cung cấp các dịch vụ tiêu dùng hợp lý thông qua mua hàng đơn giản, những trải nghiệm mới và các <br>
                <em> giải pháp cho các vấn đề liên quan đến việc sở hữu. Tại Việt Nam, Lotte rental hiện đang có 3 chi nhánh ở Hồ Chí Minh, Hà Nội, Đà Nẵng</em>
            </p>
        </div>

        <div class="area_cbl">
            <ul>

                <li class="create">

                    <strong>Tạo ra các dịch vụ</strong>
                    <span class=""> cho khách hàng, <br> từ cho thuê xe hơi đến các giải pháp <br> về vấn đề kinh doanh và điều này bao gồm
                <br>
                <strong> cung cấp giá trị cho việc sử dụng tổng hợp</strong>, chia sẻ
            </span>
                </li>
                <li class="better">
                    Công ty đặt mình vào vị trí <br> của khách hàng để cung cấp dịch vụ <br> không chỉ Nhanh hơn mà còn Thuận tiện hơn.
                </li>
                <li class="life">
                    Tạo ra một Phong cách sống Mới, <br> vượt ra ngoài ranh giới của dịch vụ  <br> thông thường.
                </li>
            </ul>
        </div>

        <div class="area_vision">
            <!--<div style="text-align:center;padding:50px 0 100px;">
              <img style="width:60%" src="assets/images/web/main/img_comInfo_en.jpg" alt="Mission, Vision, Core value">
            </div>-->
            <div class="vision_custom">
                <div class="list_vision">
                    <ul>
                        <li>
                            <button class="border-0">Mission</button>
                            <span class="list-item-mission">
                  Create Better Life
                </span>
                            <br>
                            <span class="mb-4">
                    우리는 고객님의 더 나은 삶을 창조 하기 위해 끊임없이
                </span>
                        </li>
                        <li>
                            <button class="border-0">Vision</button>
                            <span class="list-item-mission">
                  Future Mobility, Connects Our Life
                </span>
                            <br>
                            <span class="mb-5">
                  우리는 고객님의 더 나은 삶을 창조 하기 위해 끊임없이
                </span>
                        </li>
                        <li>
                            <button class="border-0">Core Value</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="image_vision">
                <div class="item_vision">
                    <div class="bg-image">
                        <img src="{{asset('assets/web/images/web/icon/icons8-mission-100.png')}}" alt="" width="80">
                    </div>
                    <p class="line_description1 m-0 p-2"></p>
                    <span class="text-center">Change & Challenge</span>
                </div>
                <div class="item_vision">
                    <div class="bg-image">
                        <img src="{{asset('assets/web/images/web/icon/icons8-trust-100.png')}}" alt="" width="80">
                    </div>
                    <p class="line_description2 m-0 p-2"></p>
                    <span>Empathy</span>
                </div>
                <div class="item_vision">
                    <div class="bg-image">
                        <img src="{{asset('assets/web/images/web/icon/icons8-handshake-100.png')}}" alt="" width="80">
                    </div>
                    <p class="line_description m-0 p-2"></p>
                    <span>Collaboration</span>
                </div>
            </div>
        </div>
    </div>
@endsection