<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>お問い合わせフォーム</title>
        <link href="styl.css" rel="stylesheet">
    </head>
    <body>
        <h1>お問い合わせフォーム</h1>
        
        <div class="error">
            <?php foreach($errors as $error){
                echo $error . '<br>';
            } ?>
        </div>

        <form method="POST" action="complete.php">
            <div class="flexbox">
                <div>
                <lavel>名前</lavel>
                <input type="text" name="name" value="<?php echo $name; ?>" placeholder="名前" >
                </div>

                <div>
                <lavel>携帯電話番号</lavel>
                <input type="text" name="tel" value="<?php echo $tel; ?>" placeholder="08012345678">
                </div>
            
                <div>
                <lavel>メールアドレス</lavel>
                <input type="email" name="email" value="<?php echo $email; ?>" placeholder="メールアドレス">
                </div>

                <div>
                <lavel>内容</lavel>
                <textarea name="form" rows="15" cols="40" placeholder="お問い合わせ内容を入力してください"><?php echo $form; ?></textarea>
                </div>
                <input class="btn" type="submit">
            </div>
        </form>