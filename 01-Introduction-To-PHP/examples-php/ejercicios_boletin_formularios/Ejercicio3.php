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
        <form action="e3.php" method="post">
            <p>Rellena el siguiente formulario</p>
            <p>Nombre: <input type="text" name="nombre" required/></p>
            <p>Apellidos: <input type="text" name="apellidos" required/></p>
            <p>Correo electrónico: <input type="text" name="correo" required/></p>
            <p>Contraseña <input name="pass" type="password"/></p>
            <p>sexo<br/>
                <input type="radio" name="sexo" value="V"/>Varon<br/>
                <input type="radio" name="sexo" value="M"/>Mujer<br/>
            </p>
            <p>Interesado en los siguientes temas: <br/>
                <input type="checkbox" name="aficiones[]" value="musica"/>Musica<br/>
                <input type="checkbox" name="aficiones[]" value="deportes"/>Deportes<br/>
                <input type="checkbox" name="aficiones[]" value="cine"/>Cine<br/>
                <input type="checkbox" name="aficiones[]" value="libros"/>Libros<br/>
                <input type="checkbox" name="aficiones[]" value="ciencia"/>Ciencia<br/>
            </p>
            <p><input type="submit" name="submit" value="Enviar formulario"/>
                <input type="reset" value="Borrar"></p>
            
        </form>
    </body>
</html>

