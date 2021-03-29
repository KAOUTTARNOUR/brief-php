<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex6.php" method="POST">
      <input type="text" name="HT" placeholder="saisir hors taxe">
      <input type="text" name="Ttva" placeholder="saisir taux tva">
      <input type="submit">
    </form>

<?php
  if(isset($_POST["HT"])&&isset($_POST["Ttva"])){
      $HT=$_POST["HT"];
      $Ttva=$_POST["Ttva"];
      $tva=$HT*($Ttva/100);
      $ttc=$HT+$tva;
      echo"tva=".$tva."ttc=".$ttc;
  }

?>
</body>
</html>