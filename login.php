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
    require("login.html");
    $name=$_POST["name"];
    $mail=$_POST["email"];
    $password=$_POST["password"];
    $cid=mysqli_connect("vm2-db.sys.fit.ac.jp","common","ensyu2@Jnet");
    mysqli_select_db($cid,"db_common");
    $sql="select * from Users";
    
    $res=mysqli_query($cid,$sql);
    $num = mysqli_num_rows($res);
    mysqli_close($cid);
    
    while($ma=mysqli_fetch_array($res)){
    if($ma["name"]==$name){
        if($ma["mail"]==$mail){
            if($ma["passport"]==$password){
                echo "ログイン完了しました";
                header("Location: all.php");
                exit;
            }
        }
    }else{
        echo "メールアドレスまたはパスワードが違います";
        header("Location: login.html" );
    }
}
    
    
    ?>
    
    
</body>
</html>