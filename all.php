<html>
<head>
  <title>Sample1</title>
  <meta charset="UTF-8">
</head>
<body>
<h2>PHPを用いたDBへのアクセス例1</h2>
<p> STUDENTテーブルの内容を表示します。</p>
<?php
$cid = mysqli_connect("vm2-db.sys.fit.ac.jp","common","ensyu2@Jnet");
mysqli_select_db($cid, "db_common");
if(mysqli_connect_errno()){
  printf("Fail: %s\n", mysqli_connect_error());
}
$sql = "select * from Apps;";
$res = mysqli_query($cid,$sql);
$num = mysqli_num_rows($res);
echo "<p>{$num}件のデータが登録されています。</p>";
?>

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

</body></html>
