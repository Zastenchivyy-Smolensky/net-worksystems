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
    <title>詳細ページ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="container">
    
    <h3 class="display-4 text-primary" >詳細ページ</h3>
    <table class="table">
        
        <tr>
            <th>アプリ名</th>
            <th><?php echo $row["title"]?></th>
        </tr>
        <tr>
            <th>GithubのURL</th>
            <th><?php echo $row["giturl"]?></th>
        </tr>
        <tr>
            <th>リンク</th>
            <th><?php echo $row["link"]?></th>
        </tr>
        <tr>
            <th>使用した技術</th>
            <th><?php echo $row["tech"]?></th>
        </tr>
        <tr>
            <th>開発したきっかけ</th>
            <th><?php echo $row["why"]?></th>
        </tr>
        <tr>
            <th>こだわり</th>
            <th><?php echo $row["a1"]?></th>
        </tr>
            
    </table>
    

    <a href="update.html">編集ページへ</a>
    <a href="all.php">戻る</a>
</body>
</html>