<!DOCTYPE html >
<html >
<head >
    <link rel = "stylesheet" type = "text/css" href = "estilos/style.css">
    <title> CATALOGO DE PRODUCTOS <head/title>
</head>
<body>
    <h1 class = " title"> TELEFONOS </h1>
    < class = "container">
        <?php
        include("conexion.php");
                $query " SELECT FROM telefonos " ;
                $resultado = $conexion-> query ($query) ;
                while($row = $resultado-> fetch_assoc()) {
                    ?>
                    <div class = "card">
                        <img src="data:image/jpg;base64, <? php echo base64_encode ($row ["imagen"]); ?>">
                        <h4> <?php echo $row ['nombre'];?> </h4>
                        <p> <?php echo $row ['descripcion']; ?></p>
                        <a href="#"> comprar </a>
                    </div>
                <?php
                    }
                    ?>
                </div>
                </body>
                </html>