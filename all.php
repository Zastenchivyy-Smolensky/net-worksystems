<html>
<head>
  <title>Sample1</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="index.css">

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
                <p><a href="create.php">投稿</a></p>
            </div>
            <div class="header-left">
                <a href="index.html"><h2></h2></a>
            </div>
        </div>
    </header>
    <div class="check-form">
        <div class="container">
            <form action="all.php">
                <h1>制作物アプリ検索欄</h1>
                <label>検索:</label>
                <input type="text">
                <input type="submit" value="検索">
            </form>
        </div>
    </div>
<table border="1">
  <tr><td>アプリ名</td><td>GitHubのリンク</td><td>公開したアプリリンク</td></tr>
<?php
while($row = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><a href="read.html" method="get"><?=htmlspecialchars($row["title"]) ?></a></td>
    <td><?=htmlspecialchars($row["giturl"]) ?></td>
    <td><?=htmlspecialchars($row["link"]) ?></td>
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
