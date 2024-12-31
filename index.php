<?php

include './controller/ClienteController.php';
include './controller/AgendamentoController.php';
include './controller/CompraController.php';
include './controller/ProdutoController.php';
include './controller/ServicoController.php';
include './controller/HomeController.php';

// Obtém os parâmetros da URL
$classe = isset($_GET['classe']) ? ucfirst($_GET['classe']) . 'Controller' : null;
$metodo = isset($_GET['metodo']) ? $_GET['metodo'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

try {
    // Se uma classe foi especificada
    if ($classe) {
        require_once "./controller/$classe.php"; // Caminho corrigido

        if (class_exists($classe)) {
            $controller = new $classe();

            // Verifica se o método existe
            if (method_exists($controller, $metodo)) {
                // Chama o método com ou sem o parâmetro $id
                if ($id !== null) {
                    $controller->$metodo($id);
                } else {
                    $controller->$metodo();
                }
            } else {
                throw new Exception("Método '$metodo' não encontrado.");
            }
        } else {
            throw new Exception("Classe '$classe' não encontrada.");
        }
    } else {
        // Caso não haja parâmetros, redireciona para a homepage
        require_once 'controller/HomeController.php'; // Caminho corrigido
        $controller = new HomeController();
        $controller->index();
    }
} catch (Exception $e) {
    // Tratamento de erro básico
    echo "<h1>Erro:</h1><p>" . $e->getMessage() . "</p>";
}
?>
