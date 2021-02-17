<!-- 投稿モーダル部分 -->
<div class="modal-wrapper">
    <div class="modal" style="background-color:white;">
        <div class="modal__form">
            <form class="upload__form" action="{{ route('store') }}" method="post" enctype="multipart/form-data" onSubmit="return checkSubmit()">
                @csrf
                <div class="upload__form_wrapper">
                    <div class="upload__content">
                        <input class="upload__form_item" type="text" placeholder="タイトル" name="title">
                    </div>
                    @if ($errors->has('title'))
                        <div class="text-danger">
                            {{ $errors->first('title') }}
                        </div>
                    @endif
                        <div class="upload__content">
                            <input class="upload__form_item" type="file" accept="image/*" name="file">
                            <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                        </div>
                    @if ($errors->has('file'))
                        <div class="text-danger">
                            {{ $errors->first('file') }}
                        </div>
                    @endif
                    <input class="btn" type="submit" value="投稿する">
                </div>
                <a href="{{ route('novels') }}">検索画面に戻る</a>
            </form>
        </div>
    </div>
</div>