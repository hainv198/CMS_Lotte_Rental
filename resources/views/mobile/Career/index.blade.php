@extends('layout.mobile.master')
@section('content-mb')
    <!-- Sub Visual -->
    <div id="sub_visual" class="sub_visual bg02">
        <div class="visual">
            <img src="https://www.lotterental.com/homepage/resource/images/mob/n_common/visual_esg.png" alt="" style="margin-top: 55px;"/>
        </div>
        <!-- Page title -->
        <div class="pg_tit_wrap">
            <h3 class="pg_tit">Dịch vụ thuê xe</h3>
        </div>
        <!-- Page title -->
    </div>

    <section id="content" class="content">

        <section class="faq-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <div class="faq-title text-center pb-3">
                            <h2>Tuyển dụng</h2>
                        </div>
                        <div class="career" id="accordion">
                            <p>
                                Hãy tìm kiếm cơ hội nghề nghiệp tại Lotte Rental để khẳng định bản thân và giao lưu học hỏi tạo cho bản thân nền tảng kiến thức vững vàng trong môi trường làm việc chuyên nghiệp và uy tín.
                            </p>
                            <p>
                                Trong định hướng phát triển nhân sự,
                                Lotte Rental tập trung xây dựng chính sách thu hút nhân tài thông qua chính sách lương,
                                thưởng đặc biệt cạnh tranh kết hợp với các hoạt động đào tạo,
                                bồi dưỡng nhằm giữ chân CBNV lâu dài,
                                xây dựng phát triển đội ngũ quản lý kế thừa nhằm đáp ứng nhu cầu nhân sự cấp quản lý cho những năm tiếp theo cũng như thu hút nhân lực giỏi từ nhiều nguồn khác nhau về làm việc cho Công ty.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 background-career">

                    </div>
                </div>
            </div>
        </section>

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Lái xe</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Nhân viên văn phòng</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="container">

                    <br>
                    <!--===========-->
                    <div class="row">
                        <div  class="panel-collapse collapse cp_our_jobs_container in">
                            <div class="panel-body">
                                <div class="cp_our_jobs_listing" >
                                    <h3 style="border-color: #e50000">
                                        Cơ hội việc làm
                                    </h3>
                                    <div class="jobs_listing_block ">
                                        <div class="cp_our_job_item  show ">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-10 cp_Job_summary_info">
                                                    <h4>
                                                        <a href="Career_detail_lotte_rental_mobile.html" onclick="ga('send', 'event', 'VNWCompanyCulture', 'ViewJob', 'Lotte Data Communication Company Limited Vietnam-1559950');">
                                                            Lái xe hạng ...
                                                        </a>
                                                    </h4>
                                                    <ul>
                                                        <li><i class="fa fa-briefcase"></i>Experienced
                                                            (non-manager)</li>
                                                        <li><i class="fa fa-map-marker"></i>
                                                            Hà Nội, Đà Nẵng
                                                        </li>
                                                        <li><i class="fa fa-calendar-o"></i>23/08/2022</li>
                                                    </ul>
                                                </div>
                                                <div class="col-xs-12 col-sm-2 cp_job_view_detail">
                                                    <a href="Career_detail_lotte_rental_mobile.html" onclick="ga('send', 'event', 'VNWCompanyCulture', 'ViewJob', 'Lotte Data Communication Company Limited Vietnam-1559950');">
                                                        Chi tiết
                                                    </a>
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
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="container">

                    <br>
                    <!--===========-->
                    <div class="row">
                        <div id="jobsListing" class="panel-collapse collapse cp_our_jobs_container in">
                            <div class="panel-body">
                                <div class="cp_our_jobs_listing" id="ajax_cp_our_jobs_listing">
                                    <h3 style="border-color: #e50000">
                                        Cơ hội việc làm
                                    </h3>
                                    <div class="jobs_listing_block ">
                                        <div class="cp_our_job_item  show ">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-10 cp_Job_summary_info">
                                                    <h4>
                                                        <a href="lotte_rental_recruit-_detail.html" onclick="ga('send', 'event', 'VNWCompanyCulture', 'ViewJob', 'Lotte Data Communication Company Limited Vietnam-1559950');">
                                                            Chuyên viên Kinh doanh
                                                        </a>
                                                    </h4>
                                                    <ul>
                                                        <li><i class="fa fa-briefcase"></i>Experienced
                                                            (non-manager)</li>
                                                        <li><i class="fa fa-map-marker"></i>
                                                            Hà Nội, Đà Nẵng
                                                        </li>
                                                        <li><i class="fa fa-calendar-o"></i>23/08/2022</li>
                                                    </ul>
                                                </div>
                                                <div class="col-xs-12 col-sm-2 cp_job_view_detail">
                                                    <a href="lotte_rental_recruit-_detail.html" onclick="ga('send', 'event', 'VNWCompanyCulture', 'ViewJob', 'Lotte Data Communication Company Limited Vietnam-1559950');">
                                                        Chi tiết
                                                    </a>
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
@endsection