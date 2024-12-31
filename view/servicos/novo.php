<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Serviço</title>
    <link rel="stylesheet" href="../../styleins.css">
</head>
<body>
    <h1>Adicionar Novo Serviço</h1>
    <form action="ServicoController.php?action=adicionar" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="valor">Valor:</label>
        <input type="number" name="valor" required><br>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" required></textarea><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>
