@extends('front.layouts.index')
@section('content')

    <!-- NAV -->
    <div id="nav_wrapper" class="color_default">
        <div id="nav">
            <div id="nav_child" class="size_small color-lblue">

                <a class="color-white nav" href="{{route('home')}}">Home</a> <span class="arrow_right" style="">></span>
                @php($name = 'name_'.$locale)
                @php($type = 'type_'.$locale)
                @php($desc = 'desc_'.$locale)
                @php($science_comment = 'science_comment_'.$locale)
                @php($zarapkhana = 'zarapkhana_'.$locale)
                @php($nominal = 'nominal_'.$locale)
                @php($date = 'date_'.$locale)
                @php($collection = 'collection_'.$locale)
                @php($bibliography = 'bibliography_'.$locale)
                @php($foreign_money = 'foreign_money_'.$locale)
                <a class="color-white nav" href="{{route('home.categori',['locale'=>$locale])}}">{{$CoinGroups->$name}}</a> <span class="arrow_right" style="">></span>
                <span class="color-white nav nav_active">
                {{$Coin->$type}}
            </div>
        </div>
    </div>
    <!-- /NAV -->

    <div style="clear:both;"></div>
    <div id="mainwrapper">
        <div id="maintextdiv">
            <div id="content">
                <div id="middle_div" style="width:990px;">
                    <!-- if not catalogue display other text -->

                    <div class="type_title">{{$Coin->$type}}</div>

                    <div class=text style="padding-bottom: 12px;"></div>

                    <div class=pageloop style="float:right;">
                    </div>
                    <div style="clear:both;"></div>

                    <div id="catalogue_details">
                        <div class="catalogue_type"><span class="title">Type: </span>{{$Coin->$type}}</div><br />
                        <div class="catalogue_desc"><span class="title">Description, picture: </span>
                            {!! $Coin->$desc !!}
                            <br />
                            <div id="slides_wrapper">
                                <div id="slides">
                                    <div class="slides_container">
                                        @foreach($CoinPhotos as $CoinPhotositem)
                                        <a href="{{asset('/data/items/'.$Coin->id.'/'.$CoinPhotositem->photo.'')}}" rel="shadowbox">
                                            <img width="350" src="{{asset('/data/items/'.$Coin->id.'/'.$CoinPhotositem->photo.'')}}" />
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="catalogue_other_desc">
                            <div class="catalogue_row"><span style="margin-top: 10px;" class="title">Scholarly commentary: </span>{!! $Coin->$science_comment !!}</div>
                            <div class="catalogue_row"><span class="title">Mint: </span>{{$Coin->$zarapkhana}}</div>
                            <div class="catalogue_row"><span class="title">Nominal: </span>{{$Coin->$nominal}}</div>
                            <div class="catalogue_row"><span class="title">Date: </span>{{$Coin->$date}}</div>
                            <div class="catalogue_row"><span class="title">Collection: </span>{{$Coin->$collection}}</div>
                            <div class="catalogue_row"><span class="title">Bibliography: </span>{!! $Coin->$bibliography !!}</div>
                            <div class="catalogue_row"><span class="title">Imported coins found in Georgia: </span>{!! $Coin->$foreign_money !!}</div>
                        </div>
                    </div>

                </div>
                <div style="clear:both"></div>
            </div>
        </div>

        <div style="clear:both;"></div>
    </div>

@endsection
