<?php
$fh = "animals3.txt";   /*"index.html"は無理だった*/
$file_handle = fopen($fh,"x+");
// flock($file,LOCK_EX);  エラーするが、出来た

// echo fgets($file_handle);
fwrite($file_handle , "Wolf\n");
fclose($file_handle);
// echo fread()
echo "Wolfを追加しました。";


// 初期のコードで
//(a+時) 存在しないファイル名にすると新規作成する("animals3.txt"...)
// (a時)a+と変わらず
// rダメ
// r+＝一度だけ書き込む
// ｗ＝一度だけ書き込む。が、５回書いてあっても、一回に上書きする
// xとx+はファイルがない状態から作って書き込む。ファイルが既にあった場合はエラー。

// fget(ファイルハンドル)で$file_handle = fopen($fh,"r")（引数は必ず２個）;を使う。="r"が使えた。
// ～.txtに書いてある文字をブラウザに読み込む

// 「読み」と「書き」とあるが(a.r.w.x...)、書きはテキストに書き込み、読みはget()のように取得という意味だろう



