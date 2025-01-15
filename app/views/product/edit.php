<div class="container mx-auto mt-10">
    <h2 class="text-2xl mb-5">Editar Producto</h2>
    <form method="POST">
        <input type="text" name="name" value="<?= $product['name'] ?>" class="border p-2 w-full mb-4">
        <input type="number" name="quantity" value="<?= $product['quantity'] ?>" class="border p-2 w-full mb-4">
        <input type="number" step="0.01" name="price" value="<?= $product['price'] ?>" class="border p-2 w-full mb-4">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar</button>
    </form>
</div>
