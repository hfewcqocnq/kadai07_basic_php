<?php
$kikkake = $_POST["kikkake"];
$motomeru = $_POST["motomeru"];
$kako = $_POST["kako"];
$sonota = $_POST["sonota"];
$c = ",";
$str = $kikkake.$c.$motomeru.$c.$kako.$c.$sonota;

$file = fopen("data.csv","a");
fwrite($file,$str."\n");
fclose($file);
// 上記3行でファイルへの書き込みから終了までを表す
// "\n"でcsv上で一行ごとに改行

header("Location: result.php");
exit;
// 処理完了後結果の画面へ戻す処理
?>

