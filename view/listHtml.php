<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>
<body>
    <h1>データ</h1>

<table border="1" cellspacing="0" width="1200">
    <tr>
        <th>名前</th>
        <th>メルアドレス</th>
        <th>電話番号</th>
        <th>内容</th>
        <th>お問い合わせ日</th>
    </tr>
        <?php 
        while($row = $stm->fetch(PDO::FETCH_ASSOC)){
        ?>
    <tr align="center">    
        <td><?=htmlentities($row["name"],ENT_QUOTES|ENT_SUBSTITUTE|ENT_HTML401, "UTF-8") ?></td>
        <td><?=htmlentities($row["email"],ENT_QUOTES|ENT_SUBSTITUTE|ENT_HTML401, "UTF-8") ?> </td>
        <td><?=htmlentities($row["tel"],ENT_QUOTES|ENT_SUBSTITUTE|ENT_HTML401, "UTF-8") ?></td>
        <td><?=htmlentities($row["contents"],ENT_QUOTES|ENT_SUBSTITUTE|ENT_HTML401, "UTF-8") ?></td>
        <td><?=htmlentities($row["created_at"],ENT_QUOTES|ENT_SUBSTITUTE|ENT_HTML401, "UTF-8") ?></td>
    </tr>
        <?php } ?>
</table>

</body>
</html>

