@extends('layouts.master')

@section('content')
    <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <span class="subheading">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <form action="{{route('search')}}">
                    <input type="search" required name="query">
                    <button class="btn btn-success">Search</button>
                </form>
                @foreach ($posts as $post)
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                {{$post->title}}
                            </h2>
                            <h3 class="post-subtitle">
                                {{$post->content}}
                            </h3>
                        </a>
                        <p class="post-meta">Posted by
                            <a href="#">{{$post->user->name}}</a>
                            @if ($post->created_at)
                                {{$post->created_at}}
                            @endif</p>
                    </div>
                    <hr>
            @endforeach
            <!-- Pager -->
                <div class="clearfix">
                    <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
                </div>
            </div>
        </div>
    </div>

    <hr>
@endsection