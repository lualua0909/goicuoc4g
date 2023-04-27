	<!-- Header Start -->
	<header class="header">
	    <div class="container">
	        <div class="row align-items-center">
	            <div class="col-lg-1 col-md-2 col-3">
	                <div class="logo-wrapper">
	                    <a href="{{ url('/') }}">
	                        <img src="{{ asset('assets/images/logo.png')}}" alt="">
	                    </a>
	                </div>
	            </div>
	            <div class="col-lg-8 navigation-col">
	                <div class="navigation">
	                    <ul class="navigation-menu">
	                        <li class="current-menu-item"><a href="{{ url('/') }}">Trang chủ</a></li>
	                        <li class="menu-item-has-children">
	                            <a href="#">Gói cước</a>
	                            <ul class="sub-menu">
	                                <li class="menu-item-has-children"><a href="#">Gói cước 4g
	                                        mobifone - theo ngày</a>
	                                    <ul class="sub-menu">
	                                        <li><a href="{{ url('goi-cuoc/12C120') }}">Gói cước 1</a></li>
	                                        <li><a href="{{ url('goi-cuoc/12C120') }}">Gói cước 2</a></li>
	                                        <li><a href="{{ url('goi-cuoc/12C120') }}">Gói cước 3</a></li>
	                                        <li><a href="{{ url('goi-cuoc/12C120') }}">Gói cước 4</a></li>
	                                    </ul>
	                                </li>
	                                <li><a href="{{ url('goi-cuoc/12C120') }}">Gói cước 4g mobifone - theo tháng</a></li>
	                                <li><a href="{{ url('goi-cuoc/12C120') }}">Gói cước 4g mobifone - không giới hạn dung
	                                        lượng</a>
	                                </li>
	                                <li><a href="{{ url('goi-cuoc/12C120') }}">Gói cước 4g mobifone - giá rẻ</a></li>
	                                <li><a href="{{ url('goi-cuoc/12C120') }}">Gói cước 4g mobifone - Ưu đãi đặc biệt</a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li class="menu-item-has-children"><a href="#">Chương trình khuyến mãi</a>
	                            <ul class="sub-menu">
	                                <li><a href="{{ url('goi-cuoc/12C120') }}">Sim số đẹp</a></li>
	                                <li><a href="{{ url('goi-cuoc/12C120') }}">Nạp tiền chiết khấu</a></li>
	                            </ul>
	                        </li>
	                        <li><a href="{{ url('tuyen-dung') }}">Tuyển dụng</a></li>
	                        <li class="menu-item-has-children"><a href="#">Về chúng tôi</a>
	                            <ul class="sub-menu">
	                                <li><a href="{{ url('ve-chung-toi') }}">Giới thiệu</a></li>
	                                <li><a href="{{ url('tin-tuc') }}">Tin tức</a></li>
	                                <li><a href="{{ url('tuyen-dung') }}">Tuyển dụng</a></li>
	                            </ul>
	                        </li>
	                    </ul>
	                </div>
	                <nav id="mobile-menu">
	                    <ul class="navigation-menu">
	                        <li class="current-menu-item"><a href="{{ url('/') }}">Trang chủ</a></li>
	                        <li class="menu-item-has-children">
	                            <a href="">Tìm kiếm sim</a>
	                            <ul class="sub-menu">
	                                <li class="menu-item-has-children">
	                                    <a href="">Sim trả sau</a>
	                                    <ul class="sub-menu">
	                                        <li><a href="{{ url('ve-chung-toi') }}">Giới thiệu</a></li>
	                                        <li><a href="">Hướng dẫn mua sim</a></li>
	                                        <li><a href="">Gói cước</a></li>
	                                    </ul>
	                                </li>
	                                <li class="menu-item-has-children">
	                                    <a href="">Sim trả trước</a>
	                                    <ul class="sub-menu">
	                                        <li><a href="">Sim Mobi trả trước 120GB</a></li>
	                                        <li><a href="">Sim C120N Mobi 4GB/ngày</a></li>
	                                        <li><a href="">Sim data 2 tháng Free</a></li>
	                                    </ul>
	                                </li>
	                                <li><a href="">Siêu sim data</a></li>
	                                <li><a href="">Sim VIP</a></li>
	                            </ul>
	                        </li>
	                        <li><a href="">Gói cước 4g</a></li>
	                        <li><a href="">Nạp tiền chiết khấu</a></li>
	                        <li><a href="">Cáp quang Internet</a></li>
	                        <li><a href="">Khuyến mãi hot</a></li>
	                        <li><a href="{{ url('tin-tuc') }}">Tin tức</a></li>
	                    </ul>
	                </nav>
	            </div>
	            <div class="col-lg-3 col-md-10 col-9">
	                <div class="header-left">
	                    <div class="search-form-wrapper">
	                        <form action="{{ url('/tim-kiem/'. Request::get('search') ) }}" method="GET"
	                            class="search-form">
	                            <input type="text" placeholder="Tìm gói cước" name="search">
	                            <button type="submit">Tìm kiếm</button>
	                        </form>
	                    </div>
	                    <div class="toggle-mobile-menu">
	                        <a href="#mobile-menu" id="toggle-mobile-menu-button"><i class="fa-solid fa-bars"></i></a>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</header>
	<!-- Header End -->
