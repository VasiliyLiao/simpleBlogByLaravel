@extends('layout.master')
@section('WebTitle','輕鬆學會laravel')
@section('context')
    
    @include('layout.compoent.bodyHead', ['img' => $img,'blogTitle' => '熱門文章','blogIntr' => '快來查詢'])

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @foreach(range(1,5) as $value)
                <div class="post-preview">
                    <a href="{{ route('posts.show',$value) }}">
                        <h2 class="post-title">
                            阿公天天起來做運動
                        </h2>
                        <h3 class="post-subtitle">
                            閃到腰
                        </h3>
                    </a>
                    <p class="post-meta">更新於<a href="#">阿公</a> {{ date('Y/M/H') }}</p>
                </div>
                @endforeach

                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection
    

