<?php
include "crudEstoque.php";

// Verificando se o método de requisição é POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Usando o operador de coalescência nula para evitar avisos de chave indefinida
    $nome = $_POST['nome'] ;
    $preco = $_POST['precoInput'] ;
    $quantidade = $_POST['quantidadeInput'] ;
    $categoria = $_POST['categoriaSelect'] ;
    $data_validade = $_POST['dataInput'] ;

    // Verifique se os valores obrigatórios foram fornecidos
    if ($nome && $preco && $quantidade && $categoria && $data_validade) {
        $p = new produtos(null, $nome, $preco, $quantidade, $categoria, $data_validade);
        $teste = $p->cadastrarProduto($p);
    } else {
        // Trate o erro, se necessário (ex.: redirecionar ou exibir mensagem)
        echo "Por favor, preencha todos os campos obrigatórios.";
    }
} else {
    // Se não for uma requisição POST, redirecionar ou exibir uma mensagem
    echo "Método não permitido.";
}
?>