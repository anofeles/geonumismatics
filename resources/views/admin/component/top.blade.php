<!-- Left navbar links -->
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('admin')}}" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('admin.home.logout')}}" class="nav-link">log out</a>
    </li>
</ul>

<!-- Right navbar links -->
<ul class="navbar-nav ml-auto">
    <li class="nav-item">
        @foreach($lang as $langitem)
            @if($langitem->orderby <= 20)
                <a href="{{route('admin.local',['localid'=>$langitem->id,'local'=>$langitem->name])}}" role="button">
                    {{$langitem->name}}
                </a> |
            @endif
        @endforeach
    </li>
</ul>
