<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body style="background-color :limegreen">
    <center>
        <table border ="1" center>
                   <h2> Depreciacion  de Bienes </h2><br/>
            <tr>
                <th>VALOR</th>
                <th>VIDA</th>
                <th>AÑO</th>
            </tr>            
        <?php
        $nombre=$_GET['nombre'];
           $valor=$_GET['valor'];
              $vida=$_GET['vida'];
              $anio=2016;  
              for($i=$vida; $i>0; $i--){
                  echo  "<tr>";
                  echo  "<td>".$valor."</td>";
                  echo  "<td>".$vida."</td>";
                  echo  "<td>".$anio."</td>";
                   echo  "</tr>";
                  $vida--;
                  $anio++;  
                  $valor=$valor*0.7;
              }
        ?>
            </table>
        <h1><a>La deprecicion constante es 30%</a></h1>
        <h1><a href="index.php"> Volver a Index</a></h1>
            <center/>
    </body>
</html>
