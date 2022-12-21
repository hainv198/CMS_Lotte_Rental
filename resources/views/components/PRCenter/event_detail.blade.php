@extends('layout.web.master')
@section('content')
    <main id="container">

        <!-- Sub Visual -->
        <section id="sub_visual" class="sub_visual bg17">
            <div class="pg_tit_wrap">

                <!-- Path -->
                <div class="path">
                    <a href="{{route('home')}}">
                        <span class="home">Trang chủ</span></a>
                    <a><span>Tin tức sự kiện</span></a>
                    <!--                    <span>Thuê thiết bị</span>-->
                </div>
                <!--// Path -->

                <h3 class="pg_tit">Tin tức sự kiện </h3>
                <a href="" class="next_menu">Trung tâm khách hàng</a>
            </div>
        </section>
        <!--// Sub Visual -->

        <!-- Sub Content -->
        <div class="page-contain blog-page left-sidebar mb-3">
            <div class="container">
                <div class="row">
                    <div id="main-content" class="main-content col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        @foreach($detail as $item)
                            <div class="single-post-contain">
                                <div class="post-head">
                                    <div class="thumbnail">
                                        <figure>
                                            <img src="{{$item->file_path}}" width="870" height="635" alt="">
                                        </figure>
                                    </div>
                                    <h2 class="post-name">
                                        {{$item->title}}
                                    </h2>
                                    <p class="post-archive">
                                        <b class="post-cat">LOTTE RENTAL</b>
                                        <span class="post-date"> / {{$item->create_at}}</span>
                                    </p>
                                </div>

                                <div class="post-content">
                                    <p>
                                        {{$item->content}}
                                        <br>
                                    </p>
                                </div>

                                <div class="post-foot">

                                    <div class="post-tags">
                                        <span class="tag-title">Danh mục</span>
                                        <ul class="tags">
                                            <li><a href="{{route('services')}}" class="tag-link">Thuê xe</a></li>
                                            <li><a href="{{route('equipment-rental')}}" class="tag-link">Thuê xe thiết bị</a></li>
                                            <li><a href="{{route('sales')}}" class="tag-link">Mua bán xe & thiết bị</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <!-- Sidebar -->
                    <aside id="sidebar" class="sidebar blog-sidebar col-lg-3 col-md-4 col-sm-12 col-xs-12">

                        <div class="biolife-mobile-panels">
                            <span class="biolife-current-panel-title">Sidebar</span>
                            <a class="biolife-close-btn" href="#" data-object="open-mobile-filter">&times;</a>
                        </div>

                        <div class="sidebar-contain">


                            <!--Categories Widget-->
                            <div class="widget biolife-filter">
                                <h4 class="wgt-title">Danh sách dịch vụ</h4>
                                <div class="wgt-content">
                                    <ul class="cat-list">
                                        <li class="cat-list-item">
                                            <a href="{{route('services')}}" class="cat-link">Thuê xe trọn trọn</a>
                                        </li>

                                        <li class="cat-list-item">
                                            <a href="{{route('equipment-rental')}}" class="cat-link">Thuê thiết bị</a>
                                        </li>
                                        <li class="cat-list-item">
                                            <a href="{{route('sales')}}" class="cat-link">Mua & bán xe, thiết bị</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!--Posts Widget-->
                            <div class="widget posts-widget">
                                <h4 class="wgt-title">Tin tức liên quan</h4>
                                <div class="wgt-content">
                                    <ul class="posts">
                                        @foreach($list as $item)
                                            @if($item->status === 1)
                                                <li>
                                                    <div class="wgt-post-item">
                                                        <div class="thumb">
                                                            <a href="#"><img src="{{$item->file_path}}" width="80" height="58" alt=""></a>
                                                        </div>
                                                        <div class="detail">
                                                            <h4 class="post-name"><a href="#">{{$item->title}}</a></h4>
                                                            <p class="post-archive">{{$item->create_at}}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>


        <div>
            <button class="button_popup_contact" id="myButton">
                <a id="prime" class="fab hvr-push" data-toggle="modal" data-target="#">
                    <i class='bx bx-envelope bx-tada' ></i>
                </a>
            </button>
        </div>
        <div id="template" style="display: none;">
            <div class="group_button_contact d-flex flex-column" style="gap: 10px">
                <a id="popup_button">
                    <img src="assets/images/web/main/img_contact.png" width="40" alt="">
                    <span> Kakaotalk</span>
                </a>
                <a>
                    <img src="assets/images/web/main/img_contact1.webp" width="40" alt="">
                    <span>Zalo</span>
                </a>
                <a>
                    <img src="assets/images/web/main/img_contact2.png" width="40" alt="">
                    <span>Facebook</span>
                </a>
                <a data-toggle="modal" data-target="#exampleModalCenter">
                    <img src="assets/images/web/main/img_contact4.webp" width="40" alt="">
                    <span>Email</span>
                </a>

            </div>
        </div>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered form_contact" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center" id="exampleModalLongTitle">Liên hệ với chúng tôi</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Tên liên hệ</label>
                                    <input type="email" class="input_popup" id="inputEmail4" placeholder="Nhập tên">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Số điện thoại</label>
                                    <input type="text" class="input_popup" id="inputPassword4" placeholder="Số điện thoại">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" class="input_popup" id="inputEmail" placeholder="Email">
                                </div>
                                <div class="form-group mb-2 p-0 col-md-6">
                                    <label for="inputState">Dịch vụ cần tư vấn</label>
                                    <select id="inputState" class="input_popup_select">
                                        <option >Chọn...</option>
                                        <option>Thuê xe dài hạn </option>
                                        <option>Thuê xe ngắn hạn </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Mô tả</label> <br>
                                <textarea class="text_description" rows="5"  placeholder="Nhập mô tả..."></textarea>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="" for="gridCheck">
                                        Đồng ý với việc thu thập thông tin cá nhân nhằm tư vấn dịch vụ
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer m-auto">
                        <button type="button" class="button_form_contact">Xác nhận</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection