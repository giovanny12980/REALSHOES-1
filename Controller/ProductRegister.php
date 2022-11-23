<?php
    /** conexion base de datos*/
    include "../model/conexion.php";

    if(isset($_POST['registrarProd'])){

        /** validar datos sin caracteres especiales*/
        $idpr         = mysqli_real_escape_string($conectar, $_REQUEST['Idproducto']);
        $idplac       = mysqli_real_escape_string($conectar, $_REQUEST['idplacainventario']);
        $marca        = mysqli_real_escape_string($conectar, $_REQUEST['Marca']);
        $genero       = mysqli_real_escape_string($conectar, $_REQUEST['Genero']);
        $talla        = mysqli_real_escape_string($conectar, $_REQUEST['idtalla']);
        $coleccion    = mysqli_real_escape_string($conectar, $_REQUEST['Coleccion_Temporada']);
        $tip          = mysqli_real_escape_string($conectar, $_REQUEST['Tipo']);
      


        if($conectar===false){
            die("Ha habido errores mientras se intentaba ingresar los datos del producto" .mysqli_connect_error());
        }else{

        /** consulta de actualizacion de datos */
        $insertar =   "INSERT INTO producto(Idproducto, idplacainventario, Marca, Genero, Talla, Coleccion_Temporada, 
                                    Tipo, fecha_creacion, ultima_modificacion, fecha_eliminacion)
                               VALUES($idpr, $idplac, '$marca', '$genero', '$talla', '$coleccion', '$tip', now(), now(), null";

        if($conectar->query($insertar) ===TRUE){
            echo "<script>alert('Los datos del producto han sido agregados')
                    window.location.href='../View/Admin/RegisterProduct.php'</script>";
        }else{
            echo "No ha sido posible la actualización, verifique la información. <br>";
            echo $conectar->error;
        }
        }
        $conectar->close();
        
    }
?>