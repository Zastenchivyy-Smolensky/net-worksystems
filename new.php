<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="new.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
        <?php
        require("new.html");
        $name=$_POST["name"];
        $mail=$_POST["email"];
        $password=$_POST["password"];
        $repassword=$_POST["repassword"];
        echo "サインイン完了しました"; 
        ?>
        <br>
        <?php
        $cid=mysqli_connect("vm2-db.sys.fit.ac.jp","common","ensyu2@Jnet");
        mysqli_select_db($cid,"db_common");
        $sql= "Insert into STUDENT values ('{$name}','{$mail}','{$password}','{$repassword}')";
        $res=mysqli_query($cid, $sql);
        mysqli_close($cid);
        ?>
    
    
</body>
</html>