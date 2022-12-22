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
            <img src="{{asset('assets/web/images/web/main/img_contact.png')}}" width="40" alt="">
            <span> Kakaotalk</span>
        </a>
        <a>
            <img src="{{asset('assets/web/images/web/main/img_contact1.webp')}}" width="40" alt="">
            <span>Zalo</span>
        </a>
        <a>
            <img src="{{asset('assets/web/images/web/main/img_contact2.png')}}" width="40" alt="">
            <span>Facebook</span>
        </a>
        <a data-toggle="modal" data-target="#exampleModalCenter">
            <img src="{{asset('assets/web/images/web/main/img_contact4.webp')}}" width="40" alt="">
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
                        <div class="form-group col-md-12">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="input_popup" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group mb-2 p-0 col-md-6">
                            <select id="inputState" class="input_popup_select">
                                <option>Chọn địa điểm</option>
                                <option>Hà Nội</option>
                                <option>Đà Nẵng </option>
                                <option>Hồ Chí Minh </option>
                            </select>
                        </div>
                        <div class="form-group mb-2 p-0 col-md-6">
                            <select  class="input_popup_select">
                                <option >Chọn dịch vụ</option>
                                <option>Thuê xe dài hạn </option>
                                <option>Thuê xe ngắn hạn </option>
                                <option>Thuê thiết bị </option>
                                <option>Mua - Bán xe </option>
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
<div class="modal fade" id="Modal_Recruit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered form_contact" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center" id="">Bắt đàu sự nghiệp mới của bạn tại Lotte Rental</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Tên liên hệ</label>
                            <input type="email" class="input_popup" id="name" placeholder="Nhập tên">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Số điện thoại</label>
                            <input type="text" class="input_popup" id="phone" placeholder="Số điện thoại">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="input_popup" id="email" placeholder="Email">
                        </div>
                        <div class="form-group mb-2 p-0 col-md-6">
                            <label for="inputState">Địa chỉ</label>
                            <select id="location_jd" class="input_popup_select">
                                <option >Địa chỉ</option>
                                <option>Hà Nội </option>
                                <option>Đà Nẵng </option>
                                <option>Hồ Chí Minh </option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputState">Hồ sơ ứng tuyển</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Mô tả</label> <br>
                        <textarea class="text_description" rows="5"  placeholder="Nhập mô tả..."></textarea>
                    </div>

                </form>
            </div>
            <div class="modal-footer m-auto">
                <button type="button" class="button_form_contact">Xác nhận</button>
            </div>
        </div>
    </div>
</div>
