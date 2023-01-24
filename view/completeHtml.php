<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>お問い合わせ完了</title>
        <link href="styl.css" rel="stylesheet">
    </head>
    <body>
        <h1>お問い合わせ完了</h1>
        <p>お問い合わせが完了いたしました。</p>
        <p>内容をご確認ください。</p>
        
        <div class="joho">
            <div>
            <span>名前:</span>
            <?php 
            echo $name;
            ?>
            </div>

            <div>
            <span>携帯電話番:</span>
            <?php 
            echo $tel;
            ?>
            </div>

            <div>
            <span>メールアドレス:</span>
            <?php
            echo $email;
            ?>
            </div>

            <div>
            <span>お問い合わせ内容:</span>
            <?php
            echo $contents;
            ?>
            </div>
        </div>
        
    </body>
</html>