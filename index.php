<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simulador de préstamo</title>
  <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript" src="../js/functions.js"></script>
</head>
<body>
  <?php
    //putenv("HOST=lol");
    $host = $BASE_URL = getenv("HOST") == FALSE ? "/" : getenv("HOST");
    var_dump($host);
    echo '<br>hello world!!!';
  ?>
</body>
</html>