<?php

//1.
$a = 3;
$b = 7;
echo $a +$b;

//2.
$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7];

//3.
$hello = "Hello, ";
$name = "丹治";
$world = "'s World!";
echo $hello.$name.$world;

//4.
$tech_boost = "tech";
$tech_boost = $tech_boost. " boost";
echo $tech_boost;

//5.
$2018_calendar = {  //変数の先頭が数字になっている。{}でなく[]
  "January" => "1月",
  "February" => "2月"、 //、でなく,
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" = "6月",   //>が無い
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => 10月,    //""が無い
  "November" => "11月",
  "December" => "12月"
};

// 12月を表示する
echo $2018_calendar[December];  //キーに""がついていない

//以下が修正したもの
$y2018_calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $y2018_calendar["December"];