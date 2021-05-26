<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<meta property="og:image" content="http://www.tsu.edu.ge/i/logo_tsu.png"/>-->
<title>
    Online English-Georgian Catalogue of Georgian Numismatics
</title>
<link rel="shortcut icon" href="http://geonumismatics.tsu.ge/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="{{asset('css/shida.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/main.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('css/en.css')}}" type="text/css" />
<link type="text/css" href="{{asset('css/jquery.jscrollpane.css')}}" rel="stylesheet" media="all" />
<link rel="stylesheet" type="text/css" href="{{asset('css/slides.css')}}" />
<!--<link rel="stylesheet" type="text/css" media="screen" href="/css/media-screen.css" />-->
<script src="{{asset('')}}js/geokbd/geokbd1.0.js"></script>
<!--<script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>-->
<script type="text/javascript" src="{{asset('js/jquery-1.9.1.min.js')}}"></script>
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
<link rel="stylesheet" type="text/css" href="/css/jquerycssmenu.css" />-->
<!--[if lte IE 7]>
<style type="text/css">
html .jquerycssmenu{height: 1%;} /*Holly Hack for IE7 and below*/
</style>
<![endif]-->
<script type="text/javascript" src="{{asset('js/jquerycssmenu.js')}}"></script>
<script>
    $(document).ready(function(){
        $('#slides').slides({
            pagination: true,
            paginationClass: 'pagination',
            currentClass: 'current',
            preload: true,
            preloadImage: 'i/loading.gif',
            play: 5000,
            pause: 2500,
            hoverPause: true
        });
    });
</script>
<script type="text/javascript" id="sourcecode">
    $(function()
    {
        $('.scroll_area').jScrollPane(
            {
                autoReinitialise: true
            }
        );
    });
</script>
