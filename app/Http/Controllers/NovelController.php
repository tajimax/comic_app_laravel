<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Novel;

class NovelController extends Controller
{
    // 小説一覧を表示
    public function showList() {
        $data = [
            'title' => 'aaa',
            'author' => '111'
        ];
        return view('novel.list', $data);
    }

    // 小説投稿画面を表示
    public function showCreate() {
        return view('novel.form');
    }

    public function exeStore(Request $reqest) { 
        dd($all = $reqest->all());
        return;
        Novel::create();

        \Session::flash('err_msg', '小説を投稿しました。');
        return redirect(route('novels'));
    }
}




// // 画像を保存
// // 画像のデータを定義
// $file = $_FILES['file'];
// $filename = basename($file['name']);
// $tmp_path = $file['tmp_name'];
// $file_err = $file['error'];
// $filesize = $file['size'];

// // pdfの保存先を指定
// $upload_dir = '../pdfs/';
// //保存したファイルを定義
// $save_filename = date('YmdHis').$filename;

// //pdfファイルのサイズが１MB未満か
// if($filesize > 1048576 || $file_err == 2) {
//     echo 'ファイルのサイズは１MB未満にして下さい。';
// }

// // 拡張子はpdf形式か
// $allow_ext = array('pdf');
// $file_ext = pathinfo($filename, PATHINFO_EXTENSION);

// if(!in_array(strtolower($file_ext), $allow_ext)){
//     echo 'pdfファイルを添付して下さい。';
// }

// //ファイルはあるかどうか
// if (is_uploaded_file($tmp_path)){
//     if(move_uploaded_file($tmp_path, $upload_dir.$save_filename)) {
//         echo $filename.'をアップしました。';
//     }else{
//         echo'ファイルを保存できませんでした。';
//     }
// }else {
//     echo 'ファイルが選択されていません。';
// }