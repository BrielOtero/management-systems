<?php


function comprobar_valor($valor)
{
    if (isset($valor) && !empty($valor)) {
        return false;
    } else {
        return true;
    }
}

function comprobar_valores()
{

    $error = comprobar_valor($_POST['nombre']);

    if ($error) {
        return true;
    }
    $error = comprobar_valor($_POST['apellidos']);

    if ($error) {
        return true;
    }
    $error = comprobar_valor($_POST['correo']);

    if ($error) {
        return true;
    }
    $error = comprobar_valor($_POST['contraseña']);

    if ($error) {
        return true;
    }
    $error = comprobar_valor($_POST['sexo']);

    if ($error) {
        return true;
    }
    $error = comprobar_valor($_POST['intereses']);

    if ($error) {
        return true;
    }

    $error = comprobar_valor($_POST['precio']);

    if ($error) {
        return true;
    }

    return false;
}


if (!comprobar_valores()) {
    print "Valido";
    print "<br>";
    print $_POST["nombre"];
    print "<br>";
    print $_POST["apellidos"];
    print "<br>";
    print $_POST["correo"];
    print "<br>";
    print $_POST["contraseña"];
    print "<br>";
    print $_POST["sexo"];
    print "<br>";
    $intereses = $_POST["intereses"];
    print "Intereses:";
    print "<br>";
    foreach ($intereses as $interes) {
        print $interes;
        print "<br>";
    }
    print $_POST['precio'];


} else {
    print "Valores no validos";
}