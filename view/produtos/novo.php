<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Produto</title>
    <link rel="stylesheet" href="../../styleins.css">
</head>
<body>
    <h1>Adicionar Novo Produto</h1>
    <form action="ProdutoController.php?action=adicionar" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="valor">Valor:</label>
        <input type="number" name="valor" required><br>

        <label for="marca">Marca:</label>
        <input type="text" name="marca" required><br>

        <label for="categoria">Categoria:</label>
        <input type="text" name="categoria" required><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>
