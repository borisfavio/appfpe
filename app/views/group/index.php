<!-- Custom styles for this page -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<?php
$title = 'Grupos';

ob_start(); // Captura el contenido dinámico
?>
<h1>Lista de Grupos</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php foreach ($groups as $group): ?>
                                        <tr>
                                            <td><?php echo $group['id']; ?></td>
                                            <td><?php echo $group['nombres']; ?></td>
                                            <td><?php echo $group['id_tutor']; ?></td>
                                            <td><?php echo $group['id_programa']; ?></td>
                                            <td>
                                                <a href="/product/edit/<?php echo $group['id']; ?>" class="btn btn-primary btn-sm">Editar</a>
                                                <a href="/product/delete/<?php echo $group['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


<?php
$content = ob_get_clean(); // Almacena el contenido en la variable $content



include __DIR__ . '/../layouts/layout.php'; // Usa la plantilla principal
