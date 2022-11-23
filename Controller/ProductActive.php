<?php
include "../Model/conexion.php";

if (isset($_GET['activeid']))

    $id=$_GET['activeid'];

    if($id!=null){
        $consulta       = "SELECT fecha_eliminacion FROM producto WHERE Idproducto=$id";
        $resultado      = mysqli_query($conectar, $consulta) or die(mysqli_connect_error());
        $fila          = mysqli_fetch_assoc($resultado);

        if($fila['fecha_eliminacion']==null){
            /**Desactivar un usuario */
            $desactivar = "UPDATE producto
                       SET fecha_eliminacion = now()
                       WHERE  Idproducto = $id";

            if($conectar->query($desactivar) ===TRUE){
            echo "<script>alert('Los datos del producto han sido desactivados correctamente')
                    window.location.href='../View/Admin/RegisterProduct.php'</script>";
            }else{
            echo "No ha sido posible la desactivación, verifique la información. <br>";
            echo $conectar->error;
            }
            
        }else{
            /**Activar un usuario */
            $activar = "UPDATE producto
                       SET fecha_eliminacion = null
                       WHERE  Idproducto = $id";

            if($conectar->query($activar) ===TRUE){
            echo "<script>alert('Los datos del producto han sido activados correctamente')
                    window.location.href='../View/Admin/RegisterProduct.php'</script>";
            }else{
            echo "No ha sido posible la activación, verifique la información. <br>";
            echo $conectar->error;
            }

        }


        

        $conectar->close();
    }else{
        echo "<script>alert('Por favor actualice sus datos.')
                window.location.href='../View/Admin/userRegister.php'</script>";
    }
?>