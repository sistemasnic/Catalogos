<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>pizza</title>
	<link rel="stylesheet" href="css/main.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
			<h1>Comprar pizza</h1>
			<p id="descripcion">
				<div id="social">
				<div id="statistics">
					<div id="likes"><img src="img/likes.png" alt="">1809</div>
				</div>

			</div>
			</p>

<form action="pizza.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" name="nombre" d="nombre" aria-describedby="emailHelp" placeholder="Nombre" required="">
    <small  class="form-text text-muted">El nombre es para al momento de hacer la entrega identificarl@</small>
  </div>
  <div class="form-group">
    <label >Tamaño de la pizza</label>
    <select class="form-control" name="tamaño" id="tamaño" required="">
      <option  value="#">Tamaño de la pizza</option>
      <option  value="grande $25.000">Grande = $25.000</option>
      <option  value="mediana $17.500">Mediana = $17.500</option>
      <option  value="pequeña $10.000">Pequeña = $10.000</option>
      <option  value="porcion $4.800">Porcion = $4.800</option>
    </select>
  </div>

  <div class="form-group">
    <label >Cantidad de  pizzas</label>
    <select class="form-control" name="cantidad" id="cantidad" required="">
      <option  value="#">Cantidad de  pizzas</option>
      <option  value="1">1</option>
      <option  value="2">2</option>
      <option  value="3">3</option>
      <option  value="4">4</option>
    </select>
  </div>

    <div class="form-group">
    <label>Direccion</label>
    <input type="text" class="form-control" name="direccion" d="Direccion"  placeholder="Direccion" required="">
    <small id="emailHelp" class="form-text text-muted">A esta dirreccion se entregara el domicilio</small>
  </div>

   

    <div class="form-group">
    <label>Telefono</label>
    <input type="text" class="form-control" name="telefono" d="Telefono"  placeholder="Telefono" required="">
    <small id="emailHelp" class="form-text text-muted">El telefono es por si acaso no se te ubica</small>
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required="">
    <label >Mandar informacion </label>
  </div>
  <center>
  <button type="submit" class="btn btn-primary">Hacer pedido</button>
</center>
</form>
		</div>
	</div>
</body>
</html>