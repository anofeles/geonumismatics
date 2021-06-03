@extends('front.layouts.index')
@section('content')
    <!-- ### START Main Wrapper ### -->

    <!-- NAV -->
    <div id="nav_wrapper" class="color_default">
        <div id="nav">
            <div id="nav_child" class="size_small color-lblue">

                <a class="color-white nav" href="{{route('home')}}">Home</a> <span class="arrow_right" style="">></span>
                <span class="color-white nav nav_active">
                    Catalogue of Georgian Numismatics
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
                        @foreach($Datarov as $Datarovitem)
                            <div id="group_{{$Datarovitem->id}}">
                                {!! $Datarovitem->text !!}
                            </div>
                            <br/>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
