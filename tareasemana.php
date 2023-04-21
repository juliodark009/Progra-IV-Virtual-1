<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago Total con Impuestos del Cliente</title>
</head>
<body>
    <form action="calculo_compras.php" method="POST">
        <label for="txtcantidad">Cantidad : </label>
        <input type="text" name="txtcantidad" id="txtcantidad">
        <br><br> 
        
        <label for="txtprecio">Precio $: </label>
        <input type="text" name="txtprecio" id="txtprecio">
        <br><br>

        <input type="submit" value="REALIZAR COMPRA">

    </form> 
</body>
</html>