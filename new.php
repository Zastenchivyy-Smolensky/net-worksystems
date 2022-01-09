<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="new.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script>
        function conrim(){
            var name=document.getElementById("id").value;
            var mail=document.getElementbyId("mail").value;
            var password = document.getElementById("password").value;
            if ((name=="")||(mail="")||(password="")){
                alert("項目が空欄の箇所があります");
                return false;
            }
            if (password<3){
                return confirm('パスワード強度が弱いですがよろしいですか?')
            }
            return true;
        }
    </script>
</head>
<body>
        
    
        <?php
        require("new.html");
        session_start();
        $id=$_POST["id"];
        $name=$_POST["name"];
        $mail=$_POST["email"];
        $password=$_POST["password"];
        ?>
        <br>
        <?php
        $cid=mysqli_connect("vm2-db.sys.fit.ac.jp","common","ensyu2@Jnet");
        mysqli_select_db($cid,"db_s001");
        $sql= "Insert into Users values ('{$id}','{$name}','{$mail}','{$password}')";
        $res=mysqli_query($cid, $sql);
        mysqli_close($cid);

        ?>
    
    
</body>
</html>