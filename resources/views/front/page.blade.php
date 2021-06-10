
@extends('front.layouts.index')
@section('content')
    <!-- ### START Main Wrapper ### -->

    <!-- NAV -->
    <div id="nav_wrapper" class="color_default">
        <div id="nav">
            <div id="nav_child" class="size_small color-lblue">

                <a class="color-white nav" href="{{route('home.locale',['locale'=>$locale])}}">{{__('site.home')}}</a> <span class="arrow_right" style="">></span>
                <span class="color-white nav nav_active">
                {{$page->subject}}
                </span>
            </div>
        </div>
    </div>
    <!-- /NAV -->

    <div style="clear:both;"></div>
    <div id="mainwrapper">
        <div id="maintextdiv">
            <div id="content">
                <div id="middle_div" style="width:990px;">

                    <div id="catalogue">
                        {!! $page->text !!}
                    </div>
                </div>
                <div style="clear:both"></div>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>
    <!-- ### END Main Wrapper ### -->
    <div style="display:none;" class="nav_up" id="nav_up"></div>
@endsection
