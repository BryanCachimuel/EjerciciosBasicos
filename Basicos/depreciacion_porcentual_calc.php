<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Depreciacion Porcentual</title>
    </head>
    <body style="background-color :skyblue">
          <center>
        <table border ="1" center>
                   <h2> Depreciacion Porcentual de Bienes</h2> 
            <tr>
                <th>VALOR</th>
                <th>VIDA</th>
                <th>AÑO</th>
            </tr>     
        <?php
          $nombre=$_GET['nombre'];
           $valor=$_GET['valor'];
              $vida=$_GET['vida'];
              $porcentaje=$_GET['porcentaje'];
              $anio=2016;
              for($i=$vida; $i>0; $i--){
                  echo  "<tr>.";
                  echo  "<td>".$valor."</td>";
                  echo  "<td>.$vida.</td>";
                  echo  "<td>.$anio.</td>";
                           "</tr>";
                  $vida--;
                  $anio++;  
                  $valor=$valor-$valor*$porcentaje/100;
              }
        ?>
        </table>
            <center/>
            <h1><a href="index.php"> Volver a Index</a></h1>
    </body>
</html>
