<div id="header">
    <div id="top_left">
        <div id="menu">
            <ul class="top_menu">
                <li style="background:none;"><a style="font-family: Arial;" class="size_medium  " href="{{route('home')}}" >Home</a><span style="color: #cb9331;">  |</span>
                </li>
                <li ><a style="font-family: Arial;" class="size_medium  " href="#" >About Us</a><span style="color: #cb9331;">  |</span>
                </li>
                <li ><a style="font-family: Arial;" class="size_medium  " href="#" >Contact</a>
                </li>

            </ul>
        </div>
        <section class="site_title">Online English-Georgian Catalogue of Georgian Numismatics</section>
    </div>
    <div id="top_right" style="width: 335px;">
        <form method='get' action="http://geonumismatics.tsu.ge/en/search/" name='search_form'>
            <div id="search_div" style="margin-left: 22px;">
                <div class="search_check"></div>
                <div class="mainsearch_input" style="padding-left: 25px;"><input type='text' class="" onclick="this.select();" name='q' value=""></div>
                <div class="search_button">
                    <input type='image' src="{{asset('i/search9.png')}}" />
                </div><span style="color: #cb9331; padding-left: 5px;">|</span>
            </div>
        </form>
        <div class="lang_en">
            <a onclick="window.location='http://geonumismatics.tsu.ge/ge/'">GEO</a>
            <div>
                <!--<section class="site_title" >The<a style="color: #D3D3D3;">i</a>site is<a style="color: #D3D3D3;">i</a>under construction</section>-->
            </div>
        </div>
    </div>
    <div style="clear:both;"></div>
</div>
