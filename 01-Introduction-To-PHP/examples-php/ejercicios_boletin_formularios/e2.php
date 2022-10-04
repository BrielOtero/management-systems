<?php
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$mensaje=$_POST['mensaje'];
if(is_numeric($telefono)){
    print '<p>El mensaje: "'.$mensaje.'" Fue enviado por '.$nombre.', teléfono: '.$telefono.'. Su email es: '.$email.'.</p>';
    print '<p>Enviado el: '. date("d/m/Y", $timestamp=time()).'</p>';
}else{
    print 'nope';
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

