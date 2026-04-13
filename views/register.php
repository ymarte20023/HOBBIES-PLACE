<!DOCTYPE html> <!-- REGISTER COMPLETADO.-->
<html lang="es"> <!-- <html> etiqueta raíz de toda la página HTML.-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/img/Logo2.ico"> <!--Link del Favicon de la aplicacion--> 
    <link rel="stylesheet" href="/css/register.css"> <!-- Enlace al archivo CSS externo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"> <!--cdm de los iconos de fontawesome-->
    <title>Register - Hobbies Place</title> <!-- REGISTRO DE HOBBIES PLACE-->
</head>

<body>
<!--Panel izquierdo-->
<div class="container"> <!--Contenedor de inicio de seccion general-->
    <!--1.1Conservar login / Formulario de Inicio de seccion-->
    <section class="left-section"> <!--Panel izquierdo - FORMULARIO -->
        <div class="form-wrapper"> <!--Contenedor formulario-->
        <img class="img" src="/img/Logo1.png" alt="Logo de Hobbies Place"/> <!--Logo de Hobbies Place (Register)-->
            <h1>Registrarse</h1> 
            <form action="../controllers/RegisterController.php" method="POST" name="registro"> <!--1.2 Formulario de registro-->
                <div> <!--Divisiones-->
                    <label><i class="fa-solid fa-user"></i></label><!--icono de font awesome (user name)-->
                    <input type="text" name="fullname" id="fullname" placeholder="Nombre de usuario" required>
                </div>
                <div> <!--Segunda division (DIV)-->
                    <label><i class="fa-solid fa-envelope"></i></label><!--icono de font awesome (Email)-->
                    <input type="email" id="email" name="email" placeholder="Correo electronico"> 
                </div>
                <div> <!--Tercera division (DIV)-->
                    <label><i class="fa-solid fa-lock"></i></label><!--icono de font awesome (Password)-->
                    <input type="password" id="password" name="password" required placeholder="Contraseña">
                </div>
            <!--Boton para registrase-->
            <button type="submit" class="btn-main">Registrarse</button>
                <div class="">
                    <p>¿Ya tienes una cuenta?</p>
                    <a href="">Iniciar sesión</a><!--Redireccion para la pagina de inicio de seccion-->
                </div>
             </form>
        </div>
    </section>

<!--Panel derecho-->
    <section class="image-section"> <!--Panel derecho  /* --- SECCIÓN DERECHA IMAGEN  --- */ -->
    </section>
</div> <!--Fin del contenedor de registrarse general-->
<!--Fin del register-->

</body>
</html>
