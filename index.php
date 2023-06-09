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
    $host = getenv("HOST");
    $apikey = getenv("APIKEY");
    $state = getenv("STATE");
    var_dump($host);
    var_dump($apikey);
    var_dump($state);

  ?>
</body>
</html>