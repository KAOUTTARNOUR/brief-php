<!DOCTYPE html>
<html lang="en">
<head>
   <title>Document</title>
</head>
<body>
<form action="" method="GET">
     <input type="text" name="numero1" value="saisir numero1">
     <input type="text" name="numero2" value="saisir numero2">
     <select name="operation" >
     <option value="+">+</option>
     <option value="-">-</option>
     <option value="*">*</option>
     <option value="/">/</option>
     </select>
     <input type="submit" name="calc" value="calc">
     </form>
       
</body>
</html>
<?php  
   
      if(isset($_GET ["numero1"])&&isset($_GET["numero2"])&&isset($_GET["operation"])){
         $n1=$_GET ["numero1"];
         $n2=$_GET ["numero2"];
         $operation=$_GET["operation"];
         $result=0;
         if($operation=="+"){
            $result=$n1+$n2;
         }elseif($operation=="-"){
            $result=$n1-$n2;
         }elseif($operation=="*"){
            $result=$n1*$n2;
         }elseif($operation=="/"){
            $result=$n1/$n2;
         }
         echo"$result";
      }

   

   
?>










