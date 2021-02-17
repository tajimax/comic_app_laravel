@extends('layout')
@section('title', '作品一覧')
@section('content')
<div class="tab-wrapper" id="js-tab">
    <div class="tab-nav flex">
        <div class="tab-nav__item active" data-nav="0">小説</div>
        <div class="tab-nav__item" data-nav="1">イラスト</div>
    </div>
    <!-- 小説コンテンツ部分 -->
    <div class="tab-content">
        <div class="tab-content__item">
            <!-- コンテンツ部分 -->
            <div class="tab-content2 active" data-content="0">
                @include('components.novel_list')
            </div>
            <div class="tab-content2" data-content="1">
                @include('components.comic_list')
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('/js/tab.js') }}"></script>
@endsection