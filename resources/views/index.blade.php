@extends('layout')

@section('content')

<div class="container">
    <ul class="nav nav-tabs" id="contentTab" role="tablist">
        <li class="nav-item mobi" role="presentation">
            <button class="nav-link active" id="mobi-tab" data-bs-toggle="tab" data-bs-target="#mobi" type="button"
                role="tab" aria-controls="mobi" aria-selected="true">
                <img src="assets/images/mobi.png" alt="">
            </button>
        </li>
        <li class="nav-item viettel" role="presentation">
            <button class="nav-link" id="viettel-tab" data-bs-toggle="tab" data-bs-target="#viettel" type="button"
                role="tab" aria-controls="viettel" aria-selected="false">
                <img src="assets/images/viettel.png" alt="">
            </button>
        </li>
        <li class="nav-item vina" role="presentation">
            <button class="nav-link" id="vina-tab" data-bs-toggle="tab" data-bs-target="#vina" type="button" role="tab"
                aria-controls="vina" aria-selected="false">
                <img src="assets/images/vina.png" alt="">
            </button>
        </li>
    </ul>
</div>
<div class="tab-content" id="contentTabContent">
    <div class="tab-pane fade show active" id="mobi" role="tabpanel" aria-labelledby="home-tab">
        <section class="hero-wrapper">
            <div class="primary-slider">
                <div class="primary-slide-item-wrapper">
                    <div class="primary-slide-item">
                        <img src="assets/images/slide-1.png" alt="">
                    </div>
                </div>
                <div class="primary-slide-item-wrapper">
                    <div class="primary-slide-item">
                        <img src="assets/images/slide-2.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="advanced-search-wrapper">
            <div class="container">
                <div class="advanced-search">
                    <h2 class="section-title">TÌM GÓI CƯỚC THEO NHU CẦU</h2>

                    <form action="{{ url('/tim-kiem' ) }}" class="advanced-search-form">
                        <div class="search-input-wrapper">
                            <input type="text" class="search-input" name="search" placeholder="Tìm tên gói cước">
                        </div>
                        <div class="search-checkbox-wrapper">
                            <div class="row">
                                <div class="col-md-4 checkbox-col">
                                    <h4 class="checkbox-title">Loại gói cước</h4>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Data
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Thoại nội mạng
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Thoại ngoại mạng
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Tin nhắn
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4 checkbox-col">
                                    <h4 class="checkbox-title">Loại giá</h4>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Gói ngày
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Gói tháng
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Gói năm
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4 checkbox-col">
                                    <h4 class="checkbox-title">Loại thuê bao</h4>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Trả trước
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Trả sau
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-wrapper">
                            <button type="submit">Tìm kiếm</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="content-wrapper">
            <div class="container">
                <h2 class="section-title">CÚ PHÁP ĐĂNG KÝ 3G/4G/5G MOBIFONE</h2>
            </div>
            <div class="user-manual-wrapper" style="background-image: url(assets/images/content-bg.png)">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-7">
                            <div class="entry-content">
                                <div class="desc">
                                    <p>Chỉ với 1 cú pháp tin nhắn là bạn có thể hưởng trọn ưu đãi data cùng các ưu
                                        đãi khác đi kèm mà không cần phải mất thời gian đến cửa hàng Mobifone thực
                                        hiện</p>
                                </div>
                                <div class="user-manual">
                                    <h3 class="title">Soạn: <span>ga25 Tên-gói</span> gửi <span>9084</span></h3>
                                    <h4 class="subtitle">Trong đó:</h4>
                                    <p><strong>ga25:</strong> là mã kích hoạt gói cước</p>
                                    <p><strong>Tên-gói:</strong> gói cước 3G Mobifone/4G mobifone bạn muốn đăng ký
                                    </p>
                                    <p><strong>9084:</strong> tổng đài tiếp nhận đăng ký 3G/4G mobifone</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="package-wrapper">
            <div class="container">
                <h2 class="section-title">Gói cước 4g mobifone - theo ngày</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="package-wrapper">
            <div class="container">
                <h2 class="section-title">Gói cước 4g mobifone - theo tháng</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="package-wrapper">
            <div class="container">
                <h2 class="section-title">Gói cước 4g mobifone - không giới hạn dung lượng</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="package-wrapper">
            <div class="container">
                <h2 class="section-title">Gói cước 4g mobifone - giá rẻ</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="package-wrapper">
            <div class="container">
                <h2 class="section-title">Gói cước 4g mobifone - Ưu đãi đặc biệt</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="tab-pane fade" id="viettel" role="tabpanel" aria-labelledby="profile-tab">
        <section class="hero-wrapper">
            <div class="primary-slider">
                <div class="primary-slide-item-wrapper">
                    <div class="primary-slide-item">
                        <img src="assets/images/slide-1.png" alt="">
                    </div>
                </div>
                <div class="primary-slide-item-wrapper">
                    <div class="primary-slide-item">
                        <img src="assets/images/slide-2.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="advanced-search-wrapper">
            <div class="container">
                <div class="advanced-search">
                    <h2 class="section-title">TÌM GÓI CƯỚC THEO NHU CẦU</h2>

                    <form action="" class="advanced-search-form">
                        <div class="search-input-wrapper">
                            <input type="text" class="search-input" placeholder="Tìm tên gói cước">
                        </div>
                        <div class="search-checkbox-wrapper">
                            <div class="row">
                                <div class="col-md-4 checkbox-col">
                                    <h4 class="checkbox-title">Loại gói cước</h4>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Data
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Thoại nội mạng
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Thoại ngoại mạng
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Tin nhắn
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4 checkbox-col">
                                    <h4 class="checkbox-title">Loại giá</h4>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Gói ngày
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Gói tháng
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Gói năm
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4 checkbox-col">
                                    <h4 class="checkbox-title">Loại thuê bao</h4>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Trả trước
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Trả sau
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-wrapper">
                            <button type="submit">Tìm kiếm</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="content-wrapper">
            <div class="container">
                <h2 class="section-title">CÚ PHÁP ĐĂNG KÝ 3G/4G/5G MOBIFONE</h2>
            </div>
            <div class="user-manual-wrapper" style="background-image: url(assets/images/content-bg.png)">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-7">
                            <div class="entry-content">
                                <div class="desc">
                                    <p>Chỉ với 1 cú pháp tin nhắn là bạn có thể hưởng trọn ưu đãi data cùng các ưu
                                        đãi khác đi kèm mà không cần phải mất thời gian đến cửa hàng Mobifone thực
                                        hiện</p>
                                </div>
                                <div class="user-manual">
                                    <h3 class="title">Soạn: <span>ga25 Tên-gói</span> gửi <span>9084</span></h3>
                                    <h4 class="subtitle">Trong đó:</h4>
                                    <p><strong>ga25:</strong> là mã kích hoạt gói cước</p>
                                    <p><strong>Tên-gói:</strong> gói cước 3G Mobifone/4G mobifone bạn muốn đăng ký
                                    </p>
                                    <p><strong>9084:</strong> tổng đài tiếp nhận đăng ký 3G/4G mobifone</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="package-wrapper">
            <div class="container">
                <h2 class="section-title">Gói cước 4g mobifone - theo ngày</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="package-wrapper">
            <div class="container">
                <h2 class="section-title">Gói cước 4g mobifone - theo tháng</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="package-wrapper">
            <div class="container">
                <h2 class="section-title">Gói cước 4g mobifone - không giới hạn dung lượng</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="package-wrapper">
            <div class="container">
                <h2 class="section-title">Gói cước 4g mobifone - giá rẻ</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="package-wrapper">
            <div class="container">
                <h2 class="section-title">Gói cước 4g mobifone - Ưu đãi đặc biệt</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="tab-pane fade" id="vina" role="tabpanel" aria-labelledby="contact-tab">
        <section class="hero-wrapper">
            <div class="primary-slider">
                <div class="primary-slide-item-wrapper">
                    <div class="primary-slide-item">
                        <img src="assets/images/slide-1.png" alt="">
                    </div>
                </div>
                <div class="primary-slide-item-wrapper">
                    <div class="primary-slide-item">
                        <img src="assets/images/slide-2.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="advanced-search-wrapper">
            <div class="container">
                <div class="advanced-search">
                    <h2 class="section-title">TÌM GÓI CƯỚC THEO NHU CẦU</h2>

                    <form action="" class="advanced-search-form">
                        <div class="search-input-wrapper">
                            <input type="text" class="search-input" placeholder="Tìm tên gói cước">
                        </div>
                        <div class="search-checkbox-wrapper">
                            <div class="row">
                                <div class="col-md-4 checkbox-col">
                                    <h4 class="checkbox-title">Loại gói cước</h4>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Data
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Thoại nội mạng
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Thoại ngoại mạng
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Tin nhắn
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4 checkbox-col">
                                    <h4 class="checkbox-title">Loại giá</h4>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Gói ngày
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Gói tháng
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Gói năm
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4 checkbox-col">
                                    <h4 class="checkbox-title">Loại thuê bao</h4>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Trả trước
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkbox-wrapper">
                                        <label class="checkbox-container">Trả sau
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-wrapper">
                            <button type="submit">Tìm kiếm</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="content-wrapper">
            <div class="container">
                <h2 class="section-title">CÚ PHÁP ĐĂNG KÝ 3G/4G/5G MOBIFONE</h2>
            </div>
            <div class="user-manual-wrapper" style="background-image: url(assets/images/content-bg.png)">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-7">
                            <div class="entry-content">
                                <div class="desc">
                                    <p>Chỉ với 1 cú pháp tin nhắn là bạn có thể hưởng trọn ưu đãi data cùng các ưu
                                        đãi khác đi kèm mà không cần phải mất thời gian đến cửa hàng Mobifone thực
                                        hiện</p>
                                </div>
                                <div class="user-manual">
                                    <h3 class="title">Soạn: <span>ga25 Tên-gói</span> gửi <span>9084</span></h3>
                                    <h4 class="subtitle">Trong đó:</h4>
                                    <p><strong>ga25:</strong> là mã kích hoạt gói cước</p>
                                    <p><strong>Tên-gói:</strong> gói cước 3G Mobifone/4G mobifone bạn muốn đăng ký
                                    </p>
                                    <p><strong>9084:</strong> tổng đài tiếp nhận đăng ký 3G/4G mobifone</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="package-wrapper">
            <div class="container">
                <h2 class="section-title">Gói cước 4g mobifone - theo ngày</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="package-wrapper">
            <div class="container">
                <h2 class="section-title">Gói cước 4g mobifone - theo tháng</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="package-wrapper">
            <div class="container">
                <h2 class="section-title">Gói cước 4g mobifone - không giới hạn dung lượng</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="package-wrapper">
            <div class="container">
                <h2 class="section-title">Gói cước 4g mobifone - giá rẻ</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="package-wrapper">
            <div class="container">
                <h2 class="section-title">Gói cước 4g mobifone - Ưu đãi đặc biệt</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="package-item">
                            <div class="package-header">
                                <h4 class="package-name">12C120</h4>
                            </div>
                            <div class="package-body">
                                <div class="package-content">
                                    <div class="label">Giá gói</div>
                                    <div class="content">
                                        120,000đ/30 ngày
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Cú pháp</div>
                                    <div class="content">
                                        <strong>TAI2 HD90</strong> gửi <strong>9084i</strong>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Tiền hoàn</div>
                                    <div class="content">
                                        10,000đ
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="label">Ưu đãi</div>
                                    <div class="content">
                                        <ul>
                                            <li>Miễn phí 4GB/ ngày =>360GB/ 3 tháng.</li>
                                            <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong
                                                90 ngày</li>
                                            <li>Tặng 50 phút gọi liên mạng/30 ngày ⇒ 150 phút/ 90 ngày</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="package-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua tin nhắn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" class="package-btn-solid">ĐK qua OTP</a>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="" class="package-btn-outline">Hướng dẫn chi tiết đăng ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
