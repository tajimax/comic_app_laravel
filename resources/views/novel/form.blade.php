@extends('layout')
@section('title', 'ブログ投稿')
@section('content')

<!-- 投稿モーダル部分 -->
<div class="modal-wrapper">
    <div class="modal" style="background-color:white;">
        <form class="upload__form" action="{{ route('store') }}" method="post" enctype="multipart/form-data" onSubmit="return checkSubmit()">
            @csrf
            <div class="upload__form_wrapper">
                <div class="upload__content">
                    <input class="upload__form_item" type="text" placeholder="タイトル" name="title">
                    <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                </div>
                @if ($errors->has('title'))
                    <div class="text-danger">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <div class="upload__content">
                    <input class="upload__form_item" type="file" accept="application/pdf" name="file">
                </div>
                @if ($errors->has('file'))
                    <div class="text-danger">
                        {{ $errors->first('file') }}
                    </div>
                @endif
                <div class="upload__content">
                    <select class="upload__form_item" type="text" placeholder="ジャンル" name="genre">
                        <option disabled selected value>ジャンルを選択してください</option>
                        <option value="恋愛">恋愛</option>
                        <option value="バトル">バトル</option>
                        <option value="ファンタジー">ファンタジー</option>
                    </select>
                </div>
                @if ($errors->has('genre'))
                    <div class="text-danger">
                        {{ $errors->first('genre') }}
                    </div>
                @endif
                <input class="btn" type="submit" value="投稿する">
            </div>
            <a href="{{ route('novels') }}">検索画面に戻る</a>
        </form>      
    </div>
</div>

<script>
    function checkSubmit(){
        if(window.confirm('送信してよろしいですか？')){
            return true;
        } else {
            return false;
        }
    }
</script>
@endsection