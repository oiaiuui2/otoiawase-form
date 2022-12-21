<?php
$name = $_POST["name"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$form = $_POST["form"];

$errors = [];

if(empty($name)){
    $errors[] = "名前が未入力です。";
}

if(empty($tel)){
    $errors[] = "携帯電話番号が未入力です。";
}

if(empty($email)){
    $errors[] = "メールアドレスが未入力です。";
}


if(empty($form)){
    $errors[] = "内容が未入力です。";
}

if(count($errors)>0){
    require_once("view/indexHtml.php");
    exit;
}

$conn = new PDO("mysql:dbname=PETA_DB;host=localhost", "ochiai", "mymy567my");
$stm = $conn->prepare("insert into CONTACT(ID,NAME,EMAIL,TEL,CONTENTS,CREATED_AT) value(?,?,?,?,?,?)");
$stm->execute([$id, $name, $email, $tel, $contents, date("Y-m-d H:i:s")]);

require_once("view/completeHtml.php");

unset($stm, $conn);


?>