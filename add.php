
<?php
    $apps=$_POST;
    
    if(empty($apps["file"])){
        exit('ファイルを添付してください');
    }
    if(empty($apps["title"])){
        exit('タイトルを記述してください');
    }
    if(empty($apps["tect"])){
        exit('技術面を記述してください');
    }
    if(mb_strlen($apps["title"])>10){
        exit("長すぎます.");
    }
    if(empty($apps["why"])){
        exit('入力必須となっています');
    }
    if(empty($apps["a1"])){
        exit('入力必須となっています');
    }
    
    
?>
