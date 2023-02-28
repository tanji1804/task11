<?php

//1.
$name = "丹治";
if($name == "丹治"){
    echo "私は".$name."です";
}else{
    echo "あなたの名前ではありません";
}

//2.
$result = 0;
for($i = 1;$i <= 10;$i++){
  $result = $result + $i;
}
echo $result;

//3.
$fruits = ["apple","orange","grape","rasberry","blueberry"];
foreach($fruits as $fruit){
  echo $fruit."\n";
}

//4.
/* for文の始めの値を定義する /    終わりに*が無い
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i < $end; $i++){  //<だと100が含まれない

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i   //;が無い。改行されない。
  }
}

//以下が修正したもの。

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i."\n";
  }
}