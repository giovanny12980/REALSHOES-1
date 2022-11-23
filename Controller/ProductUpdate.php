<?php
    /** conexion base de datos*/
    include "../model/conexion.php";

    if(isset($_POST['ActualizarProd'])){

        /** validar datos sin caracteres especiales*/
        $idpr       = mysqli_real_escape_string($conectar, $_REQUEST['Idproducto']);
        $idplac       = mysqli_real_escape_string($conectar, $_REQUEST['idplacainventario']);
        $marca       = mysqli_real_escape_string($conectar, $_REQUEST['Marca']);
        $genero       = mysqli_real_escape_string($conectar, $_REQUEST['Genero']);
        $talla       = mysqli_real_escape_string($conectar, $_REQUEST['Talla']);
        $coleccion       = mysqli_real_escape_string($conectar, $_REQUEST['Coleccion_Temporada']);
        $tip       = mysqli_real_escape_string($conectar, $_REQUEST['Tipo']);

        if($conectar===false){
            die("Ha habido errores mientras se intentaba ingresar los datos del producto" .mysqli_connect_error());
        }else{

        /** consulta de actualizacion de datos */

                $actualizar =   "UPDATE producto
                SET idplacainventario = $idplac,
                    Marca ='$marca',
                    Genero = '$genero',
                    idtalla = $talla,
                    Coleccion_Temporada ='$coleccion',
                    Tipo ='$tip',
                    fecha_creacion = now(),
                    ultima_modificacion= now(),
                    fecha_eliminacion=null
                WHERE      Idproducto = $idpr";

        if($conectar->query($actualizar) ===TRUE){
        echo "<script>alert('Los datos del producto han sido actualizados')
        window.location.href='../View/Admin/RegisterProduct.php'</script>";
        }else{
        echo "No ha sido posible la actualización, verifique la información. <br>";
        echo $conectar->error;
        }
        }
        $conectar->close();

}
?>