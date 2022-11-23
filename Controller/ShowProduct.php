<?php  
    /** conexion a la base de datos*/
    include "../../Model/conexion.php";


    $consulta       = "SELECT * FROM producto order by fecha_eliminacion asc";
    $resultado      = mysqli_query($conectar, $consulta) or die(mysqli_connect_error());


    /** titulo de la tabla*/
        echo "
        <table class='table table-responsive'>
            <thead class='center'>
                <tr>
                    <th>Identificacion Producto</th>
                    <th>Codigo Inventario</th>
                    <th>Tipo</th>
                    <th>Marca</th>
                    <th>Talla</th>
                    <th>Coleccion Temporada</th>
                    <th>Genero</th>
                    <th>Creado</th>
                    <th>Modificado</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>";

            /** llenado de la tabla $reg tiene los datos de la consulta */
            while ($reg = mysqli_fetch_array($resultado)) {
            echo "<tbody>";
                $idpr = $reg['Idproducto'];
                $Tipo = $reg['Tipo'];
                $Marc = $reg['Marca'];
                $colTemp = $reg['Coleccion_Temporada'];
                $gene = $reg['Genero'];
                $idi = $reg['idplacainventario'];
                $idt = $reg['idtalla'];
                $fcP = $reg['fecha_creacion'];
                $fmP = $reg['ultima_modificacion'];
                       
                if($reg['fecha_eliminacion']==null){
                    $estado="Activo";
                }else{
                    $estado="Inactivo";
                }

                /** llenado de la fila con sus datos */
            echo "                                                                 
                <th scope='row'>".$idpr."</th>
                <td>".$idi."</td>
                <td>".$Tipo."</td>
                <td>".$Marc."</td>
                <td>".$idt."</td>
                <td>".$colTemp."</td>
                <td>".$gene."</tb>
                <td>".$fcP."</td>
                <td>".$fmP."</td>
                <td>".$estado."</td>
                <td> 
                <!--  Botones de acciones actualizar activo, eliminar-->
                    <button class='btn btn-success'>
                        <a class='text-light' href='ProductosUpdate.php?updateid=".$idpr."'>Actualizar</a>
                    </button>
                    <button class='btn btn-warning'>
                        <a  class='text-light' href='../../Controller/ProductActive.php?activeid=".$idpr."'>Activar</a>
                    </button>

                    <!-- Button trigger modal -->
                    <button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                        Eliminar
                    </button>
                    
                    <!-- Modal -->
                    <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                        <div class='modal-dialog'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                            <h5 class='modal-title' id='exampleModalLabel'>Eliminar Registro</h5>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>
                            <div class='modal-body'>
                                <p>Antes de eliminar piense si es necesario eliminar este registro. <br>
                                    Mejor use la opcion de Activar/Desactivar. <br>
                                    Si decide eliminar tenga en cuenta que no es posible recuperar despues este registro</p>
                            </div>
                            <div class='modal-footer'>
                                <button type='button' class='btn btn-success' data-bs-dismiss='modal'>NO Eliminar</button>
                                <button type='button' class='btn btn-danger'><a  class='text-light' href='../../Controller/ProductDelete.php?deleteid='.$idpr.''>Confirmar Eliminar</a></button>
                            </div>
                        </div>
                        </div>
                    </div>

                </td>
                ";
            }echo"
            </tbody>
        </table>
        ";
?>

