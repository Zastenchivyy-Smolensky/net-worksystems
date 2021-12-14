<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="header-right">
                <p><a href="login.php">Log out</a></p>
                <p><a href="about.html">投稿</a></p>
                <p><a href="new.html">修正</a></p>
            </div>
            <div class="header-left">
                <a href="index.html"><h2>制作物アプリ</h2></a>
            </div>
        </div>
    </header>

    <form action="add.php" method="post">
        <label>画像</label>
        <input type="file" name="file">
        <label>アプリ題名</label>
        <input type="text" name="title">
        <label>技術(プログラミング言語)</label>
        <textarea name="tech" cols="30" rows="10"></textarea>

        <h2>なぜ作ろうとしたのか</h2>
        <textarea name="why" class="why-why"></textarea>
        <h2>こだわり</h2>
        <textarea name="a1"></textarea>
        <button>投稿</button>
    </form>

    

    <footer>
        <div class="footer-container">
            <div class="left">
                <h1>情報ネットワークシステム</h1>
            </div>
            <div class="right">
                <ul>
                    <li>情報システム工学科</li>
                    <li>20c2007</li>
                    <li>影山亮太</li>
                </ul>
            </div>
            
        </div>
    </footer>
    
</body>
</html>