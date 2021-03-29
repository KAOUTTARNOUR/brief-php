<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
<input type="submit" value="Vendre"  name="btn_vendre">
<input type="submit" value="Acheter" name="btn_acheter" >
<input type="submit" value="Louer" name="btn_louer" >
</form>
<?php
if(isset($_POST["btn_vendre"])){
  header('Location: exercice7.php'); 
}
if(isset($_POST["btn_acheter"])){
    header('Location: exercice5.php'); 
  }
  if(isset($_POST["btn_louer"])){
    header('Location: exercice6.php'); 
  }
?>
</body>
</html>