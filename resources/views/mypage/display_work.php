<?php

require_once('db_connect.php');

// 小説を表示する処理
class DisplayWorks{
    public static function displayNovelTable(){
        $dbh = dbConnect();
        $allGenre = $dbh -> query('SELECT * FROM novels_table');
        $romance = $dbh -> query('SELECT * FROM novels_table WHERE genre = "恋愛"');
        $fantasy = $dbh -> query('SELECT * FROM novels_table WHERE genre = "ファンタジー"');
        $battle = $dbh -> query('SELECT * FROM novels_table WHERE genre = "バトル"');
        $NovelGenres = array($allGenre, $romance, $fantasy, $battle);

        if(isset($_POST['title'])) {
            // タイトル検索のための変数定義
            $title = $_POST['title'];
            // 小説をジャンル別かつタイトルも一致で検索
            $dbh = dbConnect();
            $allGenre = $dbh -> prepare('SELECT * FROM novels_table WHERE title LIKE "%":title"%"');
            $romance = $dbh -> prepare('SELECT * FROM novels_table WHERE genre = "恋愛" AND title LIKE "%":title"%"');
            $fantasy = $dbh -> prepare('SELECT * FROM novels_table WHERE genre = "ファンタジー" AND title LIKE "%":title"%"');
            $battle = $dbh -> prepare('SELECT * FROM novels_table WHERE genre = "バトル" AND title LIKE "%":title"%"');
    
            //インジェクション攻撃への対策にプレースホルダ設定
            $allGenre-> bindValue(':title', $title, PDO::PARAM_STR);
            $romance -> bindValue(':title', $title, PDO::PARAM_STR);
            $fantasy -> bindValue(':title', $title, PDO::PARAM_STR);
            $battle -> bindValue(':title', $title, PDO::PARAM_STR);
    
            //sqlを実行
            $allGenre -> execute();
            $romance -> execute();
            $fantasy -> execute();
            $battle -> execute();

            $NovelGenres = array($allGenre, $romance, $fantasy, $battle);
        }
        
        return $NovelGenres;
    }

    public static function displayIllustTable(){
        // イラストを表示する処理
        $dbh = dbConnect();
        $comics = $dbh -> query('SELECT * FROM comics_table');
        $genres = array($comics, $comics);
        return $genres;
    }
}

