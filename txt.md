
# Planeacion. 
# Parte 01 - Informacion del negocio.
## Hobbies Place- Tienda de cartas y juegos de mesa -
Descripcion: tienda dedicada a la venta de TCG (Juegos de cartas coleccionables) y articulos y juegos de mesa. 
## una sola tienda fisica. 

Tres Categorías:  - Juegos de cartas coleccionables.
                        1. MTG (Magi)
                        2. Yuguioh.
                        3. One piece.
                        4. Dijimon.
                        5. Pokemon.
                        6. Dragon ball.

                - Juegos de mesa.
                    1.  CATAN.
                    2. Luna Capital.
                    3. Ciudad de puntos.
                    4. La Selva Prohibida.
                    5. Pequeños Grandes Zombis.
                    6. The Lie.

            - Accesorios y artículos de protección.
                1. Playmat (Tapete).
                2. Sleever (Plastico).
                3. DeckBock ().
                4. Sidewinder (Estuche robusto para mazos de cartas).
                5. Flexxfolio (Album para cartas coleccionables).  

Aparte de las ya mencionadas vende otras cartas como Boku no hero.

#### Ubicacion fisica de la tienda fisica: 
Av Bolívar Norte Cc Roosvelt II locales 9 y 10, Valencia, Carabobo.

#### Pagina de la tienda: https://hobbiesplace.store/

### Mision y Vision 

1. Misión. Hobbies Place fue creada con el objetivo de brindar un espacio cómodo y adecuado para la práctica de juegos de cartas coleccionables, así como juegos de mesa. Ofrecer los mejores servicios a la vanguardia del mercado trayendo los mejores productos, originales y más recientes.

2. Visión. Hobbies Place está comprometido con fomentar el juego competitivo de los juegos que vendemos, para generar el crecimiento no solo local sino nacional. Buscamos también diversificar nuestro repertorio de productos a ofrecerle a nuestros clientes.

## Objetivo: Entender el negocio indentificar sus desafios.
## Notas: - Todo el inventario lo manejan por excel - No tiene hoja de reporte. 
          - Los productos los tienen sectorizados 
               - (Alli le salen los totales de cada producto) 
               - (La expansion es el nombre de un sobre)
--------------------------------------------------------------------

# Parte 02. Seccion1
## Propuesta (Sistema de inventario).
## Esta propuesta es para tal sector ()

### Objetivos
**1. Acciones generales que debe hacer el sistema**
Acciones específicas para un sistema de gestión de inventario, enfocado en autenticación, roles de usuarios, manejo de productos y reportes.
    1. Los usuarios (SuperAdmin, Admin, Users): Necesitan agregar, editar, eliminar, buscar, productos rapidamente. 
    2. Sistema de inventario de productos. 
    3. Imprimir Reportes (PDF).

**2. Acciones especificas: estructura fluye lógicamente: autenticación → gestión → operaciones → salida.** 

* 1.1 Inicio de Sesión: Validar credenciales (usuario/contraseña) contra la base de datos.

* 1.2 Autenticación multi-usuario con roles (SuperAdmin, Admin, Users):

 - Registro de usuarios: Crear nuevos perfiles con contraseñas cifradas.

 - Permisos por rol: SuperAdmin (gestión total), Admin (CRUD usuarios/productos), Users (búsqueda/venta básica).

* 1.3 Gestión de Inventario / Administración de Productos: Crear, leer, actualizar y eliminar (CRUD) artículos. Cada artículo incluye stock, precio y categoría.

 - Búsqueda y filtrado: Por nombre, categoría o stock bajo.
 - Control de cantidad: Alertas de stock mínimo y actualizaciones automáticas.

* 1.4 Registro de Movimientos: Registrar entradas (compras), salidas (ventas) y ajustes de stock, con fecha, usuario responsable y motivo.

* 1.5 Generador de Factura: Generar facturas por pantalla en formato visual (HTML/CSS), con resumen de productos, totales, IVA y opción de PDF/exportar.

# Parte 02. Seccion2.
## Base de datos.
--------------------------------------------------------------------

# Parte 03.


# Investigar.
1. Tienes un control de existencias (qué hay y cuánto vale).
2. Productos sectorizados.
3. ¿Tengo categorías o etiquetas? Por ejemplo, ¿puedo filtrar rápido cuánto tengo en "Accesorios" (folios, cajas) vs. "Cartas Sueltas" vs. "Sellado"?








-------------------------------------------------------------------------------------------------------------------------------------------

### Diseño de Sistemas - Skarlet Matos - Fase 1 del proyecto - Estudiante: (Alanys Alondra Arcaya Yamarte) UNEFA GUACARA 5to semestre ing.Sistemas

## Lunes 19 de Enero de 2026
1. Planteamientos
2. Pawert Point - Captures del sistema.
3. Presentamos el sistema 02 Lunes 02 de Febrero de 2026
4. Entregar los capitulos el Sabado 31 de Enero de 2026
5. Dureremos 20 minutos como maximo defendiendo el sistema. (LUNES)

