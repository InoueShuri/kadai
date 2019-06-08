<?php

//課題１
$name = "Inoue";

if ($name == "Inoue"){
    echo "私はあなたの名前です"."\n";
} else {
    echo "あなたの名前ではありません"."\n";
}



//課題２
$a = 0;

for ($i = 1; $i <= 10000; $i++){
    $a += $i;
}

echo $a."\n";



//課題３
$fruits = [
    "シナノスイート",
    "洋梨タルト",
    "フェアトレードバナナ",
    "夕張メロン",
    "早生ミカン"
    ];
    
    foreach($fruits as $fruit){
        echo $fruit."\n";
    }



//課題４
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i < $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i."\n";
  }
}