
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
  <header>アンケート結果</header>
<?php
$file = fopen("./data/data.csv", "r");
if($file){
  while ($line = fgets($file)) {
    echo $line;
    echo "<br>";
  };
};
//wordの数を集計
//データを配列に変換
$array = explode("\n",$file);
//格納する配列
$array_rel = [];
foreach($array as $key => $value){
  if($key == 0)continue;
  if(!$value)continue;
    $array_rel[] =explode(",",$value);
};
print($array_rel);


fclose($file);
?>
</body>
</html>
