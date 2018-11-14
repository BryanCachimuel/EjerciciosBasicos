<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Depreciacion Porcentual</title>
    </head>
    <body style="background-color :skyblue">
        <center>
            <h1> Depreciacion Porcentual de Bienes</h1><br>
            <form action="depreciacion_porcentual_calc.php">
            Nombre del bien: <input type="text" name ="nombre" required="true"><br/><br/>
            Valor (en dolares): <input type="text" name ="valor" required="true"><br/><br/>
            Vida util (en años): <input type="number" name ="vida" required="true"><br/><br/>
            Porcentaje depreciacion : <input type="text" name ="porcentaje" required="true"><br/><br/>

            <input type ="submit" values ="Calcular Depreciacion Porcentual">
                <center/>
    </body>
</html>
