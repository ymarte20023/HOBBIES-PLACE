<!DOCTYPE html> <!-- Dasboar completo - SuperAdministrador.-->
<html lang="es"> <!-- <html> etiqueta raíz de toda la página HTML.-->
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/img/Logo2.ico"> <!--Link del Favicon de la aplicacion--> 
    <link rel="stylesheet" href="/css/dashboard.css"> <!-- Enlace al archivo CSS externo -->
    <script src="/js/script.js"></script><!-- Enlazar JavaScript con hojas HTML -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"> <!--cdm de los iconos de fontawesome-->
	<title>Registro de salidas</title> <!-- DASHBOARD DE HOBBIES PLACE-->
</head> 
<body>
<div class="dashboard-wrapper"> <!-- Contenedor principal del Dashboard-->
<!--2.3 SIDEBAR/(Menu lateral)- TAREA: siderbar para el Dasboard menu responsibo y que se oculta.--> 
<aside class="sidebar"> <!-- Parte 001: Contenedor de la barra lateral del siderbar-->
        <!-- Logo dentro del sidebar -->
        <div class="logo"> <!--Contenedor del logo--> 
            <img class="img" src="/img/Logo2.png" alt="Logo de Hobbies Place"/> <!--Logo de Hobbies Place (Logo) -->
            <!-- Boton para maximizar y minizar el sidebar-->
            <div class="menu-btn"> <!--Contenedor del boton-->
                <i class="fa-solid fa-sliders"></i>
            </div>
        </div>
    <!-- Parte 002: Menú dentro del sidebar-->
    <nav class="Menu-siderbar"> <!--Contenedor del Menu-siderbar-->
        <div class="menu-group"><!--1 Grupo-->
        <span class="group-title">Operativa</span>
        <ul class="menu"> <!--1.1 Contenedor del menu-->
            <li class="menu-item menu-item-static"> <!--Lista1 Menu estatico que no se despliega-->
                <a href="#" class="menu-link">           <!--Redireccion--> 
                    <i class="fa-solid fa-house"></i>    <!--Icono de Fon awesome (hause)-->
                    <span>Inicio</span>                  <!--nombre del icono en un spam--> <!--Esto es ivoculcrao para ir a la vista del Home-->
                </a>
            </li>
            <li class="menu-item menu-item-static"><!--Lista2-->
                <a href="#" class="menu-link">
                    <i class="fas fa-dolly"></i> <!--Icono de Fon awesome (fa-dolly)-->
                    <span>Salidas</span>
                </a>
            </li>
            <li class="menu-item menu-item-static"> <!--Lista3-->
                <a href="#" class="menu-link">
                    <i class="fa-solid fa-box-open"></i> <!--Icono de Fon awesome (Open box)-->
                    <span>Inventario</span>
                </a>
            </li>
        </div>

        <div class="menu-group"><!--2 Grupo-->
        <span class="group-title">Análisis</span>
            <li class="menu-item menu-item-static"> <!--lista4-->
                <a href="#" class="menu-link">
                    <i class="fa-solid fa-chart-line"></i> <!--Icono de Fon awesome (Reports)-->
                    <span>Reportes</span>
                </a>
            </li> 
        </div>
        
        <div class="menu-group"><!--3 Grupo-->
        <span class="group-title">Administración</span>
            <li class="menu-item menu-item-static"><!--Lista5-->
                <a href="#" class="menu-link">
                    <i class="fa-solid fa-user-gear"></i> <!--Icono de Fon awesome (User gear)-->
                    <span>Usuarios</span> 
                </a>
            </li> 

            <li class="menu-item menu-item-static"><!--Lista6-->
                <a href="#" class="menu-link">
                    <i class="fa-solid fa-truck"></i> <!--Icono de Fon awesome (Truck)-->
                    <span>Proveedores</span>
                </a>
            </li>   

            <li class="menu-item menu-item-static"><!--Lista7-->
                <a href="#" class="menu-link">
                    <i class="fa-solid fa-gear"></i> <!--Icono de Fon awesome (Settings)-->
                    <span>Ajustes</span>
                </a>
            </li>
        </div>
            
        <!--Codigo de separacion- Empuja hacia el area de abajo-->
        <div class="menu-group footer-menu">
            <ul class="menu">
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="fa-solid fa-circle-user"></i>
                        <span>Mi Perfil</span>
                    </a>
                </li>
                <li class="menu-item logout">
                    <a href="#" class="menu-link">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Cerrar Sesión</span>
                    </a>
                </li>
            </ul>
        </div>
        </ul><!--1.1 Fin del contenedor del menu (SE TE OLVIDO CERRAR EL UL 1/01/2026)-->  <!-- Fin (menu con los inconos)-->            
    </nav>
