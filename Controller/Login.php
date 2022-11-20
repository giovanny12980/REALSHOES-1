<?php 
    include "../model/conexion.php";
    

    if(isset($_POST['login'])){
        $email      = $_REQUEST['email'];
        $password   = $_REQUEST['password'];

        echo "<br>" . $email . $password;

        $email          = mysqli_real_escape_string($conectar, $_POST['email']);
        $password       = mysqli_real_escape_string($conectar, $_POST['password']);

        $consulta       = "SELECT * FROM persona WHERE email='$email'";
        $resultado      = mysqli_query($conectar, $consulta) or die(mysqli_connect_error());
        $fila          = mysqli_fetch_assoc($resultado);
    
        $filas          = mysqli_num_rows($resultado);

        
        if($password == $fila['contraseña'] && $email == $fila['email']){
            if($fila['idrolp']==1){
                echo "
                    <script>alert('Inicio de Sesión exitoso');
                        window.location = '../view/Admin/Dashboard.php';    
                    </script>
                ";
            } elseif($fila['idrolp']==2){
                echo "
                    <script>alert('Inicio de Sesión exitoso');
                        window.location = '../view/Admin/Dashboard.php';    
                    </script>
                ";
            }elseif($fila['idrolp']==3){
                echo "
                    <script>alert('Inicio de Sesión exitoso');
                        window.location = '../view/Dashboard.php';    
                    </script>
                ";
            }elseif($fila['idrolp']==4){
                echo "
                    <script>alert('Inicio de Sesión exitoso');
                        window.location = '../view/Admin/Dashboard.php';    
                    </script>
                ";
            }elseif($fila['idrolp']==5){
                echo "
                    <script>alert('Inicio de Sesión exitoso');
                        window.location = '../view/Admin/Dashboard.php';    
                    </script>
                ";
            }elseif($fila['idrolp']==6){
                echo "
                    <script>alert('Inicio de Sesión exitoso');
                        window.location = '../view/Cliente/Home.php';    
                    </script>
                ";
                
            }
            session_start();
            $_SESSION['idrolp'];
            $nombre =$fila['nombre'];
        }else{
            echo "
            <script>alert('Usuario o contraseña incorrecto');
                        window.location = '../View/Cliente/Login.php';    
                    </script>
            ";
        }
    }
?>  