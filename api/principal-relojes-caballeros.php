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

			<!-- Lista de Favoritos-->
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
			<h2>Rejoles para Caballero</h2>
			<div class="container-products">
				<div class="card-product" >
					<div class="container-img">
						<div class="flip-container">
							<img src="imagenes/reloj_1.jpg" alt="Imagen Producto" class="img-item"/>
							<div class="face-back">
								<ul>
									<li><strong>Tamaño de la caja:</strong> 41 mm</li>
									<li><strong>Movimiento:</strong> Automático</li>
									<li><strong>Material de la correa:</strong> Acero Oyster</li>
									<li><strong>Color de la correa:</strong> Plateado</li>
									<li><strong>Resistencia al agua:</strong> 300 m</li>
									<li><strong>Material de la caja:</strong> Acero inoxidable</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="content-card-product" data-product-id="1">
						<h3 class="titulo-item">Rolex Submariner</h3>
						<p>El icónico reloj de buceo con un diseño robusto y elegante.</p>
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
				<div class="card-product">
					<div class="container-img">
						<div class="flip-container">
							<img src="imagenes/reloj_2.jpg" alt="Imagen Producto" class="img-item"/>
							<div class="face-back">
								<ul>
									<li><strong>Tamaño de la caja:</strong> 42 mm</li>
									<li><strong>Movimiento:</strong> Cronógrafo manual</li>
									<li><strong>Material de la correa:</strong> Piel</li>
									<li><strong>Color de la correa:</strong> Negra</li>
									<li><strong>Resistencia al agua:</strong> 50 m</li>
									<li><strong>Material de la caja:</strong> Acero inoxidable</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="content-card-product" data-product-id="5">
						<h3 class="titulo-item">Omega Speedmaster Moonwacth</h3>
						<p>El legendario reloj utilizado en buenos momentos</p>
						<div class="footer-card-product">
							<span class="price">$8,100 USD</span>
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
							<img src="imagenes/reloj_3.jpeg" alt="Imagen Producto" class="img-item"/>
							<div class="face-back">
								<ul>
									<li><strong>Tamaño de la caja:</strong> 45 mm</li>
									<li><strong>Movimiento:</strong> Automático</li>
									<li><strong>Material de la correa:</strong> Silicona</li>
									<li><strong>Color de la correa:</strong> Negro</li>
									<li><strong>Resistencia al agua:</strong> 200 m</li>
									<li><strong>Material de la caja:</strong> Acero inoxidable</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="content-card-product" data-product-id="3">
						<h3 class="titulo-item">Seiko Prospex Diver</h3>
						<p>Reloj de buceo robusto y accesible para aventureros.</p>
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
							<img src="imagenes/reloj_7.jpg" alt="Imagen Producto" class="img-item"/>
							<div class="face-back">
								<ul>
									<li><strong>Tamaño de la caja:</strong> 39.8 mm</li>
									<li><strong>Movimiento:</strong> Automático</li>
									<li><strong>Material de la correa:</strong> Acero y piel intercambiable</li>
									<li><strong>Color de la correa:</strong> Azul rey</li>
									<li><strong>Resistencia al agua:</strong> 100 m</li>
									<li><strong>Material de la caja:</strong> Acero inoxidable</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="content-card-product" data-product-id="7">
						<h3 class="titulo-item">Cartier Santos</h3>
						<p>Elegancia atemporal y versatilidad con correas intercambiables.</p>
						<div class="footer-card-product">
							<span class="price">$12,500 USD</span>
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
							<img src="imagenes/reloj_9.jpg" alt="Imagen Producto" class="img-item"/>
							<div class="face-back">
								<ul>
									<li><strong>Tamaño de la caja:</strong> 43 mm</li>
									<li><strong>Movimiento:</strong> Automático cronógrafo</li>
									<li><strong>Material de la correa:</strong> Piel</li>
									<li><strong>Color de la correa:</strong> Negro</li>
									<li><strong>Resistencia al agua:</strong> 30 m</li>
									<li><strong>Material de la caja:</strong> Acero inoxidable</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="content-card-product" data-product-id="9">
						<h3 class="titulo-item">Breitling Navitimer</h3>
						<p>Un reloj icónico para los pilotos, con funciones avanzadas y un diseño clásico.</p>
						<div class="footer-card-product">
							<span class="price">$7,600 USD</span>
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
							<img src="imagenes/reloj_4.jpg" alt="Imagen Producto" class="img-item"/>
							<div class="face-back">
								<ul>
									<li><strong>Tamaño de la caja:</strong> 39.3 mm</li>
									<li><strong>Movimiento:</strong> Automático</li>
									<li><strong>Material de la correa:</strong> Silicona</li>
									<li><strong>Color de la correa:</strong> Marrón</li>
									<li><strong>Resistencia al agua:</strong> 30 m</li>
									<li><strong>Material de la caja:</strong> Acero inoxidable</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="content-card-product" data-product-id="10">
						<h3 class="titulo-item">Tissot Le Locle</h3>
						<p>Elegante reloj clásico con detalles finos y precisión suiza.</p>
						<div class="footer-card-product">
							<span class="price">$16,200 USD</span>
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
							<img src="imagenes/reloj_5.webp" alt="Imagen Producto" class="img-item"/>
							<div class="face-back">
								<ul>
									<li><strong>Tamaño de la caja:</strong> 45 mm</li>
									<li><strong>Movimiento:</strong> Automático</li>
									<li><strong>Material de la correa:</strong> Silicona</li>
									<li><strong>Color de la correa:</strong> Negro</li>
									<li><strong>Resistencia al agua:</strong> 200 m</li>
									<li><strong>Material de la caja:</strong> Acero inoxidable</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="content-card-product" data-product-id="11">
						<h3 class="titulo-item">Seiko Prospex Diver</h3>
						<p>Reloj de buceo robusto y accesible para aventureros.</p>
						<div class="footer-card-product">
							<span class="price">$15,300 USD</span>
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
							<img src="imagenes/reloj_6.jpg" alt="Imagen Producto" class="img-item"/>
							<div class="face-back">
								<ul>
									<li><strong>Tamaño de la caja:</strong> 44 mm</li>
									<li><strong>Movimiento:</strong> Automático cronógrafo</li>
									<li><strong>Material de la correa:</strong> Acero</li>
									<li><strong>Color de la correa:</strong> Plateado</li>
									<li><strong>Resistencia al agua:</strong> 100 m</li>
									<li><strong>Material de la caja:</strong> Acero inoxidable</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="content-card-product" data-product-id="12">
						<h3 class="titulo-item">Tag Heuer Carrera</h3>
						<p>Combina elegancia y precisión con un diseño sofisticado y clásico.</p>
						<div class="footer-card-product">
							<span class="price">$11,800 USD</span>
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
							<img src="imagenes/reloj_8.jpg" alt="Imagen Producto" class="img-item"/>
							<div class="face-back">
								<ul>
									<li><strong>Tamaño de la caja:</strong> 44 mm</li>
									<li><strong>Movimiento:</strong> Automático cronógrafo</li>
									<li><strong>Material de la correa:</strong> Acero</li>
									<li><strong>Color de la correa:</strong> Plateado</li>
									<li><strong>Resistencia al agua:</strong> 100 m</li>
									<li><strong>Material de la caja:</strong> Titanio</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="content-card-product" data-product-id="13">
						<h3 class="titulo-item">Lapso</h3>
						<p>Reloj moderno y audaz con un diseño innovador y materiales avanzados.</p>
						<div class="footer-card-product">
							<span class="price">$11,800 USD</span>
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