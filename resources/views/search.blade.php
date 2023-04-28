@extends('layout')

@section('content')
<section class="search-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <aside class="primary-sidebar">
                    <div class="sidebar-widget sidebar-search">
                        <form action="{{ url('/tim-kiem' ) }}" class="advanced-search-form">
                            <div class="search-input-wrapper">
                                <input type="text" class="search-input" name="search" placeholder="Tìm tên gói cước"
                                    value="{{$search}}">
                            </div>
                            <div class="search-checkbox-wrapper">
                                <div class="row">
                                    <div class="col-12 checkbox-col">
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
                                    <div class="col-12 checkbox-col">
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
                                    <div class="col-12 checkbox-col">
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
                </aside>
            </div>
            <div class="col-lg-8">
                <div class="search-results">
                    <p class="search-results-text">03 Kết quả tìm kiếm <span>“{{$search}}”</span></p>

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
                                        <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong 90
                                            ngày</li>
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
                                        <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong 90
                                            ngày</li>
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
                                        <li>Miễn phí các cuộc gọi nội mạng dưới 20 phút – ưu đãi liên tiếp trong 90
                                            ngày</li>
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
    </div>
</section>
@endsection
