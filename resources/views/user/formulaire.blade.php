@extends('template')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Formulaire #1 Utilisateur</h2>
        </div>
        <div class="panel-body">
            <form class="" action="{{route('postForm')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="firstname">firstname</label>
                    <input type="text" class="form-control" name="firstname" placeholder="firstname">
                </div>
                <div class="form-group">
                    <label for="lastname">lastname</label>
                    <input type="text" class="form-control" name="lastname" placeholder="lastname">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" class="form-control">
                        <option value="1">men</option>
                        <option value="2">women</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="newsletter" value="yes"> suscribe to newsletter
                      </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="radio">
                      <label>
                        <input type="radio" name="mood" value="1" checked>
                            Happy
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="mood" value="2">
                            Sad
                      </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('index')}}"><button type="button" class="btn btn-primary">Afficher tous les utilisateurs</button></a>
        </div>
    </div>

@endsection
