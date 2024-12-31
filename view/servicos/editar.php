<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Serviço</title>
</head>
<body>
    <h1>Editar Serviço</h1>
    <form action="ServicoController.php?action=editar&id=1" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="Corte de Cabelo" required><br>

        <label for="valor">Valor:</label>
        <input type="number" name="valor" value="50.00" required><br>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" required>Corte masculino completo</textarea><br>

        <button type="submit">Salvar Alterações</button>
    </form>
</body>
</html>
