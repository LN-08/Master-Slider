<?php
include("redimensionarImg.php");

move_uploaded_file($_FILES['archivo']['tmp_name'],$_FILES['archivo']['name']);
move_uploaded_file($_FILES['archivo2']['tmp_name'],$_FILES['archivo2']['name']);
move_uploaded_file($_FILES['archivo3']['tmp_name'],$_FILES['archivo3']['name']);

$imagen1 = redimensionarImg($_FILES['archivo']['name'], 800, 500);
$imagen2 = redimensionarImg($_FILES['archivo2']['name'], 800, 500);
$imagen3 = redimensionarImg($_FILES['archivo3']['name'], 800, 500);

unlink($_FILES['archivo']['name']);
unlink($_FILES['archivo2']['name']);
unlink($_FILES['archivo3']['name']);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title> Slider </title>
    <link rel="stylesheet" href="estilos.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<body class="bodyy">

        <h1 class="titulo"> MASTER SLIDER </h1>

        <div class="contenedor">
            <input type="radio" id="1" name="imagen-slide" hidden/>
            <input type="radio" id="2" name="imagen-slide" hidden/>
            <input type="radio" id="3" name="imagen-slide" hidden/>

            <div class="slide">
                <div class="item-slide">
                <img src="<?php echo 'archivo/'.$imagen1; ?>">
                </div>

                <div class="item-slide">
                <img src="<?php echo 'archivo/'.$imagen2; ?>">
                </div>

                <div class="item-slide">
                <img src="<?php echo 'archivo/'.$imagen3; ?>">
                </div>
            </div>
        
            <div class="paginacion">
                <label class="paginacion-item" for="1">
                <img src="<?php echo 'archivo/'.$imagen1; ?>">
                </label>

                <label class="paginacion-item" for="2">
                <img src="<?php echo 'archivo/'.$imagen2; ?>">
                </label>

                <label class="paginacion-item" for="3">
                <img src= "<?php echo 'archivo/'.$imagen3; ?>" >
                </label>
            </div>
        </div>
</body>
       
<footer>
        <div class="footer-content">
            <h3 class="footer-h3"> GROUP 1 </h3>
            <p class="footer-p"> Alvarez Matias </p> </br>
            <p class="footer-p"> Fernandez Gabriel </p> <br>
            <p class="footer-p"> Samia Lian </p> <br>
        </div>               
</footer>
</html>


