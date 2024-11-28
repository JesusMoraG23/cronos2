<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Relojes para Damas</title>
		<link rel="icon" type="image/x-icon" href="imagenes/LogoRelojeria.png">
		<link rel="stylesheet" href="principal-relojes-damas-estilos.css" />
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
			integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
		<!-- PARA EL CARRITO-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="carrito.css">
		<script src="carrito.js" async></script>
	</head>
	<body>
		<header>
			<div class="barra"> 
				<h2>Menu<img src="imagenes/menu.png" alt="Menu" style="width: 40px; cursor: pointer;"></h2>
				<ul>
					<li><a href="index.php">Inicio</a></li>
					<li><a href="principal-populares.php">Mas populares</a></li>
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
				<button class="cart-button">
					<i class="fa-solid fa-bag-shopping"></i>
					<span class="counter-cart">0</span>
				</button>
			</div>
			<!-- Carrito de Compras -->
			<div class="carrito" id="carrito">
				<div class="header-carrito">
					<h2>Tu Carrito</h2>
					<button class="carrito-cerrar">&times;</button>
				</div>
				<div class="carrito-items"></div>
				<div class="carrito-total">
					<div class="fila">
						<strong>Total</strong>
						<span class="carrito-precio-total">
							$0.00
						</span>
					</div>
					<button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
				</div>
			</div>
			<div id="toast" class="toast"></div>

			<!-- Lista de Favoritos -->
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
			<h2>Relojes para Dama</h2>
			<div class="container-products">
				<div class="card-product">
					<div class="container-img">
						<div class="flip-container">
							<img src="imagenes/reloj-dama-1.png" alt="Imagen Producto" class="img-item"/>
							<div class="face-back">
								<ul>
									<li><strong>Tamaño de la caja:</strong> 28 mm</li>
									<li><strong>Movimiento:</strong> Automático</li>
									<li><strong>Material de la correa:</strong> Acero y oro</li>
									<li><strong>Color de la correa:</strong> Oro rosado</li>
									<li><strong>Resistencia al agua:</strong> 100 m</li>
									<li><strong>Material de la caja:</strong> Acero inoxidable</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="content-card-product" data-product-id="2">
						<h3 class="titulo-item">Rolex Lady-Datejust</h3>
						<p>Un clásico atemporal con un diseño elegante, perfecto para cualquier ocasión.</p>
						<div class="footer-card-product">
							<span class="price">$7,500 USD</span>
							<div class="container-buttons-card">
								<button class="favorite">
									<i
										class="fa-regular fa-heart"
										id="favorite-regular"
									></i>
									<i
										class="fa-solid fa-heart"
										id="added-favorite"
									></i>
								</button>
								<button class="cart">
									<i class="fa-solid fa-bag-shopping"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="card-product">
					<div class="container-img">
						<div class="flip-container">
							<img src="imagenes/reloj-dama-2.jpg" alt="Imagen Producto" class="img-item"/>
							<div class="face-back">
								<ul>
									<li><strong>Tamaño de la caja:</strong> 29 mm</li>
									<li><strong>Movimiento:</strong> Automático</li>
									<li><strong>Material de la correa:</strong> Acero inoxidable</li>
									<li><strong>Color de la correa:</strong> Oro rosado</li>
									<li><strong>Resistencia al agua:</strong> 50 m</li>
									<li><strong>Material de la caja:</strong> Acero inoxidable</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="content-card-product" data-product-id="4">
						<h3 class="titulo-item">Omega Constellation</h3>
						<p>Reloj elegante con detalles en oro rosa y un diseño sofisticado.</p>
						<div class="footer-card-product">
							<span class="price">$4,200 USD</span>
							<div class="container-buttons-card">
								<button class="favorite">
									<i
										class="fa-regular fa-heart"
										id="favorite-regular"
									></i>
									<i
										class="fa-solid fa-heart"
										id="added-favorite"
									></i>
								</button>
								<button class="cart">
									<i class="fa-solid fa-bag-shopping"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="card-product">
					<div class="container-img">
						<div class="flip-container">
							<img src="imagenes/reloj-dama-3.jpg" alt="Imagen Producto" class="img-item"/>
							<div class="face-back">
								<ul>
									<li><strong>Tamaño de la caja:</strong> 33 mm</li>
									<li><strong>Movimiento:</strong> Automático</li>
									<li><strong>Material de la correa:</strong> Piel</li>
									<li><strong>Color de la correa:</strong> Oro rosado</li>
									<li><strong>Resistencia al agua:</strong> 30 m</li>
									<li><strong>Material de la caja:</strong> Acero inoxidable</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="content-card-product" data-product-id="6">
						<h3 class="titulo-item">Cartier Ballon Bleu</h3>
						<p>Elegancia y lujo en un diseño redondeado con el icónico cabujón rosa.</p>
						<div class="footer-card-product">
							<span class="price">$14,900 USD</span>
							<div class="container-buttons-card">
								<button class="favorite">
									<i
										class="fa-regular fa-heart"
										id="favorite-regular"
									></i>
									<i
										class="fa-solid fa-heart"
										id="added-favorite"
									></i>
								</button>
								<button class="cart">
									<i class="fa-solid fa-bag-shopping"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="card-product">
					<div class="container-img">
						<div class="flip-container">
							<img src="imagenes/reloj-dama-4.jpeg" alt="Imagen Producto" class="img-item"/>
							<div class="face-back">
								<ul>
									<li><strong>Tamaño de la caja:</strong> 39 mm</li>
									<li><strong>Movimiento:</strong> Cuarzo</li>
									<li><strong>Material de la correa:</strong> Acero inoxidable</li>
									<li><strong>Color de la correa:</strong> Oro rosado</li>
									<li><strong>Resistencia al agua:</strong> 50 m</li>
									<li><strong>Material de la caja:</strong> Acero inoxidable</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="content-card-product" data-product-id="8">
						<h3 class="titulo-item">Michael Kors Parker</h3>
						<p>Reloj moderno y brillante con detalles de cristales que lo hacen destacar.</p>
						<div class="footer-card-product">
							<span class="price">$13,300 USD</span>
							<div class="container-buttons-card">
								<button class="favorite">
									<i
										class="fa-regular fa-heart"
										id="favorite-regular"
									></i>
									<i
										class="fa-solid fa-heart"
										id="added-favorite"
									></i>
								</button>
								<button class="cart">
									<i class="fa-solid fa-bag-shopping"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="card-product">
					<div class="container-img">
						<div class="flip-container">
							<img src="imagenes/reloj-dama-5.jpg" alt="Imagen Producto" class="img-item"/>
							<div class="face-back">
								<ul>
									<li><strong>Tamaño de la caja:</strong> 32 mm</li>
									<li><strong>Movimiento:</strong> Cuarzo</li>
									<li><strong>Material de la correa:</strong> Acero inoxidable</li>
									<li><strong>Color de la correa:</strong> Oro rosado</li>
									<li><strong>Resistencia al agua:</strong> 300 m</li>
									<li><strong>Material de la caja:</strong> Acero inoxidable</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="content-card-product" data-product-id="14">
						<h3 class="titulo-item">Tag Heuer Aquaracer Lady</h3>
						<p>Reloj elegante para mujeres activas que buscan estilo y funcionalidad.</p>
						<div class="footer-card-product">
							<span class="price">$9,800 USD</span>
							<div class="container-buttons-card">
								<button class="favorite">
									<i
										class="fa-regular fa-heart"
										id="favorite-regular"
									></i>
									<i
										class="fa-solid fa-heart"
										id="added-favorite"
									></i>
								</button>
								<button class="cart">
									<i class="fa-solid fa-bag-shopping"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="card-product">
					<div class="container-img">
						<div class="flip-container">
							<img src="imagenes/reloj-dama-6.avif" alt="Imagen Producto" class="img-item"/>
							<div class="face-back">
								<ul>
									<li><strong>Tamaño de la caja:</strong> 34 mm</li>
									<li><strong>Movimiento:</strong> Automático</li>
									<li><strong>Material de la correa:</strong> Piel</li>
									<li><strong>Color de la correa:</strong> Plateado</li>
									<li><strong>Resistencia al agua:</strong> 50 m</li>
									<li><strong>Material de la caja:</strong> Acero inoxidable</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="content-card-product" data-product-id="15">
						<h3 class="titulo-item">Seiko Presage Cocktail Time</h3>
						<p>Inspirado en cócteles, ofrece un diseño clásico con detalles elegantes.</p>
						<div class="footer-card-product">
							<span class="price">$10,700 USD</span>
							<div class="container-buttons-card">
								<button class="favorite">
									<i
										class="fa-regular fa-heart"
										id="favorite-regular"
									></i>
									<i
										class="fa-solid fa-heart"
										id="added-favorite"
									></i>
								</button>
								<button class="cart">
									<i class="fa-solid fa-bag-shopping"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="accesorios.js"></script>
	</body>
</html>