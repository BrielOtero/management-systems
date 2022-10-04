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
        <form action="e2.php" method="post">
            <p>Rellena el siguiente formulario</p>
            <p>Nombre: <input type="text" name="nombre" required/></p>
            <p>Email: <input type="email" name="email" required/></p>
            <p>Teléfono: <input type="text" maxlength="9" name="telefono" required/></p>
            <p>Mensaje: <textarea rows="5" name="mensaje" cols="30" placeholder="Introduce aquí tu texto"></textarea></p>
            <p><input type="submit" name="boton" value="Enviar"/></p> 
        </form>
    </body>
</html>
