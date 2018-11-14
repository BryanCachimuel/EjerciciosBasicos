<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculo_IMC</title>
    </head>
    <body style="background-color :lightgreen">
       <center>
           <div id=" Resultados">
           <table border ="1" >   <br><br>         
               <h2>  CALCULO DE I.M.C.</h2>
        <?php
        $estatura=$_GET['estatura'];
         $peso=$_GET['peso'];        
         if($estatura==0){
         $imc="ERROR: ESTATURA CERO";
         }          
                 $imc=$peso/($estatura*$estatura);        
         if($imc<16){
             $mensaje=" Delgadez severa";
         }
         elseif ($imc>=16 && $imc<=16.99) {
             $mensaje="Delgadez moderada"   ;     
         }
        elseif ($imc>=17 && $imc<=18.4) {
             $mensaje="Delgadez aceptable"   ;     
         }
         elseif ($imc>=18.5 && $imc<=24.99) {
             $mensaje="Peso normal"        ;
         }
         elseif ($imc>=30 && $imc<=34.99) {
             $mensaje="Obeso: Tipo I"        ;
         }
         elseif ($imc>=35 && $imc<=40) {
             $mensaje="Obeso: Tipo II"        ;
         }
         elseif ($imc>40) {
             $mensaje="Obeso: Tipo III"        ;
         }
         else{
             $mensaje ="no definido";
         }
        ?>
                                  <tr>               
                                  <h2><td> EL I.M.C. ES: <?php echo $imc;  ?></td></h2><br>                                 
                                </tr>
                                <tr>  
                                <h3><td> MENSAJE: <?php echo $mensaje;  ?></td></h3>
                                </tr>  
           </table></div>
           <div id=" Valores de Relacion">
           <table border="2">
                                 <tr >               
                                  <h1><td BG COLOR="SKYBLUE">Indice corporal</td></h1><br>
                                  <h1><td  BG COLOR="SKYBLUE">Clasificacion</td></h1>
                                </tr>
                                
                                <tr>               
                                  <h2><td>menor a 16</td></h2><br>
                                  <h3><td>Delgadez Severa</td></h3>
                                </tr>
                                <tr>               
                                  <h2><td>16.00--16.99</td></h2><br>
                                  <h3><td>Delgadez Moderada</td></h3>
                                </tr>
                                <tr>               
                                  <h2><td>17.00--18.49</td></h2><br>
                                  <h3><td>Delgadez Aceptable</td></h3>
                                </tr>
                                <tr>               
                                  <h2><td>18.50--24.99</td></h2><br>
                                  <h3><td>Peso normal</td></h3>
                                </tr>
                                <tr>               
                                  <h2><td>25.00--29.99</td></h2><br>
                                  <h3><td>Sobrepeso </td></h3>
                                </tr>
                                <tr>               
                                  <h2><td>30.00--34.99</td></h2><br>
                                  <h3><td>Sobrepeso: tipo 1</td></h3>
                                </tr>
                                <tr>               
                                  <h2><td>35.00--40.00</td></h2><br>
                                  <h3><td>Sobrepeso: tipo 2 </td></h3>
                                </tr>
                                <tr>               
                                  <h2><td>mayor a 40</td></h2><br>
                                  <h3><td>Sobrepeso: tipo 3</td></h3>
                                </tr>
           </table></div>
<center/>
<h1><a href="index.php"> Volver a Index</a></h1>
    </body>
</html>
