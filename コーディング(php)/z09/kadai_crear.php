<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>完了</title>
  </head>
  <body>
    <body>
      <?php

      $_SESSION["name"] = $_POST["name"];
      $_SESSION["affiliation"] = $_POST["syozoku"];
      $_SESSION["opinions"] = $_POST["opinions"];
      if(isset($_POST['hobby'])){
        for($i = 0; $i < count($_POST['hobby']); $i++){
          $_SESSION["hobby"][$i] = $_POST['hobby'][$i];
        }
      }

    ?>
    <p>送信が完了しました。</p>
    <p>内容の確認は<a href="kadai_check.php">こちら</a></p>
    </body>
  </body>
</html>
