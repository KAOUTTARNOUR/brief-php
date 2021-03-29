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
<input type="text" name="nom" placeholder="saisir votre nom " >
<input type="radio"  name="pr" value="M"> M 
<input type="radio"  name="pr" value="MME"> F
<input type="submit"  value="entrer">
</form>

<?php
 if(isset($_POST ["nom"])&&isset($_POST["pr"])){
     $nom=$_POST ["nom"];
     $pr=$_POST["pr"];
     if($pr=="M"){
         echo"bonjour MR .$nom";
     }elseif($pr=="MME"){
         echo"bonjour MME.$nom";
     }
 }

?>
</body>
</html>






