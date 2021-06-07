<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor de monedas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body style="background-color:#a1c2d1; padding-left: 25rem;">
    <h1 style="font-family:Sans-serif:">Coversos de Divisas</h1>
    <form action="divisas.php" method="POST">
    <table style="">
        <tr>
            <td >Cantidad:</td>
            <td><input type="number" name="cant"></td>
        </tr>
        <tr>
            <td>Moneda:</td>
            <td>
                <select name="dat">
                    <option value="1">Pesos</option>
                    <option value="2">Dolares</option>
                    <option value="3">Euros</option>
                </select>
            </td>
        </tr>
    </table>
    <input type="submit" value="Covertir">
    </form>
</body>
</html>
<?php
    if($_POST){
        $cant=$_POST['cant'];
        $dat=$_POST['dat'];

        if($dat==1){
         $dol=$cant/24.5;  
         $eur=$cant/30; 

         echo "<h2>Dolares ".round($dol,2)."</h2>";
         echo "<h2>Euros ".round($eur,2)."</h2>";
        }
        if($dat==2){
            $pes=$cant*24.5;
            $eur=$cant*24.5/30;
   
            echo "<h2>Pesos $".round($pes,2)."</h2>";
            echo "<h2>Euros ".round($eur,2)."</h2>";  
        }
        if($dat==3){
            $pes=$cant*30;
            $dol=$cant*30/24.5;
   
            echo "<h2>Pesos $".round($pes,2)."</h2>";
            echo "<h2>Dolares ".round($dol,2)."</h2>";  
        }



    }
?>