<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>回答内容</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  

  <div class="main">
    <div class="thanks-message"> 回答ありがとうございます。</div>
    <div class="display-contact">
      <div class="form-title">入力内容</div>

      <div class="form-item">■ 名前</div>
      <?php echo $_POST['name'] ?>

      <div class="form-item">■ メールアドレス</div>
      <?php echo $_POST['mail'] ?>

      <div class="form-item">■ 年齢</div>
      <?php echo $_POST['age'] ?>

      <div class="form-item">■ 本へのアプローチ方法</div>
      
      <?php echo $_POST['iriguchi'] ?>
      
      <div class="form-item">■ 本の処分方法</div>
      <?php echo $_POST['deguchi'] ?>
    </div>
  </div>
<?php
$name=$_POST["name"];
$mail=$_POST["mail"];
$age=$_POST["age"];
$iriguchi=$_POST["iriguchi"];
$deguchi=$_POST["deguchi"];

$str = $name.",".$mail.",".$age.",".$iriguchi.",".$deguchi."\n";
$file = fopen("data/data.csv","a");	// ファイル読み込み
flock($file, LOCK_EX);			// ファイルロック
fwrite($file, $str);
flock($file, LOCK_UN);			// ファイルロック解除
fclose($file);
?>
<li><a href="index.php">回答ページに戻る</a></li>
<li><a href="read.php">集計データを見る</a></li>
  
</body>
</html>