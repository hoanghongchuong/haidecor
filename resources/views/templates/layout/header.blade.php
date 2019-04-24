<?php
    $setting = Cache::get('setting');
    $sliders = DB::table('slider')->where('com','gioi-thieu')->where('status',1)->get();
    $categories = DB::table('product_categories')->where('com','san-pham')->orderBy('id','desc')->get();
?>
<header id="header" class="">
    <div class="container">
        <div class="row">
            <div class="top_header">
                <div class="col-md-2 col-xs-12 tac">
                    <a href="{{url('')}}" title="Trang chủ"><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" class="logo-img" alt="Trang chủ"></a>
                </div>
                <div class="col-md-7 col-xs-12 menu">
                    <div class="visible-md visible-lg">
                        <ul class="navi">
                            <li><a href="{{url('gioi-thieu')}}">Giới thiệu</a></li>
                            <li>
                                <a href="{{url('san-pham')}}">Sản phẩm mới về</a>
                                <!-- <i class="fa fa-angle-down"></i>
                                <ul class="vk-menu__child">                                
                                    <li><a href="#">Danh mục sản phẩm 1</a></li>
                                    <li><a href="#">Danh mục sản phẩm 1</a></li>
                                    <li><a href="#">Danh mục sản phẩm 1</a></li>                        
                                </ul> -->
                            </li>
                            <li><a href="{{url('tu-van-decor')}}">Tư vấn decor</a></li>
                            <li><a href="{{url('huong-dan-dat-hang')}}">Hướng dẫn đặt hàng</a></li>                            
                            <li><a href="{{url('lien-he')}}">Liên hệ</a></li>
                        </ul>
                    </div>

                    
                </div>
                <div class="col-md-3 box-count-cart col-xs-12">
                    <div class="box-search">
                        <div class="search-text" id="search_text">
                            <form action="{{route('search')}}" method="get" accept-charset="utf-8">
                                <div class="form-group">
                                    <input type="text" placeholder="Tìm kiếm" class="input-search text" name="txtSearch">
                                    <input type="submit" class="btn-search" id="search_btn" name="">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="box-shopping-cart">
                        <a href="{{url('gio-hang')}}">
                            <span class="icon-cart"><i class="fa fa-shopping-cart"></i></span>
                            <!-- <span class="count-cart">&nbsp;0</span> -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu-mobile -->
        <div class="visible-xs visible-sm menu-mobile">
            <div class="vk-header__search">
                <div class="container">                
                    <a href="#menuMobile" class="menu_Mobile" data-toggle="collapse" class="_btn d-lg-none menu_title"><i class="fa fa-bars"></i> Menu</a>
                </div>
            </div>
            <nav class="vk-header__menu-mobile">
                <ul class="vk-menu__mobile collapse" id="menuMobile">
                    
                    <li><a href="{{url('gioi-thieu')}}">Giới thiệu</a></li>
                    <li>
                        <a href="{{url('san-pham')}}">Sản phẩm mới về</a>
                        <!-- <i class="fa fa-angle-down"></i>
                        <ul class="vk-menu__child">                                
                            <li><a href="#">Danh mục sản phẩm 1</a></li>
                            <li><a href="#">Danh mục sản phẩm 1</a></li>
                            <li><a href="#">Danh mục sản phẩm 1</a></li>                        
                        </ul> -->
                    </li>
                    <li><a href="{{url('tu-van-decor')}}">Tư vấn decor</a></li>
                    <li><a href="{{url('huong-dan-dat-hang')}}">Hướng dẫn đặt hàng</a></li>                            
                    <li><a href="{{url('lien-he')}}">Liên hệ</a></li>
                </ul>
            </nav>        
        </div>            
    </div>
</header><!-- /header -->