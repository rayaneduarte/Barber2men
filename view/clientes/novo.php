<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Cliente</title>
    <link rel="stylesheet" href="../../styleins.css">
</head>
<body>
    <h1>Adicionar Novo Cliente</h1>
    <form action="ClienteController.php?action=adicionar" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" required><br>

        <label for="dt_nasc">Data de Nascimento:</label>
        <input type="date" name="dt_nasc" required><br>

        <label for="whatsapp">WhatsApp:</label>
        <input type="text" name="whatsapp" required><br>

        <label for="logradouro">Logradouro:</label>
        <input type="text" name="logradouro"><br>

        <label for="num">Número:</label>
        <input type="text" name="num"><br>

        <label for="bairro">Bairro:</label>
        <input type="text" name="bairro"><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>
