@extends('layouts.front')

@section('content')
    <div class="container">
        <h2 class="text-center">プロフィール一覧</h2>
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="name" >
                                    <p>名前： {{ str_limit($post->name, 40) }} </p>
                                </div>
                                <div class="gender">
                                    <p>性別： {{ str_limit($post->gender, 12) }} </p>
                                </div>
                                <div class="hobby">
                                    <p>趣味： {{ str_limit($post->hobby, 50) }} </p>
                                </div>
                                <div class="introduction">
                                    <p>自己紹介： {{ str_limit($post->introduction, 400) }} </p>
                                <hr color="#c0c0c0">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection