<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link href="styl.css" rel="stylesheet">
</head>
<body>
    <h1>ログイン</h1>


    <?php
    if(isset($e)){
        echo"接続エラーがおきました。";
    }
    ?>

    <form method="POST" action="../htdocs/admin.php">
        <div class="login">
            <lavel>ユーザー名</lavel>
            <input type="text" name="user">

            <lavel>パスワード</lavel>
            <input type="password" name="pass">
        </div>

        <input class="btn" type="submit" name="btn_login">
    </form>
    
</body>
</html>