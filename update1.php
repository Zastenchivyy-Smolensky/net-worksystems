<?php
    $id=$_GET["id"];
    if(empty($id)){
        exit("まだ登録されていません");
    }
    $cid=mysqli_connect("vm2-db.sys.fit.ac.jp","common","ensyu2@Jnet");
    mysqli_select_db($cid,"db_s001");
    $sql="select * from Apps where $id=id";
    $res=mysqli_query($cid,$sql);
    $row = mysqli_fetch_array($res);
    if(!$row){
        exit("ありません");
    }
    mysqli_close($cid);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="create.css">
    
</head>
<body>
    <header>
        <h1>データをアップロードする</h1>
    </header>
    <h3>データを入力してください</h3>
    <div class="form">
        <form action="update.php" method="post">
            
            <label>アプリ題名</label><br>
            <input type="text" name="title" value=<?php echo $row["title"] ?>><br>
            <p>githubのURL</p>
            <input type="text" name="giturl" value=<?php echo $row["giturl"]?>><br>
            <p>リンク</p>
            <input type="text" name="link" value=<?php echo $row["link"]?>><br>
            <label>技術(プログラミング言語)</label><br>
            <textarea name="tech" cols="30" rows="10"><?php echo $row["tech"]?></textarea><br>
            <h2>なぜ作ろうとしたのか</h2><br>
            <textarea name="why"  cols="30" rows="10" class="why-why"><?php echo $row["why"]?></textarea><br>
            <h2>こだわり</h2><br>
            <textarea name="a1" cols="30" rows="10"><?php echo $row["a1"]?></textarea><br>
            
            <button>投稿</button><br>
        </form>
    </div>
</body>
</html>