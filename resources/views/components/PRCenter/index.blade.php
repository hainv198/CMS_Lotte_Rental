@extends('layout.web.master')
@section('content')
    <!-- Sub Visual -->
    <section id="sub_visual" class="sub_visual esg">
        <div class="pg_tit_wrap">

            <!-- Path -->
            <div class="path">
                <a href="index.html">
                    <span class="home">Trang chủ</span></a>
                <a href="about_ldcc_rental.html"><span>Trung tâm PR</span></a>
                <!--                    <span>Thuê thiết bị</span>-->
            </div>
            <!--// Path -->

            <h3 class="pg_tit">Trung tâm PR </h3>
            <a href="" class="next_menu">Trung tâm khách hàng</a>
        </div>
    </section>
    <!--// Sub Visual -->

    <!-- Sub Content -->
    <section id="content" class="content">
        <div class="page-contain about-us">

            <!-- Main content -->
            <div id="main-content" class="main-content">

                <div class="faq-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 background-career"></div>
                            <div class="col-md-6">
                                <div class="faq-title text-center pb-3">
                                    <h2>ESG (Environmental, Social, and Governance</h2>
                                </div>
                                <div class="career" id="accordion">
                                    <p>
                                        Chúng tôi luôn cố gắng tiếp thu các giá trị ESG bằng cách xem xét các tác động môi trường và xã hội
                                    </p>
                                    <p>
                                        Lotte Rental sẽ nỗ lực không ngừng để đáp ứng kỳ vọng của các bên liên quan bằng cách kết hợp quản lý ESG với tầm nhìn trở thành 'nhà lãnh đạo nền tảng sống dựa trên di động' để quản lý bền vững .
                                    </p>
                                    <p>
                                        Lotte Rental đặt mục tiêu trở thành công ty quản lý ESG hàng đầu tại Hàn Quốc bằng cách thiết lập, thực hiện và quản lý các nhiệm vụ chiến lược quản lý ESG nội bộ vượt xa các sáng kiến ​​và hướng dẫn toàn cầu của các cơ quan đánh giá lớn trong và ngoài nước .
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container blog-esg">
                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-center edg-left">
                            <img src="{{asset('assets/web/images/web/main/esg_icon01.jpg')}}" alt="">
                        </div>
                        <div class="col-md-10">
                            <div class="text-description">
                                <p class="item-description">
                                    <span style="color: #E60013">E</span>nvironment Môi trường
                                </p>
                                <p class="mb-0">
                                    Lotte Rental nhận ra rằng quản lý thân thiện với môi trường là yếu tố thiết yếu để tạo ra cuộc sống tốt đẹp hơn cho khách hàng và trung thành hoàn thành vai trò là một công ty di động bằng cách mở rộng các phương tiện không gây ô nhiễm và tạo ra một hệ sinh thái lưu thông tài nguyên dựa trên chất thải của phương tiện.
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-center edg-left">
                            <img src="{{asset('assets/web/images/web/main/esg_icon02.jpg')}}" alt="">
                        </div>
                        <div class="col-md-10">
                            <div class="text-description">
                                <p class="item-description">
                                    <span style="color: #E60013">S</span>ocial Xã hội
                                </p>
                                <p class="mb-0">
                                    Lotte Rental cố gắng tạo ra một công ty có lợi cho các bên liên quan bên ngoài cũng như các bên liên quan bên trong (nhân viên), những người nhận ra và thực hành tầm quan trọng của sự thay đổi và thách thức, sự đồng cảm và hợp tác. Lotte Hire đang cải thiện công việc và văn hóa tổ chức, đào tạo, v.v. vì sự hài lòng của các bên liên quan nội bộ, đồng thời không ngừng suy nghĩ và nỗ lực hướng tới một tương lai bền vững cùng với các bên liên quan bên ngoài khác nhau như đối tác, cộng đồng địa phương, cổ đông và nhà đầu tư. áp dụng.
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-center edg-left">
                            <img src="{{asset('assets/web/images/web/main/esg_icon03.jpg')}}" alt="">
                        </div>
                        <div class="col-md-10">
                            <div class="text-description">
                                <p class="item-description">
                                    <span style="color: #E60013">G</span>overnance Quản trị
                                </p>
                                <p class="mb-0">
                                    Lotte Rental tăng cường quản lý ESG bằng cách thành lập Ủy ban ESG trong hội đồng quản trị. Dưới một cơ cấu quản trị hợp lý, chúng tôi đã thiết lập một hệ thống ra quyết định minh bạch bằng cách đảm bảo tính đa dạng, chuyên môn và tính độc lập của hội đồng quản trị. Ngoài ra, chúng tôi nhấn mạnh rằng quản lý tuân thủ và đạo đức là yếu tố chính cho sự phát triển bền vững của công ty và chúng tôi đang nỗ lực hết mình để giúp công ty đi đúng hướng.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=========== ============-->
                <div class="blog-posts background-fafafa sm-margin-top-33px sm-padding-top-75px sm-padding-bottom-80px xs-margin-top-30px xs-padding-top-30px xs-padding-bottom-50px">
                    <div class="container">
                        <div class="biolife-title-box">
                            <h5 class="esg-tit1">HOẠT ĐỘNG SỰ KIỆN </h5>
                            <span class="cp_under_line mt-2"></span>
                        </div>

                        <ul class="biolife-carousel nav-center xs-margin-top-34px nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 2}},{"breakpoint":768, "settings":{ "slidesToShow": 2}},{"breakpoint":600, "settings":{ "slidesToShow": 1}}]}'>
                            @foreach($new as $news)
                                @if($news->status === 1)
                                    <li>
                                        <div class="post-item effect-01 style-bottom-info layout-03">
                                            <div class="thumbnail">
                                                <a href="{{route('events',$news->slug)}}" class="link-to-post">
                                                    <img src="{{$news->file_path}}" width="370" height="270" alt="">
                                                </a>
                                                <div class="post-date">
                                                    <span class="date">{{$news->create_at}}</span>
                                                    <span class="month">dec</span>
                                                </div>
                                            </div>
                                            <div class="post-content">
                                                <p class="post-name">
                                                    <a href="{{route('events',$news->slug)}}" class="linktopost">
                                                        {{$news->title}}
                                                    </a>
                                                </p>
                                                <div class="post-meta">
                                                </div>
                                                <p class="excerpt">
                                                    {{$news ->description}}
                                                </p>
                                                <div class="group-buttons">
                                                    <a href="{{route('events',$news->slug)}}" class="btn readmore">Đọc thêm</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!--=========== ============-->


                <div class="blog-posts sm-margin-top-93px sm-padding-top-72px xs-padding-bottom-50px">
                    <div class="container">
                        <div class="biolife-title-box mt-3 mb-5">
                            <h5 class="esg-tit1">HOẠT ĐỘNG TRIỂN LÃM </h5>
                            <span class="cp_under_line mt-2"></span>
                        </div>
                        <ul class="biolife-carousel nav-center nav-none-on-mobile xs-margin-top-36px" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 2}},{"breakpoint":768, "settings":{ "slidesToShow": 2}},{"breakpoint":600, "settings":{ "slidesToShow": 1}}]}'>
                            @foreach($event as $events)
                                @if($events->status = 2)
                                    <li>
                                        <div class="post-item effect-01 style-bottom-info layout-02 ">
                                            <div class="thumbnail">
                                                <a target="_blank" href="{{$events->link}}" class="link-to-post">
                                                    <img src="{{$events->file_path}}" width="370" height="270" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <h4 class="post-name">
                                                    <a target="_blank" href="{{$events->link}}" class="linktopost">
                                                        {{$events->title}}
                                                    </a>
                                                </h4>
                                                <p class="excerpt">
                                                    {{$events->description}}
                                                </p>
                                                <div class="group-buttons">
                                                    <a target="_blank" href="{{$events->link}}" class="btn readmore">Đọc thêm</a>
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
        </div>
    </section>
@endsection