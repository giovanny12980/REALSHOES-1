<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  -->
    <!-- CSS only -->
    <?php include "includes/cdnstop.php"?>  
    <title>Document</title>
</head>
<body>
    <!--inicio Header  -->
    <?php include "includes/header.php"?>    
    <!--Fin Header  -->
    
    <!--inicio menu  -->
     <?php include "includes/nav.php"?>   
    <!--Fin menu  -->

    <!-- Inicio Contenido-->
    <div class="main">
        <!-- Submenu -->
        <aside class="submenu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </aside>
        <!-- Submenu -->

        <main>
            <!-- Formulario --->
            <div class='shadow'>
                <form action='../../Controller/ProductRegister.php' method='post' style='padding: 10px; margin:10px;'>
                    <h3 style='text-align: center; 'class ='text-success'>Registro de Producto</h3>
                    <div class='form-group'>
                        <label for=''>Identificacion</label>
                        <input type='number' class='form-control' id='Idproducto'>
                    </div>    
                    <div class='form-group'>
                        <label for='tipo'>Tipo:</label>
                        <input type='text' class='form-control' id='Tipo'>
                    </div>
                    <div class='form-group'>
                        <label for=''>Marca:</label>
                        <input type='text' class='form-control' id='Marca'>
                    </div>
                    <div class='form-group'>
                        <label for=''>Genero:</label>
                        <input type='text' class='form-control' id='Genero'>
                    </div>
                    <div class='form-group'>
                        <label for='coleccion'>Colección o Temporada:</label>
                        <input type='text' class='form-control' id='Coleccion_Temporada'>
                    </div>
                    <div>
                    <span class='input-group-text'>Codigo Inventario:</span>
                        <select class='form-control' name="idplacainventario" id="idplacainventario">
                        <option value="1">Seccion tres</option>
                        <option value="2">Seccion dos</option>
                        <option value="3">No Disponible</option>
                        <option value="4">Seccion uno</option>
                        <option value="5">seccion cuatro</option>
                        </select>
                    </div>
                    <div>
                    <span class='input-group-text'>Talla:</span>
                        <select class='form-control' name='idtalla' id='idtalla' required>
                            <option value='1'>Nacional N°38</option>
                            <option value='2'>Nacional N°39</option>
                            <option value='3'>Nacional N°40</option>
                            <option value='4'>Nacional N°41</option>
                            <option value='5'>USA N°38</option>
                            <option value='6'>USA N°39</option>
                            <option value='7'>USA N°40</option>
                            <option value='8'>USA N°41</option>
                            <option value='9'>Europea N°38</option>
                            <option value='10'>Europea N°39</option>
                            <option value='11'>Europea N°40</option>
                            <option value='12'>Europea N°41</option>
                        </select>
                        </div>

                    <div class='input-group mb-3'>
                        <input class='btn btn-primary' type='submit' value='Registrar Producto' name='registrarProd' style='float: right;'>
                    </div>
                </form>
            </div>
             <!-- Formulario --->
             
            <!-- Tabla de registros--->
            <div class="row">
                <div class="col">
                    <?php 
                        include "../../Controller/ShowProduct.php";
                    ?>  
                </div>  
                 
            </div>
            <!-- Tabla de Registros--->
            

        </main>
    </div>
    <!-- Fin Contenido-->

    <!-- Inicio footer -->
    <?php include "includes/footer.php"?> 
    <!-- fin footer -->

<!-- JavaScript Bundle with Popper -->
<?php include "includes/cdnsbot.php"?> 

</body>
</html>