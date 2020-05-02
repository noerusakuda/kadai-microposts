@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            @include('users.card_favorite', ['user' => $user])
        </aside>
        <div class="col-sm-8">
            @include('users.navtabs', ['user' => $user])
            @if (count($user->favorites) > 0)
                @include('microposts.microposts', ['microposts' => $favorites])
            @endif
            
        </div>
    </div>
@endsection