
@extends('front.layouts.index')
@section('content')
<!-- ### START Main Wrapper ### -->

<!-- NAV -->
<div id="nav_wrapper" class="color_default">
    <div id="nav">
        <div id="nav_child" class="size_small color-lblue">

            <a class="color-white nav" href="{{route('home.locale',['locale'=>$locale])}}">{{__('site.home')}}</a> <span class="arrow_right" style="">></span>
            <span class="color-white nav nav_active"></span>
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
                    @foreach($CoinGroups as $CoinGroupsitem)
                    <div id="group_{{$CoinGroupsitem->id}}">
                        <a href="#" style="font-family: Arial;">
                            @php($name = 'name_'.$locale)

                            {{$CoinGroupsitem->$name}}
                        </a></div>
                    <br/>
                    <div style="display: none; padding: 5px; margin-bottom: 5px; background-color: #48A9E4;"
                         id="catalogue_types_{{$CoinGroupsitem->id}}">
                        @foreach($Coin as $Coinitem)
                            @if($Coinitem->group_id == $CoinGroupsitem->id)
                                @php($type = 'type_'.$locale)
                        <ul>
                            <li><a href="{{route('home.type',['locale'=>$locale,'typeid'=>$Coinitem->id])}}">{{$Coinitem->$type}}</a></li>
                        </ul>
                            @endif
                        @endforeach
                    </div>
                    <script>
                        $("#group_{{$CoinGroupsitem->id}}").click(function () {
                            $("#catalogue_types_{{$CoinGroupsitem->id}}").toggle("slow");
                        });
                    </script>
                    @endforeach
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