-----------------------------------------------------------------------

## Tesis
**Capitulo 01-Diseño**

    - Vision. (Lista)
    - Mision. (Lista)
    - Planteamineto del problema. (Lista)
    - Objetivo General. (Lista)
    - Objetivos Especificos -- (Casarlos con la metodologia que escogieron) (Lista)
    - justificacion. (Lista)
    - Direccion de la tienda de Hobbies Place. (Anexar imagen)
 
**Capitulo 02-Diseño**

    - Marco metodologico.
    - 2 Referencias una nacional y otra Internacional de tu sistema.
            utilizar el mismo marco teorico- (NACIONAL) -MARCAY sistema web de inventario para diseño: https://iutamaracay.com.ve/iuta_webpage/archivos/GLASMARIS-HERRERA-28456342.pdf 


    - Diseño de caso de Uso.
    - Matriz Foda.
    - Diagrama de flujo.
    - Base de datos.

**Capitulo 03-Implantacion**

    -
---------------------------------------------------------------------------------------------------------------------------------------
## Tecnologias usadas:
## 1. MVC/- Modelo,vista,controlador
**Adquitectura de carpetas**
1. Controllers
2. Modells
3. Views
4. img
5. Css
    - login.css
    - register.css
    - dashboard.css
    - tablas.css
    - perfil.css
6. js
    - Script

READMED.MD

### 2. Html5-
### 3. Css - Diseño dividido por las areas del sistema.
### 4. JavaScrip.
### 5. Lenguaje de programacion:php.
### 6. Paradigma de POO: Programacion Orientada a Objetos. 
### 7. Sistema de gestion de verciones utilizado: github. 
---------------------------------------------------------------------------------------------------------------------------------------

## Tareas Realizadas:
* 1. Login.
* 1. Register
* 1. Plantilla Dasboard: Super-Admin, Admin, User
* 2. Tablas (Usuarios, Ventas, Inventario)
* 3. Adquitectura de carpetas MVS
* 4. De un Styles monolitico a un css dividido por las areas del sistema (login, register, Dasboard).
* 5. Enlasamos las imagenes pára que se vuelva a ver el material..
* 6. Imagenes de fondo para el register y el login.
* 7. Guardarmos cambios en el gihut.
* 8. Terminamos de agregarle contenido a las tablas. 
  / Inventirio de Productos.
  / Usuarios.
  / Ventas.
* 9. Hacer que las tablas de usuario, ventas, inventario se vean en el Dasboard.
* 10. Vista del Home.


## Tareas En proceso:
* 3. Plantilla del sistema de facturacion. 
  - 1.Fecha y hora en la que se esta efectuando la venta.
  - 2. Nombre del producto y el tortal de ese producto en bolibares.
  - 3. Pocentaje del iva.
  - 4. precio de como seria el iva en bolivares.
  - 5. Total final de todo. 
*  / Proveedores.

## Tareas Pendientes:

* 1. Dactos de configuracion.
* 2. Perfil de usuario y edital los datos del perfil de usuario.
* 4. Tabla de  productos filtrada por categorias. 
* 5.  
* 6. 
---------------------------------------------------------------------------------------------------------------------------------------
## Preguntas:

**¿Como yo les voy a entregar este sistema?**

    1. Por medio de un pendrive y lo tendran que usar en la computadora de la tienda. 
    
    - CASO1 :(Siento que los archivos estarian suertos y cualquiera puede venir y borrarlos [Mataria el sistema alli, Eso si lo hacen])

    - CASO2 :(Ese sistema solo podrian usarlo en la computadora de la tiendra y no esta conectado a internet) 
    
    Complicacion: si quisiera ver algo del sistema en otro lado, no puedo porque tendria que usar la computadora del trabajo, (ir para el trabajo a solo ver algo, que puedo ver desde mi casa sin problema. Es gastar dinero y si el trabajo no esta abierto esos dias)
    
    (Prefiero la idea de poder estar conectada desde mi casa y entrar en el sistema por medio de internet por mi usuario y contraseña como lo hago con el sistema de la unefa, pero esto es un sistema de inventario, administracion de usuario y que imprime facturas y reportes, es necesario verlo en la casa, cuando prefiero verlo en el trabajo)

    2. ¿Tendria que darles una computadora en donde alojar el sistema y entregarcelas?

---------------------------------------------------------------------------------------------------------------------------------------
## Investigar Conceptos
1. CSS Monolitico.
* ¿llevar un archivo css por cada modulo del sistema o llevar un archivo css por todos los modulos?
3. Código reusable y prompts en IA.
3. Interacciones intuitivas entre el usuario y el sistema.
4. Empleados Dumi. 

5. Como escribir un READMED.MD 
- https://www.youtube.com/shorts/AQWeATBVZ0Y
- https://www.ionos.com/es-us/digitalguide/paginas-web/desarrollo-web/archivo-readme/

6. Extension para hacer que los iconos se vean bonitos. (Material icon)
- https://www.youtube.com/shorts/m86SnMJ5Q4M



