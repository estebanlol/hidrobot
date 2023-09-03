<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Hidrobot</title>
		<link rel = "stylesheet" type = "text/css" href="estilos.css" />
</head>
<body>
    <div class="header">
        <h1>MBOT2 (Hidrobot)</h1>
    </div>
    <div class="info">
        <h1 align="center">¿Qué es el MBOT2?</h1>
        <p>El MBOT2 o Indrobot es un robot programado con Python, cuya función principal es cuidar el área marítima y ayudar a los científicos a conseguir muestras del océano para descubrir si está contaminada o limpia, ahorrando el tiempo de los especialistas en ir en persona a buscarlas.</p>
    </div>
    <div class="info">
        <h1 align="center">¿Qué beneficios trae?</h1>
        <p>Este robot trae muchos beneficios, tales como:</p>
        <ul>
            <li>Tiempo en recoger las muestras.</li>
            <li>Monitoreo sin presencia de un humano en la zona.</li>
            <li>Más rapidez y eficiencia al momento de calcular la cantidad de la muestra.</li>
            <li>Si encuentra a alguien ensuciando la zona, avisará a un encargado.</li>
        </ul>
    </div>
       	<div class="presentacion">
        <div class="izquierda">
            <div class="name">  Nombre: Hidrobot </div>
            <div class="robot-text">
                <p>Descripción: Hola, soy tu amigo Hidrobot. Puedo ayudarte recogiendo muestras del océano para que investigues, y puedo ahuyentar a los borrachos y a quienes ensucian el mar. Si hay algún problema, no dudes en llamarme.</p>
            </div>
        </div>
        <div class="derecha">
            <img class="robot-image" src="mbot2.png" alt="Robot">
        </div>
        </div>
<div class="info">
        <h1 align="center"> ¿Quieres combersar con el? </h1>
        <p align="center"> Si quieres que Hidrobot te dedique unas palabras preciona el boton </p>
        <p align="center"> Antes que nada dime tu nombre para continuar </p>
        <form action="combersacion.php" method="post">
          <div align="center">
             <label for="txt_nombre">Nombre:</label>
        <input type="txt" id="txt_nombre" name="nombre" class="custom-txt" placeholder="Ingresa tu nombre" required>
        
          </textarea>
          </div>
          <div align="center">
            <p><input name="btn_combersar" class="custom-button" type="submit" value="combersar" /></p>
          </div>
        
  </form>
        </div>
        <div class="info">
        <h1 align="center">¿Quieres ver más?</h1>
        <p>Visítanos en nuestro Instagram, donde tendremos el proceso de cómo el robot llegó a donde está.</p>
        <p><a href="https://www.instagram.com/hidrobot.politecnico/"><img src="ig.png" alt="Instagram" width="60" height="60" class="robot-image"></a></p>
    </div>
         
        		
</body>
</html>
