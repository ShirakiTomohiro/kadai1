# kadai1

<?php
function sum ($max){
  //1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成する

  $result = $max*2;

return $result;

}

echo sum(100);
 ?>

<?php
function f($a,$b){
  //2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成する
  $result = $a + $b;
  return $result;
}
echo f(3,5);
?>


<?php
/*3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡して
その要素をすべてかけた結果を返す関数を作成する*/

function multtiple_array($arr){
  $result = 1;
  foreach ($arr as $a){
    $result = $result * $a;
  }
return $result;
}
$arr = array(1,3,5,7,9);
echo multtiple_array($arr);
?>


<?php
/*4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を
実装しようとしています。途中の部分を完成させてください。*/
$arr = array(1,2,3,4);
function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
$max_number = $arr[0];
foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 if($max_number < $a){
   $max_number = $a;
 }
}
return $max_number;
}
echo max_array($arr);
?>

<?php
//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
// ・strip_tags
$str = "<h1>strip_tagsB'zの</h1>"
. "<p>Live-GYMにようこそ!</p>";
echo strip_tags($str) ."\n";

//・array_push
$fruits = ["apple","orange","melon"];
array_push($fruits, "cherry");
print_r($fruits);

//・array_merge
$array1 = [5,6,7];
$array2 = [50,60,70];
$array3 = [500,600,700];
$array = array_merge($array1,$array2,$array3);
print_r($array);

//・time,gmmktime
$tm = mktime(19, 10,18,16,30,2019);
echo $tm;
echo "\n";

echo time();
echo "\n";

//・data
echo date('Y/m/d');
echo "\n";
echo date('Y年m月d日 H時i分s秒');
echo "\n";

echo date('Y-m-d H:i:s', 20);
?>
