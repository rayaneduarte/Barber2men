<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Compra</title>
    <link rel="stylesheet" href="../../styleins.css">
</head>
<body>
    <h1>Registrar nova Compra</h1>
    <form action="CompraController.php?action=adicionar" method="POST">
        <label for="cliente_id">Cliente ID:</label>
        <input type="number" name="cliente_id" required><br>

        <label for="produto_id">Serviço ID:</label>
        <input type="number" name="produto_id" required><br>

        <label for="data">Data:</label>
        <input type="date" name="data" required><br>

        <label for="horario">Horário:</label>
        <input type="time" name="horario" required><br>

        <label for="qtd">Quantidade:</label>
        <input type="number" name="qtd" required><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>
