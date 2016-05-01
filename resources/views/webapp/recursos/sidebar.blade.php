<div class="col-sm-3 col-md-2 sidebar">
    <div class="profile-material">
        <div class="profile-image">
            <img src="{{$usuario->avatar_imagen}}" class="image">
            <span class="badge-verified text-center" data-toggle="tooltip" data-placement="right" title="Verified">
                <i class="fa fa-check-circle" aria-hidden="true"></i>
            </span>
            <div class="col-md-12 text-center profile-name">
                <div class="row">
                    <a href="">
                        {{$usuario->nombre}}
                    </a>
                    <span class="block">
                        <i class="fa fa-{{($usuario->red == 'facebook') ? $usuario->red.'-square facebook-color' : 'twitter twitter-color'}}" aria-hidden="true"></i>
                    </span>
                </div>
            </div>
            <div class="cover-up">
                <img src="{{$usuario->avatar_imagen}}" alt="">
            </div>
        </div>
    </div>
    <ul class="nav nav-sidebar">
        <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Reports</a></li>
        <li><a href="#">Analytics</a></li>
        <li><a href="#">Export</a></li>
    </ul>
    <ul class="nav nav-sidebar">
        <li><a href="">Nav item</a></li>
        <li><a href="">Nav item again</a></li>
        <li><a href="">One more nav</a></li>
        <li><a href="">Another nav item</a></li>
        <li><a href="">More navigation</a></li>
    </ul>
    <ul class="nav nav-sidebar">
        <li><a href="">Nav item again</a></li>
        <li><a href="">One more nav</a></li>
        <li><a href="">Another nav item</a></li>
    </ul>
</div>