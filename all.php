<?php
    $cid = mysqli_connect("vm2-db.sys.fit.ac.jp","common","***");
    mysqli_select_db($cid, "db_common");
    if(mysqli_connect_errno()){
    printf("Fail: %s\n", mysqli_connect_error());
    }
    $sql = "select * from apps;";
    $res = mysqli_query($cid,$sql);
    $num = mysqli_num_rows($res);
    echo "<p>{$num}件のデータが登録されています。</p>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="header-right">
                <p><a href="index.html">logout</a></p>
                <p><a href="create.php">投稿</a></p>
                <p><a href="update.php">修正</a></p>
            </div>
            <div class="header-left">
                <a href="index.html"><h2>${User}</h2></a>
            </div>
        </div>
    </header>

    <div class="container1">
        <table>
            <tr>
                <th>画像</th>
                <th>タイトル</th>
                <th>技術</th>
            </tr>
            <?php 
            foreach($apps as $app):
            ?>
            
            <?php endforeach?>
        </table>
    </div>

    

    <footer>
        <div class="footer-container">
            <div class="left">
                <h1>情報ネットワークシステム</h1>
            </div>
            <div class="right">
                <ul>
                    <li>情報システム工学科</li>
                    <li>20c2007</li>
                    <li>影山亮太</li>
                </ul>
            </div>
            
        </div>
    </footer>
    
</body>
</html>