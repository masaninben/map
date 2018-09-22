<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <title> 回答一覧</title>
    </head>
    <body>
    <div class="contact-form">
        <?php
        $file = fopen('data/data.csv',"r"); 
        flock($file, LOCK_EX);
        ?>
        <table border="1">
        <tr>
        <td>名前</td>
        <td>メールアドレス</td>
        <td>年齢</td>
        <td>本へのアプローチ方法</td>
        <td>本の処分方法</td>
        </tr>
        <?php
        while($csv = fgetcsv($file)){       
        ?>
        <tr>
        <td><? echo $csv[0]; ?></td>
        <td><? echo $csv[1]; ?></td>
        <td><? echo $csv[2]; ?></td>
        <td><? echo $csv[3]; ?></td>
        <td><? echo $csv[4]; ?></td>
        </tr>
        <?
        }
        flock($file, LOCK_UN);
        fclose($file); 
        ?>
        </table>
    </div>
    
        <ul>
            <li><a href="index.php">回答ページに戻る</a></li>
        </ul>
    </body>
</html>