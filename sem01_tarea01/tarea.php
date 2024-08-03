<?php
// BY:  YAGUAR, Eduardo


/* 
a. Declaración de Variables:
    - Define al menos cinco variables de diferentes tipos de datos (integer, float, string, boolean, array).
    - Asigna valores a estas variables. */

$nombreProducto = "Camiseta"; // string
$cantidadProductos = 100; // integer
$precioUnitario = 15.99; // float
$enStock = true; // boolean
$categoriasProducto = ["Ropa", "Casual", "Verano", "Unisex", "Algodón"]; // array

/*
b. Operaciones Aritméticas
    - Realiza al menos dos operaciones aritméticas con las variables numéricas que has creado.
      Muestra el resultado usando la función `echo`. */

$valorTotalInventario = $cantidadProductos * $precioUnitario;
echo "El valor total del inventario es: $" . number_format($valorTotalInventario, 2) . "\n";
echo "<br>";

$descuento = $valorTotalInventario * 0.1;
echo "El descuento aplicado es: $" . number_format($descuento, 2) . "\n";
echo "<br><br>";


/*
c. Manipulación de Cadenas
    - Crea una variable de tipo cadena y realiza las siguientes acciones:
    - Concatenación de dos cadenas.
    - Obtén la longitud de la cadena. */

$descripcion = "Producto importado";
$descripcionCompleta = $nombreProducto . ": " . $descripcion;
echo "Descripción completa: " . $descripcionCompleta . "\n";
echo "<br>";
echo "Longitud de la descripción completa: " . strlen($descripcionCompleta) . " caracteres\n";
echo "<br><br>";

/*
d. Uso de Condicionales
    - Crea una estructura de control condicional que verifique el valor de una variable booleana
      y muestre un mensaje diferente según sea `true` o `false`.*/

if ($enStock) {
    echo "El producto está disponible para compra inmediata.\n";
} else {
    echo "Lo sentimos, el producto está agotado temporalmente.\n";
}
echo "<br><br>";

/*
e. Creación de un Array:
   - Define un arreglo con al menos cinco elementos.
    Muestra un elemento específico del arreglo utilizando su índice. */

echo "La segunda categoría del producto es: " . $categoriasProducto[1] . "\n";
echo "<br>";
?>