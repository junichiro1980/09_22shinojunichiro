<?php

//1. データ取得
$id   = $_GET["id"];

//2. DB接続します(エラー処理追加)
include("kadai-functions.php");
$pdo = db_kadaiconn();


//３．データ登録SQL作成
$stmt = $pdo->prepare("DELETE FROM gs_bm_table WHERE id=:id");
$stmt->bindValue(':id', $id);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  errorMsg($stmt);
}else{
  //５．index.phpへリダイレクト
  header("Location: kadai-select.php");
  exit;
}

//SESSIONチェック＆リジェネレイト
function chk_ssid(){
  if(!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"]!=session_id()){
    exit("Login Error.");
  }else{
    session_regenerate_id(true);
    $_SESSION["chk_ssid"]=session_id();

  }
}







?>



