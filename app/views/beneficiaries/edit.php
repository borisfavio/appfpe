<!-- Custom styles for this page -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<?php
$title = 'Lista de Productos';

ob_start(); // Captura el contenido dinámico
?>

<div class="container mx-auto mt-10">
    <div class="card">
        <div class="card-body p-0">
            <h2 class="text-2xl mb-5">Editar Beneficiario</h2>
            <form method="POST">
                <div class="form-group">
                <input class="form-control" type="text" name="codigo" value="<?= $beneficiary['codigo'] ?>" class="border p-2 w-full mb-4">
                </div>
                <input class="form-control" type="text" name="nombres" value="<?= $beneficiary['nombres'] ?>" class="border p-2 w-full mb-4">
                <input class="form-control" type="number" step="0.01" name="price" value="<?= $beneficiary['tutor_id'] ?>" class="border p-2 w-full mb-4">
                <button type="submit" class="btn btn-primary btn-user btn-block">Guardar</button>
            </form>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean(); // Almacena el contenido en la variable $content



include __DIR__ . '/../layouts/layout.php'; // Usa la plantilla principal
