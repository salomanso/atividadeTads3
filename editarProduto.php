<?php
// Inicia sessão e inclui a conexão com o banco de dados
session_start();
include("conexaoBD.php");

// Verifica se o usuário está logado e tem permissão (opcional, caso você tenha um controle de acesso)
if (!isset($_SESSION['logado']) || $_SESSION['tipoUsuario'] !== 'administrador') {
    header('location:formLogin.php?erroLogin=acessoProibido');
    exit;
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recebe e limpa os dados do formulário
    $idProduto        = mysqli_real_escape_string($conn, $_POST['idProduto']);
    $nomeProduto      = mysqli_real_escape_string($conn, $_POST['nomeProduto']);
    $descricaoProduto = mysqli_real_escape_string($conn, $_POST['descricaoProduto']);
    $valorProduto     = mysqli_real_escape_string($conn, $_POST['valorProduto']);
    $fotoAtual        = mysqli_real_escape_string($conn, $_POST['fotoAtual']);

    // Verifica se o campo de upload foi preenchido (nova foto)
    if (isset($_FILES['fotoProduto']) && $_FILES['fotoProduto']['error'] == 0) {
        $pastaDestino = "img/";
        $nomeArquivo = basename($_FILES['fotoProduto']['name']);
        $caminhoCompleto = $pastaDestino . $nomeArquivo;

        // Move o arquivo para a pasta
        if (move_uploaded_file($_FILES['fotoProduto']['tmp_name'], $caminhoCompleto)) {
            $fotoProduto = $caminhoCompleto;
        } else {
            $fotoProduto = $fotoAtual; // Se der erro no upload, mantém a foto antiga
        }
    } else {
        $fotoProduto = $fotoAtual; // Se não enviou nova foto, mantém a foto antiga
    }

    // Monta e executa a query de atualização
    $atualizarProduto = "
        UPDATE Produtos
        SET 
            fotoProduto = '$fotoProduto',
            nomeProduto = '$nomeProduto',
            descricaoProduto = '$descricaoProduto',
            valorProduto = '$valorProduto'
        WHERE idProduto = '$idProduto'
    ";

    if (mysqli_query($conn, $atualizarProduto)) {
        // Redireciona com mensagem de sucesso
        header("Location: listarProdutosTABELA.php?pagina=listarProdutosTABELA&status=sucesso");
        exit;
    } else {
        // Redireciona com mensagem de erro
        header("Location: listarProdutosTABELA.php?pagina=listarProdutosTABELA&status=erro");
        exit;
    }
} else {
    // Se acessar sem POST, redireciona para listagem
    header("Location: listarProdutosTABELA.php?pagina=listarProdutosTABELA");
    exit;
}
?>