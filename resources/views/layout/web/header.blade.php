<header>
    <!-- Inner -->
    <div class="h_wrap">
        <a href="{{route('home')}}" class="top_logo">
            <h1>Lotte Rental</h1>
        </a>
        <div class="gnb">
            <nav>
                <ul>
                    <li> <a href="{{route('about')}}">{{__('lang.about')}}</a>
                        <ul>
                            <li><a href="{{route('about')}}">{{__('lang.Thông tin chung')}}</a></li>
                            <li><a href="{{route('history')}}">{{__('lang.Lịch sử phát triển')}}</a></li>
                            <li><a href="{{route('structure')}}">{{__('lang.Cơ cấu tổ chức')}}</a></li>
                            <li><a href="{{route('network')}}">{{__('lang.Mạng lưới')}} </a></li>

                        </ul>
                    </li>
                    <li> <a href="{{route('services')}}">{{__('lang.services')}}</a>
                        <ul>
                            <li><a href="{{route('services')}}">{{__('lang.Thuê xe trọn gói')}}</a></li>
                            <li><a href="{{route('equipment-rental')}}">{{__('lang.Thuê thiết bị')}}</a></li>
                            <li><a href="{{route('sales')}}">{{__('lang.Bán xe & thiết bị')}}</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('PR-center')}}">{{__('lang.pr_center')}}</a>
                    </li>
                    <li>
                        <a href="{{route('customer-center')}}">{{__('lang.customer_center')}}</a>
                    </li>
                    <li>
                        <a href="{{route('recruit')}}">{{__('lang.career')}}</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="language">
            <ul>
                <li class="on">
                    <a href="{{url('lang/vn')}}" title="">VN</a>
                </li>
                <li> <a href="{{url('lang/en')}}">EN</a> </li>
            </ul>
        </div>
    </div>
    <div class="bg_gnb"></div>
</header>