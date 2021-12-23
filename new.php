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
        
        $name=$_POST["name"];
        $mail=$_POST["email"];
        $password=$_POST["password"];
        echo "サインイン完了しました"; 
        ?>
        <br>
        <?php
        $cid=mysqli_connect("vm2-db.sys.fit.ac.jp","common","ensyu2@Jnet");
        mysqli_select_db($cid,"db_common");
        $sql= "Insert into Users values ('{$name}','{$mail}','{$password}')";
        $res=mysqli_query($cid, $sql);
        mysqli_close($cid);
        ?>
        <?php
          if (isset($_SESSION["error_status"])) {
            if ($_SESSION["error_status"] == 1) {
              echo "<h2 style='color:red;'>入力内容に誤りがあります。</h2>";
            }
            if ($_SESSION["error_status"] == 2) {
              echo "<h2 style='color:red;'>IDは既に登録されています。</h2>";
            }
            if ($_SESSION["error_status"] == 3) {
              echo "<h2 style='color:red;'>タイムアウトか不正な URL です。</h2>";
            }
            if ($_SESSION["error_status"] == 4) {
              echo "<h2 style='color:red;'>登録に失敗しました。</h2>";
            }
            if ($_SESSION["error_status"] == 5) {
              echo "<h2 style='color:red;'>パスワードは既に登録されています。</h2>";
            }
          }
        ?>
    
    
</body>
</html>