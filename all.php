<?php session_start();
        // if(isset($_SESSION["name"])&& $_SESSION["time"]+3600>time()){
        //     $_SESSION["time"]=time();
        // }else{
        //     header("Location: login.html");
        //     exit();
        // }
        ?>
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
        $cid=mysqli_connect("vm2-db.sys.fit.ac.jp","common","ensyu2@Jnet");
        mysqli_select_db($cid,"db_common");

        $sql='SELECT * FROM Apps;';
        $apps=mysqli_query($cid,$sql);
        $result = mysqli_free_result("title");
        echo $result
        ?>
    
    </body>
</html>