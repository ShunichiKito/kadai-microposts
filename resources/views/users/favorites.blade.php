@extends('layouts.app')
Yuina is learning something
OHHHH MAAAAI GAAAAWD
Yuina is sleeping
Yuina just woke up
Yuina is active
Yuina is clear
oooooooooooooooooooooo
aaa
<<<<<<< HEAD
<<<<<<< HEAD
test
why japanese people
=======
>>>>>>> 0cb27b80cf74cb6cf8d97667f09f7c0221c25a8b
=======
Yuina is learning something
>>>>>>> yuina
>>>>>>> 75e12a2e237482551f574b1d22542e9dec2d1df7
=======
test
why japanese people
<<<<<<<<< saved version
why japanese people
>>>>>>> d4df6e9791f771bad0c72664e812d6c86988a667
=======
ok I UNDERSTAND
>>>>>>> 0f113547f376d92c2cba5295b0eaf1a187e80b67
=========

>>>>>>>>> local version
>>>>>>> withnitch
@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                    <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                </div>
            </div>
            @include('user_follow.follow_button', ['user' => $user])
        </aside>
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">TimeLine <span class="badge">{{ $count_microposts }}</span></a></li>
                <li role="presentation" class="{{ Request::is('users/*/followings') ? 'active' : '' }}"><a href="{{ route('users.followings', ['id' => $user->id]) }}">Followings <span class="badge">{{ $count_followings }}</span></a></li>
                <li role="presentation" class="{{ Request::is('users/*/followers') ? 'active' : '' }}"><a href="{{ route('users.followers', ['id' => $user->id]) }}">Followers <span class="badge">{{ $count_followers }}</span></a></li>
                <li role="presentation" class="{{ Request::is('users/*/favorites') ? 'active' : '' }}"><a href="{{ route('users.favorites', ['id' => $user->id]) }}">Favorites <span class="badge">{{ $count_favorites }}</span></a></li>
            </ul>
            @include('microposts.microposts', ['microposts' => $microposts])
        </div>
    </div>
@endsection