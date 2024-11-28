
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Registro</title>
    <link rel="stylesheet" href="register_estilo.css">
    <link rel="stylesheet" href="mensaje_error.css">
</head>
<body>
    <header style="display: flex; align-items: center; justify-content: center; padding: 10px;">
            <img src="imagenes/LogoRelojeria.png" alt="Logo" style="width: 100px; height: 100px;">
            <h1 id="cronos">CRONOS</h1>
    </header>
    <div class="contenedor">
    <div class="wrapper">
        <form action="procesar_register.php" method="POST">
            <h1>Resgistrate ahora</h1>
            <div class="input-box">
                <input type="text" placeholder="Correo Electronico" name="correo" required>
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Nombre" name="nombre" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">   
                <input type="password" placeholder="Contraseña" name="contrasena" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">   
                <input type="password" placeholder="Confirmar Contraseña" name="confirmar_contrasena" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Direccion" name="direccion" required>
                <i class='bx bxs-map-pin'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Telefono" name="telefono" required>
                <i class='bx bxs-phone'></i>
            </div>
            <div class="input-box">
                <input type="date" name="fecha_nacimiento" max="2024-12-31" min="1900-01-01" required>
                <i class='bx bxs-calendar'></i>
            </div>
            <div class="input-box">
                <select name="genero" required>
                    <option value="">Seleccione Género</option>
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                    <option value="otro">Otro</option>
                </select>
                <i class='bx bxs-user-detail'></i>
            </div>
            <div class="input-box">
                <select name="metodo_pago" required>
                    <option value="">Seleccione Método de Pago</option>
                    <option value="tarjeta_credito">Tarjeta de Crédito</option>
                    <option value="tarjeta_debito">Tarjeta de Débito</option>
                    <option value="paypal">PayPal</option>
                </select>
                <i class='bx bxs-credit-card'></i>
            </div>
            <button type="submit" class="btn">Registrarse</button>
            
        </form>
    </div>
    </div>

</body>
</html>
