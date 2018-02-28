@extends('template')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Formulaire #2 News</h2>
        </div>
        <div class="panel-body">
            <form class="" action="/news" method="post">

                <div class="form-group">
                    <label for="user_id">User Id</label>
                    <input type="text" class="form-control" name="user_id" placeholder="user Id">
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="title">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" class="form-control" rows="8" cols="80"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>

    @isset($news)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title" style="font-weight: bold">Dernière news</h2>
            </div>
            <div class="panel-body">
                <h3>User Id : <span style="font-size: 20px">{{ $news['user_id'] }}</span></h3>

                <h3>Title : <span style="font-style: italic; font-size: 20px">{{ $news['title'] }}</span></h3>

                <h3>Content :</h3>
                <p><b>{{ $news['content'] }}</b></p>
                <div style="text-align: right"><a href="{{route('allNews')}}"><button class="btn btn-primary">Afficher toutes les news de cet utilisateur</button></a></div>
            </div>
        </div>
    @endisset

@endsection
