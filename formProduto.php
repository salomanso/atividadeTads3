<?php include "header.php" ?>
<?php include "validarSessao.php" ?> <!-- Assegura que esta página poderá ser acessada apenas por um usuário administrador -->

<div id="conteudo-principal" class="container text-center mb-3 mt-3">
    
    <h2>Cadastrar viagem:</h2>
    <div class="d-flex justify-content-center mb-3">
        <div class="row">
            <div class="col-12">
                <form action="actionProduto.php" method="POST" class="was-validated" enctype="multipart/form-data">
                    <div class="form-floating mb-3 mt-3">
                        <input type="file" class="form-control" id="fotoProduto" name="fotoProduto" required>
                        <label for="fotoProduto">Foto</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="nomeProduto" placeholder="Nome" name="nomeProduto" required>
                        <label for="nomeProduto">Local de Viagem</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <textarea class="form-control" id="descricaoProduto" placeholder="Informe uma breve descrição sobre o Produto" name="descricaoProduto" required></textarea>
                        <label for="nomeProduto">Descrição da viagem</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="valorProduto" placeholder="Valor do Produto" name="valorProduto" required>
                        <label for="valorProduto">Valor da viagem (R$):</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <button type="submit" class="btn btn-success">Cadastrar viagem</button>
                </form>
            </div>
        </div>
    </div>
    <br>

</div>

<?php include "footer.php" ?>