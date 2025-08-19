<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>pizza</title>
	<link rel="stylesheet" href="css/main.css">
	<style>
		body{
			background-image: url(img/fondo.jpg);
			font-family: Arial;
		}
		h1{
			border-bottom: dotted 2px #ccc;
			text-align: center;
		}
		a{
			background-color: red;
			color: white;
			text-decoration: none;
		}
		a:hover{
			background-color: blue;
		}
		#main-container{
			width: 500px;
		}
		#content{
			background-color: white;
		}
		#descripcion{
			color: #666;
			font-size: 0.8125em;
		}
		#boton-content{
			text-align: center;
		}
		
	</style>
</head>
<body>
	<div id="main-container">
		<div id="main-image">
			<img src="img/imagen-principal.jpg" alt="">
		</div>
		<div id="content">
			<h1>SU PIZZA LLEGARA EN:</h1>
			<center><h3>Normal mente solo nos tardamos 10 minutos en llegar</h3></center>

			<center>
	
	<font size="7">
<p id="demo"></p>

<script>

var countDownDate = new Date("Jan 5, 2019 15:1:25").getTime();
var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var minutes = Math.floor((distance % (1000 * 21 * 21)) / (1000 * 21));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

</font>

</center>




		</div>
	</div>
</body>
</html>




