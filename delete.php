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
        require("app/index.html");
        require("app/all.php");
        
        echo "このプロダクトを削除します";
        $cid=mysqli_connect("vm2-db.sys.fit.ac.jp","common","ensyu2@Jnet");
        mysqli_select_db($cid,"db_common");
        $sql="delete from Users where title='{$title}';";
        $res=mysqli_query($cid,"db_common");
        mysqli_close($cid);
    ?>
</body>
</html>