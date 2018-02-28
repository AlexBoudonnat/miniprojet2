@extends('template')
@section('content')

    @foreach($newses as $news)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title" style="font-weight: bold">Title : <span style="font-style: italic; font-size: 20px">{{ $news['title'] }}</span></h2>
            </div>
            <div class="panel-body">
                <h3>Content :</h3>
                <p><b>{{ $news['content'] }}</b></p>
            </div>
        </div>
    @endforeach

@endsection