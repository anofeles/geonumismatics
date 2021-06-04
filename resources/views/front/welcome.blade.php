@extends('front.layouts.index')
@section('content')

<div id="block_wrapper">
    <div id="center_blocks">
        <div class="block1" onclick="window.location='{{route('home.categori',['locale'=>$locale])}}'">
            <div class="inside_div">
                <a href="{{route('home.categori',['locale'=>$locale])}}">{{__('site.categori')}}</a>
            </div>
        </div>
        <div class="block2" onclick="window.location='{{route('home.form.serch',['locale'=>$locale])}}'">
            <div class="inside_div">
                <a href="{{route('home.form.serch',['locale'=>$locale])}}">{{__('site.cat_serach')}}</a>
            </div>
        </div>

        <div style="clear: both;"></div>
    </div>
</div>
<!-- ### Start Main Body ###  -->
<div id="middle_area">
    <div style="width: 990px; height: 380px; background: url('{{asset('i/left_line.gif')}}') repeat;">
        <div id="slides_wrapper">
            <div id="slides">
                <div class="slides_container">
                    <img src="{{asset('data/img/72/1.%20kolxur.BhbrFhGCP.jpg')}}" />
                    <img src="{{asset('data/img/71/2.%20aleqsandre1.1.CVqr5Ph9Lm.jpg')}}" />
                    <img src="{{asset('data/img/70/3.%20daviti%20%20(2).-nwd73Zyub.jpg')}}" />
                    <img src="{{asset('data/img/69/4.%20giorgi%20III.9nOy0wsFBt.jpg')}}" />
                </div>
            </div>
        </div>
    </div>
    <div id="usefull_links">
        <div class="usefull_subject">{{__('site.useful')}}</div>

        <ul>
            <li><a target="_blank" href="http://www.tsu.edu.ge/en/">
                    <img border="0" align="" src="{{asset('data/image_db_innova/banners/tsu_logo.png')}}" alt="" />
                    <span style="font-size:13px; font-family: Arial;">{{__('site.baner.ivane')}}</span></a></li>
            <li><a href="http://geohistory.humanities.tsu.ge/en/" target="_blank">
                    <img border="0px" align="" src="{{asset('data/image_db_innova/banners/Logo_geohistory.png')}}" alt="" />
                    <span style="font-size:13px; font-family: Arial;">{{__('site.baner.institute')}}</span></a></li>
            <li><a target="_blank" href="http://www.rustaveli.org.ge/index.php?lang=eng">
                    <img border="0" src="{{asset('data/image_db_innova/banners/rustaveli.png')}}" alt="" />
                    <span style="font-size:13px; font-family: Arial;">{{__('site.baner.shota')}}</span></a></li>
        </ul><br />

        <div class="note"><span>{{__('site.baner.project')}}</span></div>
    </div>
</div>
@endsection
