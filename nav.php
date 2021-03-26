            
            
            <nav class="main-menu">
                <ul>
                    <li>
                        <a href="index.php">
                            <img src="img/menu.png"/></i>
                            <span class="nav-text">
                                Dashboard
                            </span>
                        </a>
                    </li>
                    <li class="has-subnav">
                        <a href="#"><img src="img/contact.png"/> Listas</a>
                        <ul>
                            <?php if($_SESSION['lista_pro']==1){?>
                            <li>
                                <a href="proveedor_lista.php">
                                    <img src="img/company.png"/> Proveedores
                                </a>
                            </li>

                            <?php } ?>
                            <?php if($_SESSION['cliente']==1){?>

                            <li>
                                <a href="clientes_lista.php">
                                    <img src="img/todo.png"/> Clientes
                                </a>
                            </li>

                            <?php } ?>
						    <?php if($_SESSION['cliente']==1){?>
                            
                            <li>
                                <a href="taller_lista.php">
                                    <img src="img/new-store.png"/> Talleres
                                </a>
                            </li>                         
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="has-subnav">
                        <a href="#"><img src="img/traffic.png"/> Productos</a>
                        <ul>
                            <?php if($_SESSION['lista_pro']==1){?>
                            <li>
                                <a href="producto_lista.php">
                                    <img src="img/barcod.png"/> Lista de Productos
                                </a>
                            </li>
                            <?php } ?>
                            <li>
                                <a href="producto_catalogo.php">
                                    <img src="img/rules-book.png"/> Catalogos
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-subnav">
                        <a href=""><img src="img/total.png"/> Ventas</a>
                        <ul>
                            <?php if($_SESSION['nueva_venta']==1){?>
                            <li>
                                <a href="venta_nueva.php">
                                    <img src="img/shopping.png"/> Carrito de Compras
                                </a>
                            </li>
                            <?php } ?>

                            <?php if($_SESSION['Lista_venta']==1){?>
                            <li>
                                <a href="venta_lista.php">
                                    <img src="img/ledger.png"/> Lista de Ventas
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="has-subnav">
                        <a href=""><img class="imagenes" src="img/settings.png"/> Ajustes</a>
                        <ul>
                            <?php if($_SESSION['lista_usuario']==1){?>
                            <li>
                                <a href="configuración.php">
                                    <img src="img/change.png"/> Configuración
                                </a>
                            </li>
                            <?php } ?>
                            

                            <?php if($_SESSION['configuracion']==1){?>
                            <li>
                                <a href="usuario_lista.php">
                                    <img src="img/users.png"/> Lista de Usuarios
                                </a>
                            </li>
                            <?php } ?>

                            <?php if($_SESSION['act_contra']==1){?>
                            <li>
                                <a href="usuario_contraseña.php">
                                    <img src="img/password.png"/> Cambiar Contraseña
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                </ul>

                <ul class="logout">
                    <li>
                        <a href="#">
                            <i class="fa fa-power-off fa-2x"></i>
                            <span class="nav-text">
                                Salir
                            </span>
                        </a>
                    </li>  
                </ul>
            </nav>