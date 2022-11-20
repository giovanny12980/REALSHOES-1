<?php
include "../Model/conexion.php";

if (isset($_GET['activeid']))

    $id=$_GET['activeid'];

    if($id!=null){
        $actualizar = "UPDATE persona
                       SET fecha_eliminacion = now()
                       WHERE  idpersona = $id";

        if($conectar->query($actualizar) ===TRUE){
        echo "<script>alert('Los datos del usuario han sido desactivados correctamente')
                window.location.href='../View/Admin/userRegister.php'</script>";
        }else{
        echo "No ha sido posible la desactivación, verifique la información. <br>";
        echo $conectar->error;
        }

        $conectar->close();
    }else{
        echo "<script>alert('Por favor actualice sus datos.')
                window.location.href='../View/Admin/userRegister.php'</script>";
    }
?>