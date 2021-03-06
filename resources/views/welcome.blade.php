@extends('layouts.master')

@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url( {{ asset('assets/img/home-bg.jpg') }} )">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Personnal Blog</h1>
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

                @foreach($posts as $post)
                    <div class="post-preview">
                        <a href="#">
                            <h2 class="post-title">
                                title
                            </h2>
                        </a>
                        <p class="post-meta">Posted by
                            <a href="#">Start Bootstrap</a>
                            {{ $post->content }}
                        </p>
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