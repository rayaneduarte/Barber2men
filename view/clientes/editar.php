<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar Cliente</h1>
    <form action="ClienteController.php?action=editar&id=1" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="João Silva" required><br>

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" value="12345678901" required><br>

        <label for="dt_nasc">Data de Nascimento:</label>
        <input type="date" name="dt_nasc" value="1985-07-15" required><br>

        <label for="whatsapp">WhatsApp:</label>
        <input type="text" name="whatsapp" value="(11) 91234-5678" required><br>

        <label for="logradouro">Logradouro:</label>
        <input type="text" name="logradouro" value="Rua A"><br>

        <label for="num">Número:</label>
        <input type="text" name="num" value="123"><br>

        <label for="bairro">Bairro:</label>
        <input type="text" name="bairro" value="Centro"><br>

        <button type="submit">Salvar Alterações</button>
    </form>
</body>
</html>
