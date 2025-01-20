<?php
$title = 'Lista de Productos';

ob_start(); // Captura el contenido dinámico
?>
<h1>Principal</h1>

<?php
$content = ob_get_clean(); // Almacena el contenido en la variable $content

include __DIR__ . '/../layouts/layout.php'; // Usa la plantilla principal
