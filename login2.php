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
        $name=$_POST["name"];
        $mail=$_POST["email"];
        $password=$_POST["password"];
        $mem=[
            "name"=>"1",
            "mail"=>"1",
            "password"=>"1"
        ];
        
            if($mem["name"]==$name){
                if($mem["mail"]==$mail){
                    if($mem["password"]==$password){
                        echo("ログイン完了");
                    }
                }
            }else{
                echo "違います";
            }
    ?>
</body>
</html>