@extends('layout.web.master');
@section('content')
    <section id="sub_visual" class="sub_visual esg">
        <div class="pg_tit_wrap">

            <!-- Path -->
            <div class="path">
                <a href="index.html">
                    <span class="home">Trang chủ</span></a>
                <a href="about_ldcc_rental.html"><span>Trung tâm khách hàng</span></a>
                <!--                    <span>Thuê thiết bị</span>-->
            </div>
            <!--// Path -->

            <h3 class="pg_tit">Trung tâm khách hàng </h3>
            <a href="" class="next_menu">Tuyển dụng</a>
        </div>
    </section>
    <section id="content" class="content">
        <div class="cont_tit_wrap">
            <h5 class="esg-tit1">VỀ DỊCH VỤ </h5>
            <span class="cp_under_line"></span>
            <p class="esg-tit2">
                Chúng tôi cung cấp liên tục những thiết bị mới nhất được ưa chuộng, giảm thiểu các vấn đề về quản lý tài sản do phải xử lý các chi phí tổn thất từ chi phí cho thuê
            </p>
        </div>


        <section class="faq-section">
            <div class="container">
                <div class="row">
                    <!-- ***** FAQ Start ***** -->
                    <div class="col-md-6 background-faq">

                    </div>
                    <div class="col-md-6">
                        <div class="faq-title text-center pb-3">
                            <h2>Câu hỏi thường gặp</h2>
                        </div>
                        <div class="faq" id="accordion">
                            <div class="card">
                                <div class="card-header" id="faqHeading-1">
                                    <div class="mb-0 item-faq">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                            <span class="badge">1</span>
                                            Tôi cần có gì để thuê một chiếc xe?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                    <div class="card-body">
                                        <span>Để đăng ký thuê xe, tất cả bạn cần là một thẻ tín dụng hoặc thẻ ghi nợ. Khi bạn nhận xe, bạn sẽ cần:</span>
                                        <ul>
                                            <li>Phiếu đăng ký/Phiếu đăng ký điện tử của bạn để chứng minh bạn đã trả tiền thuê xe.</li>
                                            <li>Thẻ tín dụng/thẻ ghi nợ của người lái xe chính, trong đó có đủ tiền để đặt cọc cho xe.</li>
                                            <li>Tất cả người lái đều có bằng lái xe đầy đủ, hợp lệ và đã được cấp ít nhất 12 tháng (thông thường là 24 tháng).</li>
                                            <li>Hộ chiếu và bất kỳ giấy tờ tùy thân nào mà công ty cho thuê xe cần xem.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-2">
                                    <div class="mb-0 item-faq">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                            <span class="badge">2</span>
                                            Tôi cần đủ bao nhiêu tuổi để có thể thuê xe?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Đối với hầu hết các công ty cho thuê xe, yêu cầu về tuổi là từ 21 đến 70 tuổi. Nếu bạn dưới 25 tuổi hoặc trên 70 tuổi, bạn có thể phải trả phí bổ sung.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-3">
                                    <div class="mb-0 item-faq">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                            <span class="badge">3</span> Tôi có thể đăng ký thuê xe cho người khác không?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Có, với điều kiện là họ đáp ứng được những yêu cầu này. Chỉ cần điền các chi tiết của họ khi bạn thực hiện đăng ký.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-4">
                                    <div class="mb-0 item-faq">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                            <span class="badge">4</span> Tôi tìm thấy giao dịch thuê xe rẻ nhất như thế nào?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Chúng tôi làm việc với tất cả các nhãn hiệu cho thuê xe quốc tế lớn để đem lại cho bạn nhiều lựa chọn khác nhau với các mức giá tốt nhất. Đó là cách mà chúng tôi có thể tìm cho bạn các giao dịch thuê xe rẻ tại nhiều địa điểm trên toàn thế giới.
                                            Để so sánh giá cả và tìm cho bạn chiếc xe lý tưởng với mức giá không thể thấp hơn, hãy sử dụng mẫu tìm kiếm của chúng tôi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-5">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                            <span class="badge">5</span> Tôi cần xem xét những gì khi lựa chọn một chiếc xe?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                    <div class="card-body">
                                        <ul>
                                            <li><b>Khoảng trống:</b> Bạn sẽ tận hưởng việc thuê xe hơn rất nhiều nếu bạn chọn một chiếc xe có nhiều chỗ ngồi và ngăn để hành lý.</li>
                                            <li><b>Chính sách xăng dầu:</b> Bạn không định lái xe nhiều? Chính sách "Trả xe bình xăng nguyên trạng" có thể giúp bạn tiết kiệm nhiều hơn.</li>
                                            <li><b>Địa điểm:</b> Không gì thuận tiện hơn là lấy xe tại sân bay, nhưng lấy xe ngoài sân bay có xe buýt trung chuyển có thể rẻ hơn nhiều.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-6">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                            <span class="badge">6</span> Tất cả phí có được bao gồm trong giá thuê?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>
                                            Đại đa số các giá thuê xe bao gồm bảo hiểm chống trộm cắp, bảo hiểm hư hại do va chạm (CDW), thuế địa phương, phụ phí sân bay và bất kỳ loại phí đường bộ nào. Bạn sẽ thanh toán cho bất kỳ ‘dịch vụ bổ sung’ nào khi bạn nhận xe, cùng với bất kỳ lái xe trẻ tuổi, lái xe bổ sung nào hay phí một chiều, nhưng chúng tôi sẽ giải thích bất kỳ loại chi phí bổ sung nào trước khi bạn đăng ký thuê xe (và mang theo ghế trẻ em hoặc thiết bị GPS riêng của mình có thể là cách đơn giản để giảm chi phí). Để biết thêm chi tiết về những thứ được bao gồm, hãy kiểm tra các điều khoản và điều kiện của bất kỳ loại xe nào mà bạn đang xem.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="container">
            <div class="faq-title text-center">
                <h2>Thông tin liên hệ</h2>
                <p class="esg-tit2 mt-3">Hãy cung cấp thông tin của bạn cho chúng tôi để được hỗ trợ nhanh nhất.</p>
            </div>
            <div class="row">
                <!--Contact info-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-info-container sm-margin-top-27px xs-margin-bottom-60px xs-margin-top-60px">
                        <div class="location_rental">
                            <div class="location-item">
                                <p class="m-0"><b><i class='bx bx-map'></i> Hà Nội</b></p>
                                <span>
                                        Tầng 1, 2, Tòa nhà The Sun, đường Mễ Trì, Phường Mễ Trì, Quận Nam Từ Liêm, Hà Nội, Việt Nam
                                    </span>
                            </div>
                            <br>
                            <div class="location-item">
                                <p class="m-0"><b><i class='bx bx-map'></i> Đà Nẵng</b></p>
                                <span>
                                        Phòng A, Tầng 6, Tòa nhà văn phòng Indochina Riverside, 74 Bạch Đằng, Phường Hải Châu 1, Quận Hải Châu, Thành phố Đà Nẵng, Việt Nam
                                    </span>
                            </div>
                            <br>
                            <div class="location-item">
                                <p class="m-0"><b><i class='bx bx-map'></i> Hồ Chí Minh</b></p>
                                <span>
                                        Tầng 7, Tòa nhà Paragon, Số 03, Đường Nguyễn Lương Bằng, Phường Tân Phú, Quận 7 Thành phố Hồ Chí Minh, Việt Nam
                                    </span>
                            </div>
                        </div>
                        <ul class="addr-info">
                            <li>
                            </li>
                            <li>
                                <div class="if-item">
                                    <b class="tie">Điện thoại:</b>
                                    <p class="dsc">(800) 123 456789</p>
                                </div>
                            </li>
                            <li>
                                <div class="if-item">
                                    <b class="tie">Email:</b>
                                    <p class="dsc">support@lotterental.vn</p>
                                </div>
                            </li>
                        </ul>
                        <div class="inline">
                            <ul class="d-flex ">
                                <li>
                                    <a href="#" id="kakao" class="socail-btn">
                                        <img src="{{asset('assets/web/images/web/icon/icons8-kakaotalk-48.png')}}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" id="facebook" class="socail-btn">
                                        <img src="{{asset('assets/web/images/web/icon/icons8-zalo-48.png')}}" alt="">                                        </a>
                                </li>
                                <li>
                                    <a href="#" id="zalo" class="socail-btn">
                                        <img src="{{asset('assets/web/images/web/icon/icons8-facebook-48.png')}}" alt="">                                        </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <!--Contact form-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-form-container">

                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif

                        <form action="" name="frm-contact" method="post" >
                            @csrf
                            <p class="form-row">
                                <input type="text" name="name" value="" placeholder="Nhập tên" class="txt-input">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </p>
                            <p class="form-row">
                                <input type="email" name="email" value="" placeholder="Địa chỉ email" class="txt-input">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </p>
                            <p class="form-row">
                                <input type="tel" name="phone" value="" placeholder="Số điện thoại" class="txt-input">
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="input_popup_select-custorm">
                                        <option>Chọn địa điểm</option>
                                        <option value="Hà Nội">Hà Nội</option>
                                        <option>Đà Nẵng </option>
                                        <option>Hồ Chí Minh </option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="input_popup_select-custorm" id="date__selector">
                                        <option value="default_time" >Chọn dịch vụ</option>
                                        <option value="long_time">Thuê xe dài hạn </option>
                                        <option value="short_time">Thuê xe ngắn hạn </option>
                                        <option >Thuê thiết bị </option>
                                        <option>Mua - Bán xe </option>
                                    </select>
                                </div>

                            </div>

                            <div id="short_time" class="colors short_time " style="display: none">
                                <p>Thời gian mong muốn</p>
                                <div class="row">
                                    <div class="col-md-6 input_time">
                                        <input name="" type="datetime-local">
                                    </div>
                                    <div class="col-md-6 input_time">
                                        <input name="" type="datetime-local">
                                    </div>
                                </div>

                            </div>

                            <p class="form-row">
                                <textarea name="mes" id="mes-1" cols="30" rows="9" placeholder="Mô tả yêu cầu"></textarea>
                            </p>
                            <p style="font-size: 13px"><i>Bằng việc ấn nút <b style="color: #E60013">"Gửi"</b> bạn đã đồng ý cho Lotte Rental thu thập thông tin cá nhân để phục vụ tư vấn </i></p>
                            <p class="form-row">
                                <button class="btn btn-submit" type="submit">Gửi liên hệ</button>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection