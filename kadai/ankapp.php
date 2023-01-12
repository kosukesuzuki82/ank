
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
  <header>アンケートアプリ</header>
  <div>
  <form method="post" action="file_write.php">
    <div style="display:flex; width:30%; justify-content:space-between">
        <p>名前：</p>
        <input name="name">
    </div>
    <div style="display:flex; width:30%; justify-content:space-between">
        <p>年齢：</p>
        <input name="age"> 
    </div>
    <div style="display:flex; width:30%; justify-content:space-between">
        <p>メール：</p>
        <input name="mail"> 
    </div>
    <div style="display:flex; width:30%; justify-content:space-between">
        <p>好きな果物は?：</p>
        <input name="food">
    </div>
    <input type="submit" value="送信">
  </form>
  </div>
</body>
</html>
