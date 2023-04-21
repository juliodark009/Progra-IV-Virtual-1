<?php
$cantidad = $_POST['txtcantidad'];
$precio = $_POST['txtprecio'];
$subtot = $cantidad * $precio;
$iva = $subtot * 0.13;
$cesc = $subtot * 0.05;
$totalpag = $subtot + $iva + $cesc;

echo 'Estimado Cliente el subtotal de su Compra es de: $ ' . $subtot . " dolares <br><br>";

echo 'Estimado Cliente el IVA aplicado a su Cumpra es de: $ ' .$iva . " dolares <br><br>";

echo 'Estimado Cliente el Impuesto CESC de su Compra es de: $ ' .$cesc . " dolares <br><br>";

echo 'Estimado Cliente su Compra Total es de $ ' .$totalpag . " dolares <br><br>";

echo 'Gracias Por su Compra, Lo Esperamos Pronto!!!';

?>