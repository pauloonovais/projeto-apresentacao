<?php
$titulo = "Pesquisar produtos";
include 'cabecalho.php';?>
    <h1>Pesquisar produtos</h1>
    <br>
    <form class="form-inline" action="estoque.php" method="get">
        <div class="form-group">
            <label for="descricao_produto">Descrição: </label>
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <input type="text" class="form-control" id="descricao_produto" name="descricao_produto" placeholder="Ex.: Camiseta" autofocus>
        </div>
        <button type="submit" class="btn btn-primary mb-2">
            Pesquisar
        </button>
    </form>
<?php
include '../vendor/autoload.php';
$uDAO = new \App\DAO\UsuarioDAO();
$uDAO->verificar();

?>

    <table class='table table-striped table-hover'>
        <tr class='text-center'>
            <th>ID</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Valor</th>
            <th></th>
            <th></th>
        </tr>
    </table>


<?php include 'rodape.php';?>