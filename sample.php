PHP スクリプトを実行します。

<?php

function br(){
    echo nl2br("\n"); //<br />タグが挿入される。
}
    
    

$number = rand();
if ($number % 2 == 0) {
    echo br(), $number,"は偶数です。",br();
}else {
    echo br(), $number,"は奇数です。", br();
}
?>

PHP スクリプト終わり。