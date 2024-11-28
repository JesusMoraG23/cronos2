<!DOCTYPE html>
<html lang="es">
    <head>
		<meta charset="UTF-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Relojes para Caballeros</title>
		<link rel="icon" type="image/x-icon" href="/imagenes/LogoRelojeria.png">
		<link rel="stylesheet" href="principal-relojes-caballeros-estilo.css" />
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
			integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
	</head>
<body>
	<header>
		<div class="barra"> 
			<h2>Menú <img src="imagenes/menu.png" alt="Menu" style="width: 40px; cursor: pointer;"></h2>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="principal-populares.php">Más populares</a></li>
				<li>
					<ul>
						<li><a href="principal-relojes-caballeros.php">Relojes para Caballeros</a></li>
						<li><a href="principal-relojes-damas.php">Relojes para Dama</a></li>
					</ul>
				</li>
				<li><a href="accesorios.php">Accesorios</a></li>
				<li><a href="#">Contacto</a></li>
			</ul>
		</div>
		
		<div style="display:flex; align-items: center; margin-left: -150px;">
			<img src="imagenes/LogoRelojeria.png" alt="Logo" style="width: 100px; height: 100px; margin-left: 200px;">
			<h2 style="color:aliceblue">CRONOS</h2>
		</div>
		
		<div class="menu-header">
			<button id="button-header-favorite">
				<i class="fa-solid fa-heart"></i>
				<span class="counter-favorite">0</span>
			</button>
			<button>
				<i class="fa-solid fa-bag-shopping"></i>
				<span class="counter-cart">0</span>
			</button>
		</div>

		<div class="container-list-favorites">
			<div class="header-favorite">
				<h3>Mis Favoritos</h3>
				<i class="fa-solid fa-xmark" id="btn-close"></i>
			</div>
			
			<div class="list-favorites">
				<div class="card-favorite">
					<p class="title">Audífonos Bluetooth Pro</p>
					<p>$150</p>
				</div>
			</div>
		</div>
	</header>

	<div class="container">
		<h1>Más populares</h1>

		<div id="popular-watches" class="container-products"></div>
	</div>
    
    <script src="accesorios.js"></script>
</body>
</html>

