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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1 class="display-4 text-primary">編集ページ</h1>
    </header>
    <div class="form">
        <form action="update.php" method="post">
            
            <table class="table">
                <div class="container mt-3">
                <label>アプリ名</label><br>
                <input class="form-control" type="text" name="title" value=<?php echo $row["title"] ?>><br>
                <p>githubのURL</p>
                <input class="form-control" type="text" name="giturl" value=<?php echo $row["giturl"]?>><br>
                <p>リンク</p>
                <input class="form-control" type="text" name="link" value=<?php echo $row["link"]?>><br>
                <label>技術(プログラミング言語)</label><br>
                <textarea name="tech" class="form-control" aria-label="With textarea"><?php echo $row["tech"]?></textarea><br>
                <h2>なぜ作ろうとしたのか</h2><br>
                <textarea name="why"  class="form-control" aria-label="With textarea"><?php echo $row["why"]?></textarea><br>
                <h2>こだわり</h2><br>
                <textarea name="a1" class="form-control" aria-label="With textarea"><?php echo $row["a1"]?></textarea><br>
                </div>
                    <input type="submit" value="編集" class="btn btn-primary mt-2">
            </table>
        </form>
    </div>
</body>
</html>