<!--1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください-->-->-->
<?php
function times2($num){
    return $num * 2;
}
echo times2(5);


// <!--// 2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。-->

function sumab($a,$b){
    return $a + $b;
}
echo sumab(2,5);



//  <!--3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。-->

function product($arr){
    $result = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if($i == 0){
            $result += $arr[$i];
        }else{
            $result *= $arr[$i];
        }
    }
    return $result;
}

function pro($arr){
    $result = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
            $result *= $arr[$i];
    }
    return $result;
}
echo product(array(1,3,5,7,9));


// <!--function max_array($arr){-->
// <!--// とりあえず配列の最初の要素を一番大きい値とする-->
// <!-- $max_number = $arr[0];-->
// <!-- foreach($arr as $a){-->
// <!-- //どうしたらいいかわからない・・・・-->
// <!-- }-->

// <!-- return $max_number;-->
// <!-- }-->


function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number < $a){
         $max_number = $a;
     }
 }

 return $max_number;
 }
 
 echo max_array(array(6,2,3,10,5));
 ?>
 
 
 
 <!--strip_tags-->
 <?php
 $str ="<h1>strip_tags関数</h1>"."<p>タグ取り除くよ！</p>";
 echo strip_tags($str)."\n";
?>
 
 <!--array_push-->
 <?php
 $fruits = [0=>'apple', 1=>'orange', 2=>'pineapple'];
 
//連想配列をキーと値１次元配列に分解する
foreach($fruits as $key => $value){
  $fruits_key[] = $key;
  $fruits_val[] = $value;
}
 
//キーと値の配列それぞれに値を追加する
array_push($fruits_key, 3, 4);
array_push($fruits_val, 'banana', 'pineapple');
 
//array_combineでキーと値の配列をマージする
$fruits = array_combine($fruits_key, $fruits_val);
 
print_r($fruits);
?>

<!--array_merge-->
<?php
$items1 = ['item1', 'item2', 'item3'];
$items2 = ['item4', 'item5'];
$items3 = ['item6', 'item7'];
 
//配列を結合する
$item_merge = array_merge($items1, $items2, $items3);
 
print_r($item_merge);
?>

<!--time-->
<?php
//現在のタイムスタンプを取得
echo '現在のUnixタイムスタンプ：'.time();
 
echo '<br>';
 
//3日後のタイムスタンプを取得
$nweek = time() + (3 * 24 * 60 * 60);
echo '3日後のUnixタイムスタンプ：'.$nweek;
?>

<!--mktime-->
<?php
//指定した日時のタイムスタンプを取得
$timestamp = mktime(0, 0, 0, 8, 1, 2017);
echo $timestamp;
?>

<!--date-->
<?php
// 現在日付をフォーマットする
echo date('Y/m/d');
echo '<br>';
 
// 現在日時をフォーマットする
echo date('Y-m-d H:i:s');
echo '<br>';
echo date('Y年m月d日 H時i分s秒');
echo '<br>';
?>

<?php
 
echo date('Y-m-d H:i:s', 10);
 
?>

