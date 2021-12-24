<?php



$title=$_GET["title"];
if(empty($title)){
    exit("まだ登録されていません");
}
$cid=mysqli_connect("vm2-db.sys.fit.ac.jp","common","ensyu2@Jnet");
mysqli_select_db($cid,"db_common");
$sql="select * from Apps where $title=title";
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
</head>
<body>
    <h3>詳細ページ</h3>
    <h3>画像:<?php echo $row["file"]?></h3>
    <h3>アプリ名:<?php echo $row["title"]?></h3>
    <h3>GithubのURL:<?php echo $row["giturl"]?></h3>
    <h3>Link:<?php echo $row["link"]?></h3>
    <h3>使用した技術:<?php echo $row["tech"]?></h3>
    <br>
    <h3>なぜ開発したのか:<?php echo $row["why"]?></h3>
    <br>
    <h3>こだわり:<?php echo $row["al"]?></h3>

    <form action="delete.php">
        <input type="submit" value="削除">
    </form>
</body>
</html>