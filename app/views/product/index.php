<div class="container mx-auto mt-10">
    <a href="/?action=create" class="bg-blue-500 text-white px-4 py-2 rounded">Nuevo Producto</a>
    <a href="/?action=report" class="bg-green-500 text-white px-4 py-2 rounded">Generar Reporte</a>
    <table class="table-auto w-full mt-5 border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 px-4 py-2">ID</th>
                <th class="border border-gray-300 px-4 py-2">Nombre</th>
                <th class="border border-gray-300 px-4 py-2">Cantidad</th>
                <th class="border border-gray-300 px-4 py-2">Precio</th>
                <th class="border border-gray-300 px-4 py-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td class="border border-gray-300 px-4 py-2"><?= $product['id'] ?></td>
                    <td class="border border-gray-300 px-4 py-2"><?= $product['name'] ?></td>
                    <td class="border border-gray-300 px-4 py-2"><?= $product['quantity'] ?></td>
                    <td class="border border-gray-300 px-4 py-2"><?= $product['price'] ?></td>
                    <td class="border border-gray-300 px-4 py-2">
                        <a href="/?action=edit&id=<?= $product['id'] ?>" class="text-blue-500">Editar</a>
                        <a href="/?action=delete&id=<?= $product['id'] ?>" class="text-red-500">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
