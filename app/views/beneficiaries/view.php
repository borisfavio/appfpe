<!-- Custom styles for this page -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<?php
$title = 'Beneficiario - FPE';

ob_start(); // Captura el contenido dinámico
?>

<div class="container d-flex justify-content-center mt-5">
    <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 22rem;">
        <img src="./img/undraw_profile_1.svg" class="card-img-top rounded-circle mx-auto d-block mt-3"
             alt="Foto de Beneficiario" style="width: 120px; height: 120px; object-fit: cover;"
             onerror="this.onerror=null; this.src='user-placeholder.png';">
        <div class="card-body text-center">
            <h5 class="card-title fw-bold"><?= $beneficiary['nombres'] ?></h5>
            <p class="text-muted">Código: <strong><?= $beneficiary['codigo'] ?></strong></p>
            <p>Grupo: <strong><?= $beneficiary['grupo'] ?></strong></p>
            <p>Tutor: <strong><?= $beneficiary['tutor'] ?></strong></p>
            <p>Días de Asistencia: <strong><?= $beneficiary['dias'] ?></strong></p>
            <p>Teléfono: <strong><?= $beneficiary['telefono'] ?></strong></p>
            <p>Dirección: <strong><?= $beneficiary['direccion'] ?></strong></p>
            <div class="d-grid gap-2">
            <a href="https://wa.me/591<?php echo $beneficiary['telefono']; ?>" target="_blank" class="btn btn-success">Whatsapp</a>
                <button class="btn btn-primary">✏️ Editar</button>
                <button class="btn btn-secondary">📖 Anécdotas</button>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean(); // Almacena el contenido en la variable $content



include __DIR__ . '/../layouts/layout.php'; // Usa la plantilla principal
