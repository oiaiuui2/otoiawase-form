<?php

if (empty($_POST['btn_login'])){
    require_once("../view/loginHtml.php");
    
// }elseif(empty($_POST['user'] && $_POST['pass'])){
//     require_once("../view/loginHtml.php");
}
else{
    $user = $_POST["user"];
    $pass = $_POST["pass"];

    //ログイン検証

    try{
        //接続試行
        $conn = new PDO("mysql:dbname=PETA_DB;host=localhost", $user, $pass);
        $stm = $conn ->prepare("select * from CONTACT");
        $stm->execute();

        require_once('../view/listHtml.php');
    }
    catch(Exception $e){
        require_once("../view/loginHtml.php");
        //接続失敗
        //echo('接続エラー' . $e->getMessage()); 
        exit;
    }  
    }
    unset($conn);

?>

