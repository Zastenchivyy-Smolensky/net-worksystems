<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
        
        $title=$_GET["title"];
        $cid=mysqli_connect("vm2-db.sys.fit.ac.jp","common","ensyu2@Jnet");
        mysqli_select_db($cid,"db_common");
        $sql="delete from Apps where title='{$title}';";
        $res=mysqli_query($cid,$sql);
        mysqli_close($cid);
        header("Location:all.php");
    ?>
</body>
</html>