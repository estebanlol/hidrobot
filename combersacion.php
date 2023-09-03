<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title> combersemos</title>
			<link rel = "stylesheet" type = "text/css" href="estilos.css" />
</head>
<body>
<?php
	$nombre = $_POST["nombre"];
	$frases =['Soy el robot guardian de los mares rescato sirenas y una que otra ves una jaiba.', 
	'Mi misión es mantener limpio y seguro el océano de todo aquel que quiera ensuciarlo.', 
	'Trabajo incansablemente para recoger muestras del agua se los llevo a los cientificos y me recompensan con una galleta.', 
	'Protejo a la vida marina y reporto la contaminación no hay nadien que me saque de quicio su hidrobot a su servicio.', 
	'Juntos, cuidamos el futuro de nuestros océanos no dejes que nadien lo ensucie porfavor.',
	'Me gusta el pan con queso'];
?>
		<div class="presentacion">
        	<div class="izquierda">
				<?php
            // Generar una frase aleatoria
            $fraseAleatoria = $frases[array_rand($frases)];
			echo "<p> Hola, $nombre </p>";
            echo "<p>$fraseAleatoria</p>";
            ?>
            <form action="presentacion.html" method="post">
            <p><input name="btn_atras" class="custom-button" value="Regresar" type="submit" /></p>
            </form>
        </div>
        <div class="derecha">
            <img src="combersacion.png" alt="Robot Cuidador del Océano">
        </div>
    </div>
    
</body>
</html>