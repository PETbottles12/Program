<!DOCTYPE html>
  <title>結果</title>
  <meta charset="utf-8">
  <link href="fun.css" rel="stylesheet" type="text/css" media="all">
  <body>
    <p>計算結果は！！でれでれ〜〜〜でん！！！</p>
<?php


$num = null;
$num1 = null;
$num2 = null;
$num = $_POST['text1']; //HTMLからPOST
$num1 = $_POST["sentaku"]; //HTMLから選択をPOST


if(!isset($_POST['sex']) || $_POST['sex']== ""){
  print "性別を入れてください。";
}

elseif(preg_match("/^[0-9]+$/",$num)){ //数字のパターンマッチ
$num2 = $_POST['sex'];//POSTのデータを代入
$num = $num/$num1;
print "あなたの支払金額は";
print '<span class="big">'.ceil($num).'</span>'; //強制的に数字を切り上げ
print "円です。";

print "性別は";
print '<span class="big">'.$num2.'</span>';
print "性です。";

}else{
  print "数字いれなさいよ！！！"; //例外処理
}



 //var_dump($num ,$num1 ,$num2); //デバックチェック

 ?>
</body>
</html>
