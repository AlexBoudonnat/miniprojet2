@extends('template')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Formulaire #2 News</h2>
        </div>
        <div class="panel-body">
            <form class="" action="/news" method="post">

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
                <h2 class="panel-title">Dernières news</h2>
            </div>
            <div class="panel-body">
                <h3>Title :</h3>
                <p><b>{{ $news['title'] }}</b></p>

                <h3>Content :</h3>
                <p><b>{{ $news['content'] }}</b></p>
            </div>
        </div>
    @endisset

@endsection