</aside>
<!--2.3 Fin del SIDEBAR-->


<!--2.2 TOP NAVBAR/(Menu de Arriba)- TAREA: TOP NAVBAR para el Dasboard PERFIL DE USUARIO 12/01/2026-->
    <section class="main-view"> <!-- main-view es la que genera ese fondo gris.-->
        <header class="top-navbar">
            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i> <!--Icono de Fon awesome (magnifying-glass)-->
                <input type="text" placeholder="Buscar en el sistema...">
            </div>

            <div class="header-actions">
                <div class="notifications-icon">
                    <i class="fa-solid fa-bell"></i> <!--Icono de Fon awesome (bell)-->
                    <span class="dot"></span>
                </div>

                <div class="user-profile">
                    <div class="profile-text">
                        <span class="user-name">Super-Admin</span>
                        <span class="user-status">En línea</span>
                    </div>
                    <div class="profile-avatar">
                        <img src="/img/Logo1.png" alt="Perfil">
                    </div>
                </div>
            </div>
        </header>
        <!--CONTENIDO DEL DASHBOARD/(Area de trabajo)- TAREA: Contenido del Dasboard 12/01/2026-->
        <div class="dashboard-content"> <!-- Contenedor del contenido del dashboard-->
        <!-- tabla de ventas -->
            <div class="card-table">
                <div class="table-header">
                    <div class="header-title">
                        <!--filtrado -->
                        <form class="filter-form">

                            <div class="input-group">
                                <label for="filtro-fecha">Fecha de salida</label>
                                <input type="date" id="filtro-fecha">
                            </div>

                            <div class="input-group">   <label for="filtro-estado">Estado</label>
                                <select id="filtro-estado">
                                    <option value="entregado">Entregado</option>
                                    <option value="pendiente">Pendiente</option>
                                    <option value="cancelado">Cancelado</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Producto / SKU</th>
                                <th>Motivo de Salida</th>
                                <th>Cant.</th>
                                <th>Fecha y Hora</th>
                                <th>Responsable</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>1</strong></td>
                                <td>
                                    <div style="display: flex; flex-direction: column;">
                                        <span style="font-weight: 600;">Flexxfolio 360 18-Pocket – Red</span>
                                        <small style="color: #64748b;">SKU: UG-10234</small>
                                    </div>
                                </td>
                                <td>Venta Directa</td>
                                <td><strong>1</strong></td>
                                <td>16/01/2026 - 10:30 AM</td>
                                <td>Super-Admin</td>
                                <td><span class="status-pill status-success">Entregado</span></td>
                            </tr>

                            <tr>
                                <td><strong>2</strong></td>
                                <td>
                                    <div style="display: flex; flex-direction: column;">
                                        <span style="font-weight: 600;">La Selva Prohibida</span>
                                        <small style="color: #64748b;">SKU: DS-11002</small>
                                    </div>
                                </td>
                                <td>Venta Directa</td>
                                <td><strong>1</strong></td>
                                <td>15/01/2026 - 04:15 PM</td>
                                <td>Administrador</td>
                                <td><span class="status-pill status-success">Entregado</span></td>
                            </tr>

                            <tr>
                                <td><strong>3</strong></td>
                                <td>
                                    <div style="display: flex; flex-direction: column;">
                                        <span style="font-weight: 600;">Limited Pack 2025</span>
                                        <small style="color: #64748b;">SKU: UG-10567</small>
                                    </div>
                                </td>
                                <td>Venta Directa</td>
                                <td><strong>1</strong></td>
                                <td>15/01/2026 - 09:00 AM</td>
                                <td>Administrador</td>
                                <td><span class="status-pill status-success">Entregado</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> <!-- Fin del codigo-->  
        </div>
    </section> 
</div> <!-- fin del Contenedor principal del Dashboard-->

</body>
</html>