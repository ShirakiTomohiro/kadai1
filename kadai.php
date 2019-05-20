# kadai1

<?php
$name = "Shiraki Tomohiro";
if ($name = "Shiraki Tomohiro") {
 echo "私は　あなたの名前　です";
} else {
 echo "あなたの名前ではありません";
}
?>

<?php
$total = 0;
echo $total;
for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;
?>

<?php
$fruits = array("りんご","みかん","もも","すいか","さくらんぼ");
 foreach($fruits as $fruit){
   echo $fruit;
   echo "\n";
 }
?>

<?php
// for文の初めの値を定義する
$start = 1;
//for文の終わりの値を定義する。
$end = 100;

for($i=1; $i<=100; $i++) {

// 5で割り切れたら{}内を実行する
if ($i % 5 == 0) {
  echo $i;
  echo "\n";
   }
}
?>

