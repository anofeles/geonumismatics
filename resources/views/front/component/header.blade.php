
<div id="header">
    <div id="top_left">
        <div id="menu">
            <ul class="top_menu">
                <li style="background:none;">
                    <a style="font-family: Arial;" class="size_medium  " href="{{route('home.locale',['locale'=>$locale])}}">{{__('site.home')}}</a>
                    <span style="color: #cb9331;">  |</span>
                </li>
                @foreach($Lang as $Langitem)
                    @if($Langitem->orderby <= 20 && $locale == $Langitem->name)
                        @foreach($data as $dataitem)
                            @if($Langitem->id == $dataitem->lang_id)
                            <li>
                                <a style="font-family: Arial;" class="size_medium  " href="{{route('home.page',['locale'=>$locale,'pageid'=>$dataitem->id])}}">
                                    {{$dataitem->subject}}
                                </a>
                                <span style="color: #cb9331;">  |</span>
                            </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </ul>
        </div>
        <section class="site_title">{{__('site.home_title')}}</section>
    </div>
    <div id="top_right" style="width: 335px;">
        <form method='post' action="{{route('home.serchtop',['locale'=>$locale])}}" name='search_form'>
            @csrf
            <div id="search_div" style="margin-left: 22px;">
                <div class="search_check"></div>
                <div class="mainsearch_input" style="padding-left: 25px;">
                    <input type='text' class="" onclick="this.select();" name='q' value=""></div>
                <div class="search_button">
                    <input type='image' src="{{asset('i/search9.png')}}"/>
                </div>
                <span style="color: #cb9331; padding-left: 5px;">|</span>
            </div>
        </form>
        <div class="lang_en">
            @foreach($Lang as $Langitem)
                @if($Langitem->orderby <= 20 && $locale != $Langitem->name)
                    <a onclick="window.location='{{route('home.locale',['locale'=>$Langitem->name])}}'">{{$Langitem->l}}</a>
                @endif
            @endforeach
            <div>
                <!--<section class="site_title" >The<a style="color: #D3D3D3;">i</a>site is<a style="color: #D3D3D3;">i</a>under construction</section>-->
            </div>
        </div>
    </div>
    <div style="clear:both;"></div>
</div>
