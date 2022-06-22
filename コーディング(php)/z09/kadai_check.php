<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>確認</title>
  </head>
  <body>
    <body>
    <?php

    print "氏名：".$_SESSION["name"]."<br>";
    print "趣味：";

    if(isset($_SESSION["hobby"])){
    for($i = 0; $i < count($_SESSION["hobby"]); $i++){
      print $_SESSION["hobby"][$i]."、";
    }
    print "<br>";
    }else{
    print "<br>";
    }

    print "所属：".$_SESSION["affiliation"]."<br>";
    print "ご意見：".$_SESSION["opinions"]."<br>";

    session_destroy();
    ?>
    もう一度アンケートを送信する場合は<a href="z09_web10_tsukahara_2.php">こちらへ</a>
    </body>
  </body>
</html>
