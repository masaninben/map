
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>アンケート</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <div class="main">
    <div class="contact-form">
      <div class="form-title">本に関するアンケート</div>
      <form action="post_write.php" method="post" >
<!-- name -->
        <div class="form-item">名前</div>
        <input type="text" name="name" placeholder="未入力" >
<!-- mail -->
        <div class="form-item">メールアドレス</div>
        <input type="text" name="mail" placeholder="未入力">
<!-- age -->
        <div class="form-item">年齢</div>
        <select name="age">
          <option value="未選択">選択してください</option>
            <?php 
                for($i=18;$i<51;$i++){
                echo "<option value='$i'>$i</option>";
                }
            ?>
        </select>
<!-- iriguchi -->
        <div class="form-item">本へのアプローチ方法</div>
            <?php 
            $books = array('本屋さん','インターネットショッピング','電子書籍', '図書館','周りの人', 'その他');
            ?>
            <input type="radio" name="iriguchi" value="読まない" checked='checked'>そもそも読まない
            <?php foreach($books as $book){
            echo "<input type='radio' name='iriguchi' value='$book' >$book";
            } 
            ?>
<!-- deguchi -->
        <div class="form-item">本の処分方法</div>
        <?php 
            $shobuns = array('本屋に売る', 'Webサービスで売る', '燃えるゴミ', '古紙回収', '誰かに譲る','ずっと所有');
            ?>
        <input type="radio" name="deguchi" value="持っていない" checked='checked'>持っていない
            <?php foreach($shobuns as $shobun){
            echo "<input type='radio' name='deguchi' value='$shobun'>$shobun";
            } 
            ?>
        
<br>
        <input type="submit" value="送信">
      </form>
      <li><a href="read.php">集計データを見る</a></li>
    </div>
  </div>
  
  
</body>
</html>