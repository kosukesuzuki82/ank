
<!-- txtデータに書き込み -->
<?php
//データ取得
$name = $_POST["name"];
$age = $_POST["age"];
$mail = $_POST["mail"];
$food = $_POST["food"];
$date = date("Y/m/d H:i:s");

//ファイルを読み込む
$file = fopen("./data/data.csv","a+");
$list = array($name,$age,$mail,$food,$date);
//テキストへの記載方法 fwrite($file,$name." ".$age." ".$mail." ".$food." ".$date."\n");
//csvへの記載方法
fputcsv($file,$list);
fclose($file);
header("Location: ankread.php");
exit();
?>

<!-- csvへの書き込み -->
<?php
//データの配列格納

//ファイルを開く
// $file_csv = fopen("./data/data.csv","a+");

// ////////////////////////////////////////////
// //1行ずつ書き込み
// foreach($list as $fields){
//    fputcsv($fp,$fields);
// }
// fclose($file_csv);

// header("Location: ankread.php");
// exit();

?>



