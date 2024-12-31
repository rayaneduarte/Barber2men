<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Agendamento</title>
    <link rel="stylesheet" href="../../styleins.css">
</head>
<body>
    <h1>Novo Agendamento</h1>
    <form action="AgendamentoController.php?action=adicionar" method="POST">
        <label for="cliente_id">Cliente ID:</label>
        <input type="number" name="cliente_id" required><br>

        <label for="servico_id">Serviço ID:</label>
        <input type="number" name="servico_id" required><br>

        <label for="data">Data:</label>
        <input type="date" name="date" required><br>

        <label for="horario">Horário:</label>
        <input type="time" name="horario" required><br>

        <label for="duracao">Duração (minutos):</label>
        <input type="number" name="duracao" required><br>

        <label for="status">Status:</label>
        <input name="horario" required>
        <option value="pendente">Pendente</option>
            <option value="confirmado">Confirmado</option>
            <option value="concluido">Concluído</option>
        </select><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>
