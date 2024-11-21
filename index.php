<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Factura</title>
    <!-- Incluye una hoja de estilo CSS externa para dar formato a la página -->
    <link rel="stylesheet" href="styles.css?v=1.0">
</head>
<body>
        <h1>Factura</h1>
        <form action="guardar_factura.php" method="post">
            <!-- Etiqueta y campo para el nombre del cliente -->
            <label for="cliente">Cliente:</label>
            <input type="text" name="cliente" id="cliente" required><br>

            <!-- Etiqueta y campo para el nombre del producto -->
            <label for="producto">Producto:</label>
            <select name="producto" id="producto">
                <option value=""></option>
                <option value="Enero">Enero</option>
                <option value="Febrero">Febrero</option>
                <option value="Marzo">Marzo</option>
                <option value="Abril">Abril</option>
                <option value="Mayo">Mayo</option>
                <option value="Junio">Junio</option>
                <option value="Julio">Julio</option>
                <option value="Agosto">Agosto</option>
                <option value="Septiembre">Septiembre</option>
                <option value="Octubre">Octubre</option>
                <option value="Noviembre">Noviembre</option>
                <option value="Diciembre">Diciembre</option>
            </select><br>

            <!-- Etiqueta y campo para el precio -->
            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" value="3000" readonly required><br>

            <!-- Botón para enviar el formulario y guardar la factura -->
            <input type="submit" value="Guardar Factura">
        </form>

        <h2>Facturas Guardadas</h2>
        <ul>
            <?php
            // Lee el contenido del archivo 'facturas.txt' y lo almacena en la variable $facturas
            $facturas = file('facturas.txt');

            // Itera a través de cada línea del archivo de facturas
            foreach ($facturas as $factura) {
                // Divide la línea en un arreglo utilizando el carácter '|' como separador
                $datos = explode('|', $factura);

                // Imprime los datos de cada factura en una lista
                echo "<li>{$datos[0]} - {$datos[1]} - {$datos[3]}</li>";
            }
            ?>
        </ul>

</body>
</html>



