<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action=" " method="POST">
<input type="text" name="a">
<input type="text" name="b">
<input type="submit">
</form>
<?php 
if(isset($_POST["a"])&&isset($_POST["b"])){
    $a=$_POST["a"];
    $b=$_POST["b"];
    for ($i=0; $i <$b ; $i++) { 
     echo "$a * $i =  " .$a * $i."<br>";
    }
}

?>
    
</body>
</html>