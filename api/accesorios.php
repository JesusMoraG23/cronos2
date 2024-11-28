<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Accesorios</title>
		<link rel="icon" type="image/x-icon" href="imagenes/LogoRelojeria.png">
		<link rel="stylesheet" href="accesorios.css" />
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
			<h1>Accesorios</h1>

			<div class="container-products">
				<div class="card-product">
					<div class="container-img">
						<img src="imagenes/anillo_1.jpg" alt="imagen Producto" class="img-item"/>
					</div>
					<div class="content-card-product" data-product-id="16">
						<h3 class="titulo-item">Anillo de compromiso Tiffany Setting</h3>
						<p>Este icónico anillo de Tiffany & Co. presenta un diamante redondo, diseñado para maximizar el brillo y la luz.</p>
						<div class="footer-card-product">
							<span class="price">$2,100 USD</span>

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
						<img src="imagenes/pulsera_1.jpg" alt="imagen Producto" class="img-item"/>
					</div>
					<div class="content-card-product" data-product-id="17">
						<h3 class="titulo-item">Pulsera Cartier Love</h3>
						<p>Un diseño clásico, hecha de oro y perlas decorativas.</p>
						<div class="footer-card-product">
							<span class="price">$1,500 USD</span>

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
						<img src="imagenes/collar_1.jpg" alt="imagen Producto" class="img-item"/>
					</div>
					<div class="content-card-product" data-product-id="18">
						<h3 class="titulo-item">Collar Van Cleef & Arpels Alhambra</h3>
						<p>Un diseño icónico con motivos de trébol, está elaborado en oro amarillo con nácar.</p>
						<div class="footer-card-product">
							<span class="price">$1,250 USD</span>

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
						<img src="imagenes/anillo_2.jpg" alt="imagen Producto" class="img-item"/>
					</div>
					<div class="content-card-product" data-product-id="19">
						<h3 class="titulo-item">Anillo Bulgari Serpenti</h3>
						<p>Inspirado en la serpiente, símbolo de seducción y elegancia.</p>
						<div class="footer-card-product">
							<span class="price">$2,900 USD</span>

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
						<img src="imagenes/pulsera_2.webp" alt="imagen Producto" class="img-item"/>
					</div>
					<div class="content-card-product" data-product-id="20">
						<h3 class="titulo-item">Pulsera Pandora Moments</h3>
						<p>Personalizable y elegante, hecha de oro.</p>
						<div class="footer-card-product">
							<span class="price">$2,000 USD</span>

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
						<img src="imagenes/collar_2.jpg" alt="imagen Producto" class="img-item"/>
					</div>
					<div class="content-card-product" data-product-id="21">
						<h3 class="titulo-item">Collar Swarovski Attract</h3>
						<p>Elegante y moderno, con un brillante colgante de oro que añade un toque de sofisticación a cualquier atuendo.</p>
						<div class="footer-card-product">
							<span class="price">$1,800 USD</span>

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