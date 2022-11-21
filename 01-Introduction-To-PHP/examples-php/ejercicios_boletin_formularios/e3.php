<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        error_reporting(E_ALL ^ E_NOTICE);
        if(isset($_POST['nombre'])){
            $nombre=$_POST['nombre'];
        }
        if(isset($_POST['apellidos'])){
            $apellidos=$_POST['apellidos'];
        }
        if(isset($_POST['correo'])){
            $email=$_POST['correo'];
        }
        if(isset($_POST['pass'])){
            $pass=$_POST['pass'];
        }
        if(isset($_POST['sexo'])){
            $sexo=$_POST['sexo'];
        }
        if(isset($_POST['musica'])){
            $musica=$_POST['musica'];
        }
        if(isset($_POST['deportes'])){
            $deportes=$_POST['deportes'];
        }
        if(isset($_POST['cine'])){
            $cine=$_POST['cine'];
        }
        if(isset($_POST['libros'])){
            $libros=$_POST['libros'];
        }
        if(isset($_POST['ciencia'])){
            $ciencia=$_POST['ciencia'];
        }
        if(isset($_POST['aficiones'])){
            $aficiones=$_POST['aficiones'];
        }
        /*$nombre=$_POST['nombre'];
        $apellidos=$_POST['apellidos'];
        $email=$_POST['correo'];
        $pass=$_POST['pass'];
        $sexo=$_POST['sexo'];
        $musica=$_POST['musica'];
        $deportes=$_POST['deportes'];
        $cine=$_POST['cine'];
        $libros=$_POST['libros'];
        $ciencia=$_POST['ciencia'];*/

        
        
        echo "Los datos introducidos son:"."<br>"."nombre=".$nombre."<br>"."apellidos=".$apellidos."<br>"."email=".$email."<br>"."password=".$pass."<br>"."sexo=".$sexo;
        echo "<hr>";
        echo "Tus aficiones son:<br>";
        // if (!empty($musica)){
        //     echo 'musica ';
        //     echo "<br>";
        // }else{$musica="";}
        // if (!empty($deportes)){
        //     echo 'deportes ';
        //     echo "<br>";
        // }else{$deportes="";}
        // if (!empty($cine)){
        //     echo 'cine ';
        //     echo "<br>";
        // }else{$cine="";}
        // if (!empty($libros)){
        //     echo 'libros ';
        //     echo "<br>";
        // }else{$libros="";}
        // if (!empty($ciencia)){
        //     echo 'ciencia ';
        //     echo "<br>";
        // }else{$ciencia="";}
        foreach($aficiones as $aficion){
            print $aficion."<br>";
        }
        
        echo "<hr>";
        ?>
        <p>Comprueba tus datos anters de enviarlos</p>
        <p>Si los datos son correctos <a href="correctos.php">Enviar</a></p>
        <p>Si los datos no son correctos <a href="Ejercicio3.php">Volver</a></p>
    </body>
</html>
