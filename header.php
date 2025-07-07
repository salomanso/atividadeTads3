<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Grayscale - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <!-- CDNs para Máscaras JQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- CDN para Ícones do Bootrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        
        <!-- Script para máscara do telefone -->
      <script>
        $(document).ready(function(){
            $("#telefoneUsuario").mask("(00) 00000-0000");
        });

        window.onload = function() {
            const conteudo = document.getElementById("conteudo-principal");
            if(conteudo) {
                conteudo.scrollIntoView({ behavior: 'smooth' });
            }
        }
    </script>
    </head>
    <body id="page-top">

        <?php
            error_reporting(0); //Desabilita reportagens de erros de execução
            session_start(); //Inicia sessão

            if(isset($_SESSION['logado']) && $_SESSION['logado'] === true){ //Verifica se há sessão ativa
                $idUsuario    = $_SESSION['idUsuario'];
                $tipoUsuario  = $_SESSION['tipoUsuario'];
                $nomeUsuario  = $_SESSION['nomeUsuario'];
                $emailUsuario = $_SESSION['emailUsuario'];

                $nomeCompleto = explode(' ', $nomeUsuario); //Usua a função explode para segmentar a string onde hoverem espaços ' '
                $primeiroNome = $nomeCompleto[0]; //Armazena a primeira string antes do espaço (primeiro nome)

            }
        ?>

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">HD TUR</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Início</a></li>
                        <li class="nav-item"><a class="nav-link" href="formLogin.php">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="formProduto.php">Cadastrar viagem</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php include "mastHead.php" ?>