@extends('layout.web.master')
@section('content')
    <main id="container">

        <!-- Sub Visual -->
        <section id="sub_visual" class="sub_visual esg">
            <div class="pg_tit_wrap">

                <!-- Path -->
                <div class="path">
                    <a href="index.html">
                        <span class="home"></span></a>
                    <a href="about_ldcc_rental.html"><span></span></a>
                    <!--                    <span>Thuê thiết bị</span>-->
                </div>
                <!--// Path -->
            </div>
        </section>
        <!--// Sub Visual -->

        <!-- Sub Content -->
        <section class="search-result-list-detail template-2">
            <div class="container">
                @foreach($post as $item)
                <div class="row">
                        <div class="col-md-9">
                            <div class="mb-15">
                                <section class="apply-now-banner  ">
                                    <div class="apply-now-content">
                                        <div class="job-desc">
                                            <h1 class="title">{{$item->title}}</h1>
                                            <a class="employer job-company-name">
                                                {{$item->recruitment_office_name}}
                                            </a>
                                        </div>

                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="col-md-3 m-auto">
                            <div class="apply-now-btn " data-toggle=modal data-target=#Modal_Recruit>
                                <a class="btn-gradient btnApplyClick">
                                    ứng tuyển ngay
                                </a>
                            </div>
                        </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-7 col-custom-xxl-9">
                        <div class="tabss">
                            <nav class="job-result-nav">
                                <ul class="tabs-toggle">
                                    <li id="tabs-job-detail"><a data-href="#tab-1">Thông tin công việc</a></li>
                                </ul>
                            </nav>
                            <div class="tab-content" id="tab-1">
                                <section class="job-detail-content">
                                    <div class="bg-blue">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-6 item-blue">
                                                <div class="detail-box">
                                                    <div class="map">
                                                        <strong><em class="mdi mdi-map-marker"></em>Địa chỉ</strong>
                                                        <p>
                                                            <a>{{$item->location}}</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6 item-blue">
                                                <div class="detail-box has-background">
                                                    <ul>
                                                        <li> <strong><em class="mdi mdi-update"> </em>Bắt đầu</strong>
                                                            <p>{{$item->start_date}}</p>
                                                        </li>
                                                        <li> <strong> <em class="mdi mdi-briefcase"></em>Trình độ công việc</strong>
                                                            <p> <a>
                                                                    {{$item->author_name}}
                                                                </a>
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6 item-blue">
                                                <div class="detail-box has-background">
                                                    <ul>
                                                        <li>
                                                            <strong><i class="fa fa-briefcase"> </i> Kinh nghiệm</strong>
                                                            <p>
                                                                {{$item->levers_name}}
                                                            </p>
                                                        </li>

                                                        <li><strong><i class="mdi mdi-calendar-check"></i>Hạn ứng tuyển</strong>
                                                            <p>{{$item->end_date}}</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="detail-row reset-bullet">
                                        <h2 class="detail-title" style="font-size: 24px">PHÚC LỢI</h2>

                                        <li><i class='bx bx-money-withdraw'></i> Tháng lương thứ 13</li>
                                        <li><i class='bx bx-donate-heart'></i> Chăm sóc sức khỏe 24h</li>
                                        <li><i class='bx bxs-plane-alt'></i> Du lịch hàng năm</li>

                                    </div>
                                    <div class="detail-row reset-bullet">
                                        <h2 class="detail-title">MÔ TẢ CÔNG VIỆC</h2>
                                        <p>
                                            {{$item->jpb_description}}
                                        </p>

                                    </div>
                                    <div class="detail-row" reset-bullet>
                                        <h2 class="detail-title">YÊU CẦU CÔNG VIỆC</h2>
                                        <p>
                                            + Language: Good English skills (reading, writing) <br>
                                            + Skill:<br>
                                            - Graduated from college/university majoring in IT or related majors <br>
                                            - 3+ years of work experience on Backend systems or Java applications to serve large-scale and high traffic projects.<br>
                                            - Experience in Java developing language and Java Spring-Framework<br>
                                            - Experience in constructing & operating storage in Large Data Distributed Environments (Hadoop, HBase, Redis,<br>
                                            - MongoDB, Mysql etc)<br>
                                            - Deep knowledge and experience in applying Design Patterns<br>
                                            - Understanding & experience in Data structure, Algorithm, Distributed Service<br>
                                            - Experience with RESTful, GIT<br>
                                            - Knowledge in System Architecture and MSA<br>
                                            - Proficient in Optimization and System Analyzer<br>
                                            - Understand the standards of the process of building and deploying a software<br>
                                            - Highly responsible in work, proactive, self-organized and good teamwork spirit<br>
                                            - Time management skills<br>
                                            + Acknowledgments: Experience in the following areas is an advantage: DEVOPS, CI/CD, Docker.
                                        </p>

                                    </div>
                                    <div class="detail-row">
                                        <h3 class="detail-title">ĐỊA CHỈ CÔNG TY</h3>
                                        <div class="content_fck ">
                                            <span><i class='bx bxs-map'></i> Floor 31, LOTTE Center, 54 Lieu Giai, Ba Dinh District, Hanoi</span>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="apply-now-right" data-toggle=modal data-target=#Modal_Recruit>
                                        <div class="apply-now-btn  ">
                                            <a class="btn-gradient ">
                                                ỨNG TUYỂN NGAY
                                            </a>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-custom-xxl-3 p-4">
                        <div class="side-wrapper">
                            <div class="banner-ad">
                                <script type='text/javascript'>OA_show(854);</script>
                            </div>
                            <div class="similar-jobs">
                                <p>Công việc khác</p>
                            </div>
                        </div>
                        <div class="widget posts-widget">
                            <div class="wgt-content">
                                <ul class="posts">
                                    <li>
                                        <div class="wgt-post-item">
                                            <div class="thumb">
                                                <a href="#"><img src="assets/images/web/common/top_logo_en.png" width="80" height="58" alt=""></a>
                                            </div>
                                            <div class="detail">
                                                <h4 class="post-name"><a href="#">Chuyên viên sale</a></h4>
                                                <p class="post-archive">22 Jan 2022</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wgt-post-item">
                                            <div class="thumb">
                                                <a href="#"><img src="assets/images/web/common/top_logo_en.png" width="80" height="58" alt=""></a>
                                            </div>
                                            <div class="detail">
                                                <h4 class="post-name">
                                                    <a href="#">Quản lí cấp cao</a>
                                                </h4>
                                                <p class="post-archive">06 Apr 2022</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wgt-post-item">
                                            <div class="thumb">
                                                <a href="#"><img src="assets/images/web/common/top_logo_en.png" width="80" height="58" alt=""></a>
                                            </div>
                                            <div class="detail">
                                                <h4 class="post-name"><a href="#">Công việc 3</a></h4>
                                                <p class="post-archive">12 May 2022</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <div class="widget posts-widget">
                            <div class="similar-jobs">
                                <p>Hoạt động công ty</p>
                            </div>
                            <div class="wgt-content">
                                <ul class="posts">
                                    <li>
                                        <div class="wgt-post-item">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="assets/images/web/main/event2.jpg" width="80" height="58" alt="">
                                                </a>
                                            </div>
                                            <div class="detail">
                                                <h4 class="post-name"><a href="#">Tin tức liên quan 1</a></h4>
                                                <p class="post-archive">22 Jan 2022</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wgt-post-item">
                                            <div class="thumb">
                                                <a href="#"><img src="assets/images/web/main/event3.jpg" width="80" height="58" alt=""></a>
                                            </div>
                                            <div class="detail">
                                                <h4 class="post-name">
                                                    <a href="#">Tin tức liên quan 2</a>
                                                </h4>
                                                <p class="post-archive">06 Apr 2022</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wgt-post-item">
                                            <div class="thumb">
                                                <a href="#"><img src="assets/images/web/main/event1.jpg" width="80" height="58" alt=""></a>
                                            </div>
                                            <div class="detail">
                                                <h4 class="post-name"><a href="#">Tin tức liên quan 3</a></h4>
                                                <p class="post-archive">12 May 2022</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

    </main>
@endsection