@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$sliders = DB::table('slider')->where('status',1)->where('com','gioi-thieu')->orderBy('id','desc')->get();
$categories = DB::table('product_categories')->where('com','san-pham')->where('parent_id',0)->orderBy('id','desc')->get();
?>
<div class="slider-mobile visible-xs">
    <div id="carousel-id" class="carousel slide" data-ride="carousel">
                
        <div class="carousel-inner">
            @foreach($sliders as $k=>$slider)
            <div class="item @if($k==0) active @endif">
                <img  alt="" src="{{asset('upload/hinhanh/'.$slider->photo)}}">                
            </div>
            @endforeach
        </div>
        <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>
<div class="menu-cate visible-md visible-lg">
    
    <div class="bot-menu hidden-xs hidden-sm">
        <div class="col-md-3 pdr-0 pdl-0">
            <h3 class="title-cate">Danh mục sản phẩm</h3>
            <div class="list-cate-home">
                <ul>
                    @foreach($categories as $category)
                        <li><a href="{{url('san-pham/'.$category->alias)}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>    
        <div class="col-md-9 col-xs-12 slider pdl-0 pdr-0">
            <div id="carousel-id1" class="carousel slide" data-ride="carousel">
                
                <div class="carousel-inner">
                    @foreach($sliders as $k=>$slider)
                    <div class="item @if($k==0) active @endif">
                        <img  alt="" src="{{asset('upload/hinhanh/'.$slider->photo)}}">                
                    </div>
                    @endforeach
                </div>
                <a class="left carousel-control" href="#carousel-id1" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#carousel-id1" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>    
    </div>
</div>
<div class="box-home">
    <div class="container">
        <div class="row">
            @foreach($categories_home as $cate)
            <div class="col-md-4">
                <div class="box-category">
                    <a href="{{url('san-pham/'.$cate->alias)}}" title="{{$cate->name}}">
                        <img src="{{asset('upload/product/'.$cate->photo)}}" alt="{{$cate->name}}" class="img-cate">
                    </a>
                    <div class="info-cate">
                        <a href="{{url('san-pham/'.$cate->alias)}}" title="{{$cate->name}}">{{$cate->name}}</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<div class="box-home">
    <div class="container">
        <div class="row">
            <h2 class="title_home">Sản phẩm mới về</h2>
            <div class="dongke"><span></span></div>
            <div class="list-product-item" style="margin-top: 20px;">
                <div class="owl-carousel owl-theme owl-carousel-product owl-carousel-product1">
                    @foreach($products as $product)
                    <div class="item">
                        <a href="{{url('san-pham/'.$product->alias.'.html')}}" title="{{$product->name}}"><img src="{{asset('upload/product/'.$product->photo)}}" alt="{{$product->name}}">
                        </a>
                        @if($product->price < $product->price_old)
                        <div class="sale-of"><span>{{ round((100 -($product->price/ $product->price_old)*100)) }}%</span></div>
                        @endif
                        <div class="footer-cate">
                            <p class="name_product"><a href="{{url('san-pham/'.$product->alias.'.html')}}" title="{{$product->name}}">{{$product->name}}</a></p>
                            <div class="price tac">
                                @if($product->price < $product->price_old)
                                <span class="price_old">{{number_format($product->price_old)}} vnđ</span>
                                @endif
                                <span class="price_news">{{number_format($product->price)}} vnđ</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="box-home">
    <div class="container">
        <div class="row">
            @foreach($categories_home as $cate)           
            <div class="list-cate-product">
                <div class="box-cate">
                    <div class="top-box">
                        <div class="pull-left"><a href="{{url('san-pham/'.$cate->alias)}}" class="cate-name">{{$cate->name}}</a></div>
                        <div class="pull-right"><a href="{{url('san-pham/'.$cate->alias)}}" class="read-more">Xem tất cả <i class="fa fa-angle-right"></i></a></div>
                    </div>
                    <div class="list-product-item new-item">                            
                        @foreach($cate->products as $item)
                        <div class="item col-md-3 col-xs-6">
                            <a href="{{url('san-pham/'.$item->alias.'.html')}}" title="{{$item->name}}"><img src="{{asset('upload/product/'.$item->photo)}}" alt="{{$item->name}}">
                            </a>
                            @if($item->price_old > $item->price)
                            <div class="sale-of"><span>{{ round((100 -($item->price/ $item->price_old)*100)) }}%</span></div>
                            @endif
                            <div class="footer-cate">
                                <p class="name_product"><a href="{{url('san-pham/'.$item->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a></p>
                                <div class="price tac">
                                    @if($item->price < $item->price_old)
                                <span class="price_old">{{number_format($item->price_old)}} vnđ</span>
                                @endif
                                <span class="price_news">{{number_format($item->price)}} vnđ</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>                        
                </div>  
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="box-home" style="margin-bottom: 20px;">
    <div class="container">
        <div class="row">
            <h2 class="title_home">Tư vấn decor</h2>
            <div class="dongke"><span></span></div>
            <div class="list-product-item" style="margin-top: 20px;">
                <div class="owl-carousel owl-theme owl-carousel-product owl-carousel-product1">
                    @foreach($news as $n)
                    <div class="item">
                        <a href="{{url('tu-van-decor/'.$n->alias.'.html')}}" title="{{$n->name}}"><img src="{{asset('upload/news/'.$n->photo)}}" alt="{{$n->name}}">
                        </a>
                        
                        <div class="footer-cate">
                            <p class="name_product"><a href="{{url('tu-van-decor/'.$n->alias.'.html')}}" title="{{$n->name}}">{{$n->name}}</a></p>
                            
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
