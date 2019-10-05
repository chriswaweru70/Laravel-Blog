@extends('main')
@section('title', '|Homepage')
@section('content')
    <div class="row">
             <div class="col-md-12">
                <div class="jumbotron">
                        <h1>Welcome to my blog</h1>
                        <p class="lead">Thankyou for visiting us this is my test website built with Laravel.Please read my latest post</p>
                        <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
                </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-8" style="color:darkcyan;">
                @foreach($posts as $post)
                  <div class="post">
                  <h3> {{ $post->title }} </h3>
                  <p> {{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 100 ? "...😊" : ""}}</p>

                  <a href=" {{ url('blog/'.$post->slug)}}" class="btn btn-primary">Read More</a>
                  </div>
                  @endforeach
            </div>
             <div class="col-md-3 col-md-offset-1" style="color:blue;">
                <h2>Sidebar</h2>
             </div>
         </div>

@endsection
