@extends('layout.web.master')
@section('content')
    <!-- Sub Visual -->
    <section id="sub_visual" class="sub_visual bg09">
        <div class="pg_tit_wrap">

            <!-- Path -->
            <div class="path">
                <a href="index.html">
                    <span class="home">Trang chủ</span></a>
                <a href="about_ldcc_rental.html"><span>Giới thiệu</span></a>
                <span>Mạng lưới toàn cầu</span>
            </div>
            <!--// Path -->

            <h3 class="pg_tit">Mạng lưới toàn cầu</h3>
            <a href="" class="next_menu">Sản phẩm dịch vụ</a>
        </div>
    </section>
    <!--// Sub Visual -->

    <!-- Sub Content -->
    <div id="content" class="content">
        <div class="cont_tit_wrap">
            <h5 class="cont_tit">With No.1’s DNA, Global LOTTE rental<br> has gone beyond South Korea</h5>
        </div>

        <div class="map_area">
            <div class="map_view img"> <img src="{{asset('assets/web/images/web/company/map_oversea.jpg')}}" alt="overseas branch map" /></div>
            <div class="network_link">
                <a href="" class="btn_round bg_red" target="_blank" title="New window move">LOTTE rent-a-car Location</a>
            </div>
        </div>

        <div class="cont_tit_wrap">
            <h5 class="cont_tit">Trụ sở chính</h5>
        </div>

        <div class="container">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tại Hàn Quốc</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Tại nước ngoài</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="product-tab z-index-20">
                        <div class="container">
                            <div class="biolife-tab biolife-tab-contain sm-margin-top-34px">
                                <div class="tab-head tab-head__icon-top-layout icon-top-layout">
                                    <ul class="tabs md-margin-bottom-35-im xs-margin-bottom-40-im">
                                        <li class="tab-element active">
                                            <a href="#tab01_1st" class="tab-link">LOTTE rental</a>
                                        </li>
                                        <li class="tab-element" >
                                            <a href="#tab01_2nd" class="tab-link">
                                                LOTTE auto lease
                                            </a>
                                        </li>
                                        <li class="tab-element" >
                                            <a href="#tab01_3rd" class="tab-link">LOTTE auto care</a>
                                        </li>
                                        <li class="tab-element" >
                                            <a href="#tab01_4th" class="tab-link">Green car</a>
                                        </li>


                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div id="tab01_1st" class="tab-contain active">
                                        <div class="tab_conts">
                                            <div class="tbl_wrap tblw1180 addr">
                                                <div class="item">
                                                    <p class="d_tit">Seoul</p>
                                                    <table>
                                                        <caption class="blind">
                                                            A form with Address, Tel of seoul office
                                                        </caption>
                                                        <colgroup>
                                                            <col style="width:220px">
                                                            <col style="width:*">
                                                        </colgroup>
                                                        <tbody>
                                                        <tr class="first">
                                                            <th scope="row" >Address</th>
                                                            <td>3F, 6~10F, 15F kt tower, 422, Teheran-ro, Gangnam-gu, Seoul</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Tel.</th>
                                                            <td>1577-5100 / 1588-1230 </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="view_map map1">
                                                        <div id="map1" class="viewer">
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3165.111587282929!2d127.05065881558731!3d37.50528623539061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca411a4df5d01%3A0x15a8531c025748d1!2s422%20Teheran-ro%2C%20Gangnam-gu%2C%20Seoul%2C%20H%C3%A0n%20Qu%E1%BB%91c!5e0!3m2!1svi!2s!4v1669710264936!5m2!1svi!2s" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tbl_wrap tblw1180 addr">
                                                <div class="item">
                                                    <p class="d_tit">Anyang</p>
                                                    <table>
                                                        <caption class="blind">
                                                            A form width address, tel
                                                        </caption>
                                                        <colgroup>
                                                            <col style="width:220px">
                                                            <col style="width:*">
                                                        </colgroup>
                                                        <tbody>
                                                        <tr class="first">
                                                            <th scope="row" >Address</th>
                                                            <td>8F, Shinwonvision Tower, 88, Jeonpa-ro, Dongan-gu, Anyang-si, Gyeonggi-do</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Tel.</th>
                                                            <td>031-478-1300</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="view_map map2">
                                                        <div id="map2" class="viewer">
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3170.0182430495884!2d126.94029251558489!3d37.389400842009906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b60b21a5b472b%3A0x9a6dc44624e69b85!2s88%20Jeonpa-ro%2C%20Dongan-gu%2C%20Anyang%2C%20Gyeonggi-do%2C%20H%C3%A0n%20Qu%E1%BB%91c!5e0!3m2!1svi!2s!4v1669709818385!5m2!1svi!2s" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab01_2nd" class="tab-contain ">
                                        <div class="tab_conts">
                                            <div class="tbl_wrap tblw1180 addr">
                                                <div class="item">
                                                    <table>
                                                        <caption class="blind">
                                                            A form with Address, Tel of seoul office
                                                        </caption>
                                                        <colgroup>
                                                            <col style="width:220px">
                                                            <col style="width:*">
                                                        </colgroup>
                                                        <tbody>
                                                        <tr class="first">
                                                            <th scope="row" >Address</th>
                                                            <td>11F, kt tower, 422, Teheran-ro, Gangnam-gu, Seoul</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Tel.</th>
                                                            <td>1899-8700</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="view_map map1">
                                                        <div  class="viewer">
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3165.1117677045913!2d127.05065881559447!3d37.50528197980951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca411a4df5d01%3A0x15a8531c025748d1!2s422%20Teheran-ro%2C%20Gangnam-gu%2C%20Seoul%2C%20H%C3%A0n%20Qu%E1%BB%91c!5e0!3m2!1svi!2s!4v1669713272428!5m2!1svi!2s" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab01_3rd" class="tab-contain ">
                                        <div class="tab_conts">
                                            <div class="tbl_wrap tblw1180 addr">
                                                <div class="item">
                                                    <table>
                                                        <caption class="blind">
                                                            A form with Address, Tel of seoul office
                                                        </caption>
                                                        <colgroup>
                                                            <col style="width:220px">
                                                            <col style="width:*">
                                                        </colgroup>
                                                        <tbody>
                                                        <tr class="first">
                                                            <th scope="row" >Address</th>
                                                            <td>4F, Arabiz tower, 83, Mullae-ro, Yeongdeungpo-gu, Seoul</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Tel.</th>
                                                            <td>02-3404-3023</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="view_map map1">
                                                        <div  class="viewer">
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.648195533741!2d126.89772801558749!3d37.51621483476565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c9e2319116133%3A0x24b0e002afa8d8d4!2zVFVWIOudvOyduOuegOuTnCDsvZTrpqzslYQ!5e0!3m2!1svi!2s!4v1669714379448!5m2!1svi!2s" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab01_4th" class="tab-contain ">
                                        <div class="tab_conts">
                                            <div class="tbl_wrap tblw1180 addr">
                                                <div class="item">
                                                    <table>
                                                        <caption class="blind">
                                                            A form with Address, Tel of seoul office
                                                        </caption>
                                                        <colgroup>
                                                            <col style="width:220px">
                                                            <col style="width:*">
                                                        </colgroup>
                                                        <tbody>
                                                        <tr class="first">
                                                            <th scope="row" >Address</th>
                                                            <td>6F, Dongsan BD, 16, Teheran-ro 70-gil, Gangnam-gu, Seoul</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Tel.</th>
                                                            <td>080-2000-3000</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="view_map map1">
                                                        <div  class="viewer">
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3165.150656732908!2d127.05328440000001!3d37.504364699999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca41055280155%3A0x43ccc1587a5b5a4b!2s16%20Teheran-ro%2070-gil%2C%20Gangnam-gu%2C%20Seoul%2C%20H%C3%A0n%20Qu%E1%BB%91c!5e0!3m2!1svi!2s!4v1670568596564!5m2!1svi!2s" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                                                                </div>
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
                    <div class="product-tab z-index-20 ">
                        <div class="container">
                            <div class="biolife-tab biolife-tab-contain sm-margin-top-34px">
                                <div class="tab-head tab-head__icon-top-layout icon-top-layout">
                                    <ul class="tabs md-margin-bottom-35-im xs-margin-bottom-40-im">
                                        <li class="tab-element active">
                                            <a href="#tab01_1st_1" class="tab-link">Việt Nam</a>
                                        </li>
                                        <li class="tab-element" >
                                            <a href="#tab01_2nd_2" class="tab-link">
                                                Thailand
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div id="tab01_1st_1" class="tab-contain active">
                                        <div class="tab_conts">
                                            <div class="tbl_wrap tblw1180 addr">
                                                <div class="item">
                                                    <p class="d_tit">Hồ Chí Minh</p>
                                                    <table>
                                                        <caption class="blind">
                                                        </caption>
                                                        <colgroup>
                                                            <col style="width:220px">
                                                            <col style="width:*">
                                                        </colgroup>
                                                        <tbody>
                                                        <tr class="first">
                                                            <th scope="row" >Address</th>
                                                            <td>P.716, Lau7, Toa nha Saigon Paragon, 03, Nguyen Luong Bang, P.Tan Phu, Dist 7, Ho Chi Minh, Vietnam</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Tel.</th>
                                                            <td>+84 (0)28-5414-8000</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="view_map map1">
                                                        <div  class="viewer">
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.0643411100564!2d106.71970881526015!3d10.729520962990549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f89959156c9%3A0x2c5cc1c9a9470997!2zVMOyYSBuaMOgIFBhcmFnb24!5e0!3m2!1svi!2s!4v1669716319260!5m2!1svi!2s" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- //seoul -->
                                            <!-- Anyang -->
                                            <div class="tbl_wrap tblw1180 addr">
                                                <div class="item">
                                                    <p class="d_tit">Đà Nẵng</p>
                                                    <table>
                                                        <caption class="blind">
                                                            A form width address, tel
                                                        </caption>
                                                        <colgroup>
                                                            <col style="width:220px">
                                                            <col style="width:*">
                                                        </colgroup>
                                                        <tbody>
                                                        <tr class="first">
                                                            <th scope="row" >Address</th>
                                                            <td>Phòng A, Tầng 6, Tòa nhà văn phòng Indochina Riverside, 74 Bạch Đằng, Phường Hải Châu 1, Quận Hải Châu, Thành phố Đà Nẵng, Việt Nam</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Tel.</th>
                                                            <td>+84 (0)236-391-8000</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="view_map map2">
                                                        <div  class="viewer">
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.9117909334514!2d108.22218811528892!3d16.07006654368297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421831f2fa14cf%3A0x74894029d72e17d0!2sIndochina%20Mall!5e0!3m2!1svi!2s!4v1669716460666!5m2!1svi!2s" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- // Anyang -->
                                            <div class="tbl_wrap tblw1180 addr">
                                                <div class="item">
                                                    <p class="d_tit">Hà Nội</p>
                                                    <table>
                                                        <caption class="blind">
                                                            A form width address, tel
                                                        </caption>
                                                        <colgroup>
                                                            <col style="width:220px">
                                                            <col style="width:*">
                                                        </colgroup>
                                                        <tbody>
                                                        <tr class="first">
                                                            <th scope="row" >Address</th>
                                                            <td>Tầng 1, 2, Tòa nhà The Sun, đường Mễ Trì, Phường Mễ Trì, Quận Nam Từ Liêm, Hà Nội, Việt Nam</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Tel.</th>
                                                            <td>+84 (0)24-3205-5379 / +84 (0)24-3205-5595</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="view_map map2">
                                                        <div  class="viewer">
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.4245863537885!2d105.77813311533214!3d21.015690693599396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454aaec1a5631%3A0xd28d32af3b4f073b!2zVGhlIFN1biBN4buFIFRyw6w!5e0!3m2!1svi!2s!4v1669716622987!5m2!1svi!2s" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab01_2nd_2" class="tab-contain ">
                                        <div class="tab_conts">
                                            <div class="tbl_wrap tblw1180 addr">
                                                <div class="item">
                                                    <table>
                                                        <caption class="blind">
                                                            A form with Address, Tel of seoul office
                                                        </caption>
                                                        <colgroup>
                                                            <col style="width:220px">
                                                            <col style="width:*">
                                                        </colgroup>
                                                        <tbody>
                                                        <tr class="first">
                                                            <th scope="row" >Address</th>
                                                            <td>828 Oasis Work Place E Bldg., Tầng 3, Đường Rimklongsamsen, Tiểu khu Bangkapi, Quận Huaykwang, Bangkok 10310</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Tel.</th>
                                                            <td>1899-8700</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="view_map map1">
                                                        <div  class="viewer">
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.2124016696976!2d100.64030321527405!3d13.766061000670696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d618d30ff8715%3A0x4acad5d1f3945d99!2sThe%20Mall%20Bang%20Kapi!5e0!3m2!1svi!2s!4v1669717502277!5m2!1svi!2s" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
            </div>
        </div>
    </div>
@endsection