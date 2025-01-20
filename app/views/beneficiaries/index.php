<!-- Custom styles for this page -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<?php
$title = 'Lista de Productos';

ob_start(); // Captura el contenido dinámico
?>
<h1>Lista de beneficiarios</h1>

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
                                            <th>ID</th>
                                            <th>Codigo</th>
                                            <th>Nombres</th>
                                            <th>Tutor</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            
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
                                    <?php foreach ($beneficiaries as $beneficiary): ?>
                                        <tr>
                                            <td><?php echo $beneficiary['id']; ?></td>
                                            <td><?php echo $beneficiary['codigo']; ?></td>
                                            <td><?php echo $beneficiary['nombres']; ?></td>
                                            <td><?php echo $beneficiary['tutor']; ?></td>
                                            <td>
                                                <a href="/product/edit/<?php echo $product['id']; ?>" class="btn btn-primary btn-sm">Editar</a>
                                                <a href="/product/delete/<?php echo $product['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
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
