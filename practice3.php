<?php

/////課題１/////
//引数の2倍の値を返す関数double
function double($num){
    
    return $num*2;
    
}

echo double(1024)."\n";



/////課題２/////
//二つの引数を足す関数sum
function sum($a,$b){
    
    return $a + $b;
    
}

echo sum(1000,24)."\n";



/////課題３/////
//引数の配列の要素を全て掛ける関数alltimes
function alltimes($arr=[]){
    $value = 1;
    
    foreach($arr as $times){
        $value *= $times;
    }
    
    return $value;
}

$array = [1,3,5,7,9];
echo alltimes($array)."\n";



/////課題４/////
//配列の要素内で一番大きい値を返す関数max_array
 function max_array($arr){
    //とりあえず配列の最初の要素を最大として
    $max_number = $arr[0];
    
    //繰り返しながら要素内に更に大きい値がないか比較し
    foreach($arr as $a){
        if($max_number < $a){
            //あれば更新
            $max_number = $a;
        }
    }
    
    return $max_number;
 }
 
 $array = [10,20,30,512,50];
 echo max_array($array)."\n";
 
 
 
 /////課題５/////
 
 //strip_tags
 $text = '<h2 class="text-title">Infomation</h2><li>2019/05/01 2号店がドイツにてオープン！。</li>';
 echo strip_tags($text)."\n";
 
 //h2とliは許可する
 echo strip_tags($text,'<h2><li>')."\n";
 
 
 
 
 //array_push
 $array = [10,20,30,512,50];
 
 //最後に4096を追加
 array_push($array,4096);
 print_r($array);
 
 
 
 
 //array_merge
 $array1 = ["井","上"];
 $array2 = ["主","利"];
 $array3 = ["0","2"];
 
 //3つの配列をマージ
 $array4 = array_merge($array1,$array2,$array3);
 
 print_r($array4);
 
 
 
 
 //time
 //1970年からの経過年数を取得
 echo floor(time() / 60 / 60 / 24 / 365 ) . "年\n";
 
 //mktime
 //1970年からmktimeで引数に指定した日時までの経過秒数を取得
 echo mktime(1,0,0,1,1,1970)."秒\n";
 
 //date
 //タイムゾーンを東京に設定
 date_default_timezone_set('Asia/Tokyo');
 
 $w = date("w");
 $week = ["日", "月", "火", "水", "木", "金", "土"];
 echo date("Y年m月d日$week[$w]曜日H時i分s秒\n今月はt日あります")."\n";