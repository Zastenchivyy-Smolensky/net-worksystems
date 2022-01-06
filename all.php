<html>
<head>
    <title>Sample1</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<?php
    $cid = mysqli_connect("vm2-db.sys.fit.ac.jp","common","ensyu2@Jnet");
    mysqli_select_db($cid, "db_common");
    if(mysqli_connect_errno()){
    printf("Fail: %s\n", mysqli_connect_error());
    }
    $sql = "select * from Apps;";
    $res = mysqli_query($cid,$sql);
    $num = mysqli_num_rows($res);
    ?>
<header>
        <div class="container">
            <div class="header-right">
                <p><a href="logout.php">logout</a></p>
                <p><a href="create.html">投稿</a></p>
            </div>
            <div class="header-left">
                <a href="index.html"><h2></h2></a>
            </div>
        </div>
    </header>
    <div class="check-form">
        <div class="container">
            <form action="all.php">
                <h1 class="display-4 text-primary" >制作物アプリ検索欄</h1>
                <label>検索:</label>
                <input type="text">
                <input type="submit" class="btn btn-primary" value="検索">
            </form>
        </div>
    </div>
        <table class="table">
            <tr>
                <td>アプリ名</td>
                <td>GitHubのリンク</td>
                <td>公開したアプリリンク</td>
                <td>削除</td>
                <td>修正</td>
            </tr>
        <?php
        while($row = mysqli_fetch_array($res))
        {
        ?>
    <tr>
        <td><a href="read.php?id=<?php echo $row["id"]?>" name="title" method="get"><?=htmlspecialchars($row["title"]) ?></a></td>
        <td><?=htmlspecialchars($row["giturl"]) ?></td>
        <td><?=htmlspecialchars($row["link"]) ?></td>
        <td><a href="delete.php?id=<?php echo $row["id"]?>" method="get">削除</a></td>
        <td><a href="update.html?id=<?php echo $row["id"]?>" method="get">修正</a></td>
    </tr>
    <?php
    }
    mysqli_close($cid);
    ?>
</table>
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
