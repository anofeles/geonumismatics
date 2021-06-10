@extends('front.layouts.index')
@section('content')
    <!-- NAV -->
    <div id="nav_wrapper" class="color_default">
        <div id="nav">
            <div id="nav_child" class="size_small color-lblue">

                <a class="color-white nav" href="{{route('home.locale',['locale'=>$locale])}}">{{__('site.home')}}</a> <span class="arrow_right" style="">></span>
                <span class="color-white nav nav_active"> {{__('site.cat_serach')}}  </span>
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
                            <form name="coins_search" method="post" autocomplete="off" action="{{route('home.serach',['locale'=>$locale])}}">
                                @csrf
                                <table class="search_table">
                                    <tr>
                                        <td>{{__('site.search_form.group')}}: </td>
                                        <td>
                                            <input type="text" class="autosuggest" name="group" value="" />
                                            <div class="dropdown">
                                                <ul class="result">
                                                </ul>
                                            </div>
                                        </td>
                                        <td class="last"><a href="http://geonumismatics.tsu.ge/ge/catalogue/"><!--List--></a></td>
                                        <script src="../../js/autosuggest/groups.js"></script>
                                    </tr>
                                    <tr>
                                        <td>{{__('site.search_form.type')}}: </td>
                                        <td><input type="text" class="autosuggest1" name="type" value="" />
                                            <div class="dropdown">
                                                <ul class="result1"></ul>
                                            </div>
                                        </td>
                                        <td class="last"><a href="indexa221.html?type=all"><!--List--></a></td>
                                        <script src="../../js/autosuggest/types.js"></script>
                                    </tr>
                                    <tr>
                                        <td>{{__('site.search_form.description')}}: </td>
                                        <td><input type="text" class="autosuggest2" name="desc" value="" /></td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><div class="line"></div></td>
                                    </tr>
                                    <tr>
                                        <td>{{__('site.search_form.mint')}}: </td>
                                        <td><input type="text" class="autosuggest3" name="mint" value="" />
                                            <div class="dropdown">
                                                <ul class="result3"></ul>
                                            </div>
                                        </td>
                                        <td class="last"><!--List--></td>
                                        <script src="../../js/autosuggest/mint.js"></script>
                                    </tr>
                                    <tr>
                                        <td>{{__('site.search_form.nominal')}}: </td>
                                        <td><input type="text" class="autosuggest4" name="nom" value="" />
                                            <div class="dropdown">
                                                <ul class="result4"></ul>
                                            </div>
                                        </td>
                                        <td class="last"><!--List--></td>
                                        <script src="../../js/autosuggest/nom.js"></script>
                                    </tr>
                                    <tr>
                                        <td>{{__('site.search_form.date')}}: </td>
                                        <td><input type="text" class="autosuggest5" name="dat" value="" />
                                            <div class="dropdown">
                                                <ul class="result5"></ul>
                                            </div>
                                        </td>
                                        <td class="last"><!--List--></td>
                                        <script src="../../js/autosuggest/date.js"></script>
                                    </tr>
                                    <tr>
                                        <td>{{__('site.search_form.collection')}}: </td>
                                        <td><input type="text" class="autosuggest6" name="coll" />
                                            <div class="dropdown">
                                                <ul class="result6"></ul>
                                            </div>
                                        </td>
                                        <td class="last">&nbsp;</td>
                                        <script src="../../js/autosuggest/coll.js"></script>
                                    </tr>
                                    <tr>
                                        <td>{{__('site.search_form.imported')}}: </td>
                                        <td><input type="text" class="autosuggest7" name="for" /></td>
                                        <td class="last">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><input type="submit" name="search_coins" class="search_coins" value="{{__('site.search_form.search')}}" /></td>
                                    </tr>
                                </table>
                            </form>
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
