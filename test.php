<?php
$a = "test";
echo <<<'_BODY_'
<h1> Nowdocとは？$a</h1>
<p> Nowdocとは変数展開がされないヒアドキュメントです。<br>
記述方法は1つ目の識別子をシングルクォートで囲みます。</p>
_BODY_;
