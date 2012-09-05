<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.maphilight.min.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<img class="map" src="images/mapa.png" usemap="#world">
<map name="world" >
	<area href="#" shape="poly" coords="270,274, 266,275, 263,271, 260,273, 255,274, 254,278, 251,281, 251,285, 256,285, 261,289, 268,285, 271,285, 272,280 269,277" alt="Aguascalientes" onMouseOver="muestraEstado(1);return false;" title="Aguascalientes" />
        <area href="#" shape="poly" coords="7,9, 53,12, 55,14, 45,24, 44,27, 48,32, 48,35, 45,39, 45,48, 47,50, 
              46,59, 45,67, 47,70, 46,72, 49,75, 48,77, 53,82, 53,85, 58,90, 57,94, 57,97, 59,99, 61,101, 63,100,
              65,107, 68,109, 69,110, 70,118, 44,114, 44,113, 47,111, 45,109, 45,102, 42,100, 42,96, 38,93, 38,89,
              35,88, 35,84, 32,82, 29,81, 24,76, 21,72, 18,68, 21,60, 20,55, 18,57, 17,58, 17,53, 20,50, 17,48, 
              17,45, 14,44, 15,42, 15,36, 13,31, 10,26, 13,25, 13,21, 9,20, 9,15, 7,13, 6,8
              " alt="Baja California" onMouseOver="muestraEstado(2);return false;" onClick="datosEstado(2);return false;" title="Baja California" />
</map>
<div id="nombre"></div>
</body>
</html>