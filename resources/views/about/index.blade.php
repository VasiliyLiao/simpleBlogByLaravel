@extends('layout.master')
@section('WebTitle','輕鬆學會laravel')
@section('context')
    
    @include('layout.compoent.bodyHead', ['img' => 'img/about-bg.jpg','blogTitle' => '關於我們','blogIntr' => '想了解更多嗎?'])

    <div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <p>大家好</p>
            <p>123456</p>
            <p>麥克風試音</p>
        </div>
    </div>
</div>

@endsection