<?php include "header.php" ?>

     <div id="conteudo-principal" class="container text-center mb-3 mt-3">    

     
            <?php

                //Inclui o arquivo de conexão com o Banco de Dados
                include("conexaoBD.php");

                $listarProdutos = "SELECT * FROM Produtos"; //Query para selecionar todos os campos da tabela

                //PHP para trabalhar o filtro

                //Verificar se há algum parâmetro sendo recebido via URL utilizando a função isset()
                if(isset($_GET["filtroProduto"])){
                    $filtroProduto = $_GET["filtroProduto"];
                    
                    if($filtroProduto != "todos"){
                        $listarProdutos = $listarProdutos . " WHERE statusProduto LIKE '$filtroProduto' ";
                    }

                    switch($filtroProduto){
                        case "todos" : $mensagemFiltro = "no total";
                        break;

                        case "disponivel" : $mensagemFiltro = "disponível";
                        break;

                        case "esgotado" : $mensagemFiltro = "esgotados";
                        break;
                    }
                    
                }
                else{
                    $filtroProduto = "todos";
                    $mensagemFiltro = "no total";
                }

                $res = mysqli_query($conn, $listarProdutos); //Executa a query
                $totalViagens = mysqli_num_rows($res); //Retorna a quantidade de registros

                if($totalViagens > 0){

                    if($totalViagens == 1){
                        echo "<div class='alert alert-info text-center'>Há <strong>$totalViagens</strong> viagens $mensagemFiltro!</div>";
                    }
                    else{
                        echo "<div class='alert alert-info text-center'>Há <strong>$totalViagens</strong> viagens $mensagemFiltro!</div>";
                    }

                }
                else{
                    echo "<div class='alert alert-info text-center'>Não há produtos cadastrados neste sistema!</div>";
                }


            ?>

            <hr>

            <div class="row">

                <?php
                    //Aqui ficará o loop para listar os registros
                    while($registro = mysqli_fetch_assoc($res)){
                        $idProduto        = $registro["idProduto"];
                        $fotoProduto      = $registro["fotoProduto"];
                        $nomeProduto      = $registro["nomeProduto"];
                        $descricaoProduto = $registro["descricaoProduto"];
                        $valorProduto     = $registro["valorProduto"];
                        $statusProduto    = $registro["statusProduto"];

                        echo "
                            <div class='col-sm-3'>

                                <div class='card' style='width:100%; height:100%;'>
                                    <div class='card-body' style='height:100%'>
                                        <a href='visualizarProduto.php?idProduto=$idProduto' style='text-decoration:none;' title='Visualizar mais detalhes de $nomeProduto'>
                                            <img class='card-img-top' src='$fotoProduto' alt='Foto de $nomeProduto' "; if($statusProduto == 'esgotado'){echo "style='filter:grayscale(100%)';";} echo">
                                        </a>
                                    </div>
                                    <div class='card-body text-center'>
                                        <h4 class='card-title'>$nomeProduto</h4>
                                        <p class='card-text'>Valor: <b>R$ $valorProduto</b></p>
                                        <div class='d-grid' style='border-size:border-box'>
                                            <a class='btn btn-outline-success' href='visualizarProduto.php?idProduto=$idProduto' style='text-decoration:none;' title='Visualizar mais detalhes de $nomeProduto'>
                                                <i class='bi bi-eye'></i> Visualizar Produto
                                            </a>  
                                        </div>
                                    </div>
                                </div>

                            </div>
                        ";
                    }
                ?>
                
            </div>
        </div>
        
<?php include "footer.php" ?>