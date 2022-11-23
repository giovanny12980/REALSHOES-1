<?php
include "../Model/conexion.php";

if (isset($_GET['deleteid']))

    $id=$_GET['deleteid'];

   $actualizar = "  DELETE FROM  producto
                    WHERE  Idproducto = $id";
                    
if($conectar->query($actualizar) ===TRUE){
    echo "<script>alert('Los datos del Producto han sido Eliminados del Sistema')
            window.location.href='../View/Admin/RegisterProduct.php'</script>";
}else{
    echo "No ha sido posible la Eliminación, verifique la información. <br>";
    echo $conectar->error;
}

$conectar->close();

?>