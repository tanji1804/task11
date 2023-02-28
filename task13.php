<?php

//1.
function double($n){
  return $n * 2;
}
echo double(8);

//2.
function add($a, $b){
  return $a + $b;
}
echo add(2,9);

//3.
function multiply($arr){
  $n = 1;
  foreach($arr as $value){
    $n *= $value;
  }
  return $n;
}
echo multiply(array(1,3,5,7,9));

//4.
function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $value){
    // ここで配列の中の1番大きい値を探したい
    if($max_number <= $value){
      $max_number = $value;
    }
  }

  return $max_number;
}

//5.

//strip_tags  文字列からHTMLおよびPHPタグを取り除く
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
//結果 Test paragraph. Other text

//array_push　一つ以上の要素を配列の最後に追加する
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
/*結果
Array
(
    [0] => orange
    [1] => banana
    [2] => apple
    [3] => raspberry
)
*/

//array_merge　入力配列が同じキー文字列を有していた場合、後の値が前の値を上書きする。配列が同じキーの場合、値は追記される。
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
/* 結果
    [color] => green
    [0] => 2
    [1] => 4
    [2] => a
    [3] => b
    [shape] => trapezoid
    [4] => 4
*/

//time　現在時刻をUnixエポック(1970年1月1日00:00:00GMT)からの通算秒として返す。(タイムスタンプ)
echo 'Now: '. time();
//結果　Now: 1677590024

//mktime　与えられた引数に従って UNIX のタイムスタンプを返す。month,day,yearの順になる。
date_default_timezone_set('UTC');
echo mktime(1, 2, 3, 4, 5, 2006);
//結果　1144198923

//date　与えられたフォーマット文字列によりフォーマットし、日付文字列を返す。
date_default_timezone_set('UTC');
echo date('c', mktime(1, 2, 3, 4, 5, 2006));
//結果　2006-04-05T01:02:03+00:00
echo date('c',1144198923);
//結果　2006-04-05T01:02:03+00:00