<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Compra</title>
</head>
<body>
    <h1>Editar Compra</h1>
    <form action="CompraController.php?action=adicionar" method="POST">
        <label for="cliente_id">Cliente ID:</label>
        <input type="number" name="cliente_id" value="101" required><br>

        <label for="servico_id">Serviço ID:</label>
        <input type="number" name="servico_id" value="5" required><br>

        <label for="data">Data:</label>
        <input type="date" name="date" value="01-12-2024" required><br>

        <label for="horario">Horário:</label>
        <input type="time" name="horario" value="14:00" required><br>

        <label for="qtd">Quantidade:</label>
        <input type="number" name="qtd" value="3" required><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>