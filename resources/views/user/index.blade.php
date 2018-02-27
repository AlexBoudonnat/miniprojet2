@extends('template')
@section('content')

    @foreach($users as $user)
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Utilisateur n°{{ $user['user_id'] }}</h2>
        </div>
        <div class="panel-body">
            <p>Firstname : <b>{{ $user['firstname'] }}</b></p>

            <p>Lastname : <b>{{ $user['lastname'] }}</b></p>

            <p>Gender : <b>{{ \App\User::gender($user['gender']) }}</b></p>

            <p>Newsletter : <b>{{ \App\User::newsletter($user['newsletter']) }}</b></p>

            <p>Mood : <b>{{ \App\User::mood($user['mood']) }}</b></p>
        </div>
    </div>
    @endforeach

    
@endsection
