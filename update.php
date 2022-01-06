<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require("update.html");
    $id=$_POST["id"];
    $file=$_POST["file"];
    $title=$_POST["title"];
    $giturl=$_POST["giturl"];
    $link=$_POST["link"];
    $tech=$_POST["tech"];
    $why=$_POST["why"];
    $a1=$_POST["a1"];

    $cid=mysqli_connect("vm2-db.sys.fit.ac.jp","common","ensyu2@Jnet");
        mysqli_select_db($cid,"db_common");
        $sql= "update Apps set FILE='{$file}', TITLE='{$title}',GITURL='{$giturl}',LINK='{$link}',TECH='{$tech}',WHY='{$why}',A1='{$a1}' where TITLE='{$title}';";
        $res=mysqli_query($cid, $sql);
        mysqli_close($cid);
    ?>
</body>
</html>