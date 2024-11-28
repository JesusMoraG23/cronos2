<!-- <?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['usuario_id'])) {
    // Si no está logueado, redirigir a login
    // header("Location: login.php");
    // exit();
}

// Obtener el nombre del usuario desde la sesión
$usuario_nombre = $_SESSION['usuario_nombre'];

// Verificar si el usuario desea cerrar sesión
if (isset($_POST['logout'])) {
    session_destroy(); // Destruir la sesión
    header("Location: login.php"); // Redirigir a login después de cerrar sesión
    exit();
}
?>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cronos</title>
    <link rel="stylesheet" href="index-style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/imagenes/LogoRelojeria.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
		/>

    <!-- PARA EL CARRITO-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="carrito-style.css">
    <script src="carrito.js" async></script>
</head>
<body>
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
    <header style="display: flex; align-items: center; justify-content: space-between; padding: 10px;">
        
        <div class="search-container" style="display: flex; align-items: center; margin-left: 70px;">
            <img src="imagenes/buscar.png" alt="Buscar.icon" style="width: 50px; cursor: pointer;">
            <input type="text" placeholder="Buscar" id="buscar" class="search-bar">
        </div>
        
        <div style="display:flex; align-items: center; margin-left: -150px;">
            <img src="imagenes/LogoRelojeria.png" alt="Logo" style="width: 100px; height: 100px; margin-left: 200px;">
            <h2 style="color:aliceblue">CRONOS</h2>
        </div>
        <div style="display: flex; align-items: center;"> 
            <a href="login.php">
                <img src="imagenes/usuario.png" id="icono_user" alt="User Icon" style="width: 40px; height: 40px; cursor: pointer;">
            </a>
        </div>
        
        <!-- 
        <div class="usuario_logueado" style="display: flex; align-items: center;">
             Si el usuario está logueado, mostrar su nombre
            <span class="muestra_usuario" style="cursor: pointer;" onclick="document.getElementById('logoutForm').style.display='block';">
                <?php echo $usuario_nombre; ?>
            </span>

             Formulario de cierre de sesión (inicialmente oculto)
            <div id="logoutForm" style="display: none; position: absolute; background-color: white; padding: 10px; border: 1px solid #ccc; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
                <form method="POST" action="index.php">
                    <p>¿Seguro que quieres cerrar sesión?</p>
                    <button type="submit" name="logout">Sí, cerrar sesión</button>
                    <button type="button" onclick="document.getElementById('logoutForm').style.display='none';">Cancelar</button>
                </form>
            </div>
        </div> -->

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

    <div class="carrusel">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="7000" data-bs-pause="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagenes/reloj_para_hombre.jpg" class="d-block w-100" alt="Imagen 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Relojes para Caballero</h5>
                        <a href="principal-relojes-caballeros.php">→</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="imagenes/reloj_para_mujer.png" class="d-block w-100" alt="Imagen 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Relojes para Dama</h5>
                        <a href="principal-relojes-damas.php">→</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
        <div class="pagina">
            <div class="botton">
                <a href="principal-relojes-caballeros.php">
                    <button class="boton">Relojes para hombre</button>
                </a>
            </div>
            <div class="botton">
                <a href="principal-relojes-damas.php">
                    <button class="boton">Relojes para mujer</button>
                </a>
            </div>
            <div class="botton">
                <a href="principal-populares.php">
                    <button class="boton">Mas populares</button>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 id="lo_mas_nuevo">Lo mas Nuevo</h2>
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
            <div class="card-product" >
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
                    <p>El legendario reloj utilizado en buenos momentos.</p>
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
                        <img src="imagenes/reloj_7.jpg" alt="Imagen Producto" class="img-item"/>
                        <div class="face-back">
                            <ul>
                                <li><strong>Tamaño de la caja:</strong> 39.8 mm</li>
                                <li><strong>Movimiento:</strong> Automático</li>
                                <li><strong>Material de la correa:</strong> Acero y piel intercambiable</li>
                                <li><strong>Color de la correa:</strong> Marrón</li>
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
        </div>
    </div>

    
    <div class="contenedor_gif"></div>
    <div class="contenedor_adorno"></div>
    <footer>
        <div class="footer-content">
            <div class="contact-info">
                <h3>Contacto</h3>
                <p>Email: info@cronos.com</p>
                <p>Teléfono: (123) 456-7890</p>
            </div>
            <div class="social-media">
                <h3>Síguenos</h3>
                <a href="#">Instagram</a>
                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
                <a href="#">Correo</a>
                <div class="imagen_redessociales">
                    <img src="imagenes/redes_sociales.png" alt="imagen ilustrativa">
                </div>
            </div>
            <div class="newsletter">
                <h3>No te pierdas de las ultimas novedades</h3>
                <form>
                    <input type="email" placeholder="Tu correo electrónico">
                    <button class="suscribirse">Suscribirse</button>
                </form>
            </div>
            <div class="legal">
                <p>&copy; 2024 CRONOS. Todos los derechos reservados.</p>
                <a href="#">Política de Privacidad</a>
                <a href="#">Términos y Condiciones</a>
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="accesorios-script.js"></script>
</body>
</html>
