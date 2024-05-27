<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>escape.php</title>
</head>

<body>
  <?php
  function h($data)
  {
    return htmlspecialchars($data, ENT_QUOTES, "UTF-8");
  }
  ?>
  <p>送られてきた氏名は「<?php echo h($_POST['name']); ?>」です。</p>
  <a href="escape.html">戻る</a> <!-- href="escape.html"に修正 -->
</body>

</html>