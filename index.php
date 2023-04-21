<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melón de agua</title>
</head>
<body>
    <header>
        <h2>La contraseña es: yepaquepasagenteyosoyelmelondeagua</h2>
    </header>
    <!--
    1. Crear una pagina con password para acceder a archivos html

    El primer archivo debe llevar un codigo.php con el password en el encabezado, antes de
    iniciar el codigo HTML, PARA REDIRIGIR A LOS ARCHIVOS CORRECTOS O INCORRECTOS
    Si el password es correcto se dirige a newpage.html
    Si el password es incorrecto se dirige a sorry.html
    -->
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="password" name="clave">
        <input type="submit" name="enviar" id="">
    </form>
    <?php
        if(isset($_POST['enviar'])){
            $clave = $_POST['clave'];
            if($clave == 'yepaquepasagenteyosoyelmelondeagua'){
                header("Location: newpage.php");
            }
            else{
                header("Location: sorry.php");
            }

        }
    ?>
</body>
</html>