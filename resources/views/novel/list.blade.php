@extends('layout')
@section('content')
<div class="tab-wrapper">
    <div class="tab-nav flex">
        <div class="tab-nav__item">小説</div>
        <div class="tab-nav__item">イラスト</div>
    </div>
    <!-- 小説コンテンツ部分 -->
    <div class="tab-content">
        <div class="tab-content__item">
            <!-- コンテンツ部分 -->
            <div class="tab-content2">
                <div class="grid">
                    <div class="posted-novel flex">
                        <div class="posted-work__novel-img-wrapper">
                            <img class="posted-work__img" src="#">
                        </div>
                        <div class="posted-work__novel-content-wrapper">
                            <a class="posted-work__ttl" href="#"></a>
                            <a class="posted-work__author" href="#"></a>
                            <a class="posted-work__genre" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection