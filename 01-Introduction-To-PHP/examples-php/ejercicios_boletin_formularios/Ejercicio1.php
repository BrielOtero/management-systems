<!DOCTYPE html>
<html>
    <head>
        <title>Compra</title>
        <meta charset="UTF-8"/>
        <?php include '../libreria.php'; ?>
    </head>
    <body>
        <form action="e1.php" method="post">
            <p>Precio: <input type="text" name="precio" size="5"/></p>
            <p>Cantidad: <input type="text" name="cantidad" size="5"/></p>
            <p>Descuento: <input type="text" name="descuento" size="5"/></p>
            <p>IVA <input type="text" name="iva" size="3"/>%</p>
            <p>Método de envío: <select name="envio">
                    <option value="tienda">Recoger en tienda</option>
                    <option value="correos">Envío por Correos</option>
                    <option value="seur">Envío por Seur</option>
                </select>
            </p>
            <input type="submit" name="formulario" value="Calcular Precio Total"/>
        </form>
    </body>
</html>
