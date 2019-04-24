<?php
    $setting = Cache::get('setting');    
?>
<footer>
    <div class="container">
        <div class="row">
           <div class="col-md-3 col-xs-4">
               <a href="{{url('')}}" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo_footer)}}" class="img-footer" alt=""></a>
           </div>
           <div class="col-md-5 col-xs-8 pdl-0">
               <div class="news-letter">
                   <form action="{{route('postNewsletter')}}" method="post" accept-charset="utf-8">
                    {{csrf_field()}}
                        <input type="text" name="txtEmail" class="input-news-letter" placeholder="Địa chỉ email của bạn">
                        <button type="submit" class="btn-newsletter">Đăng ký</button>
                   </form>
               </div>
           </div>
           <div class="col-md-4"></div>
        </div>
        <div class="row bottom-footer" style="margin-top: 20px; margin-bottom: 30px;">
            <div class="col-md-4 col-xs-12">
                <h4 class="f-title"><span>Liên hệ</span></h4>
                <p class="f-company-name">{{ $setting->company }}</p>
                <p class="f-address">Địa chỉ: {{$setting->address}}</p>
                <p class="f-address">Gmail: {{$setting->email}}</p>
                <p class="f-hotline"><a href="tel:{{$setting->hotline}}" title="">Hotline: {{$setting->hotline}}</a></p>
                <p class="f-address">Thời gian: 08:30 - 18:00</p>
            </div>
            <div class="col-md-4 col-xs-12">
                <h4 class="f-title"><span>Bản đồ</span></h4>
                <div class="box-map">{!! $setting->iframemap !!}</div>
            </div>
            <div class="col-md-4 col-xs-12">
                <h4 class="f-title"><span>Fan page</span></h4>
                <div class="box-fanpage">
                    <div class="fb-page" data-href="{{$setting->facebook}}" data-tabs="timeline" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="{{$setting->facebook}}" class="fb-xfbml-parse-ignore"><a href="{{$setting->facebook}}">Facebook</a></blockquote></div>
                </div>
            </div>
        </div>
    </div>
</footer>