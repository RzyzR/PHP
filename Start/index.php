<?php include 'header.php'; ?>

<h1>Bienvenido a mi página en PHP</h1>

<?php
    // Incluir y ejecutar el código PHP desde 'codigo.php'
    ob_start();
    include 'fucniones.php';
    $resultado_codigo = ob_get_clean();
    
    // Mostrar el resultado
    echo $resultado_codigo;
    ?>

<?php include 'footer.php'; ?>
