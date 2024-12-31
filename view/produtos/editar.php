<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>
<body>
    <h1>Editar Produto</h1>
    <form action="ProdutoController.php?action=editar&id=1" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="Gel Fixador" required><br>

        <label for="valor">Valor:</label>
        <input type="number" name="valor" value="25.00" required><br>

        <label for="marca">Marca:</label>
        <input type="text" name="marca" value="Marca A" required><br>

        <label for="categoria">Categoria:</label>
        <input type="text" name="categoria" value="Cosméticos" required><br>

        <button type="submit">Salvar Alterações</button>
    </form>
</body>
</html>
