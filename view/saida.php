<?php
$titulo = "Saída de produtos";
include 'cabecalho.php';?>
    <h1>Saída de produtos</h1>
<?php
include '../vendor/autoload.php';
if ($_POST) {
    $a = new \App\Model\Saida();
    $a->setDescricaoProduto($_POST['descricao_produto']);
    $a->setQuantidade($_POST['quantidade']);
    $a->setValor($_POST['valor']);
    $a->setTotal($_POST['total']);

    $pDAO = new \App\DAO\SaidaDAO();
    if ($pDAO->alterar($a))
        echo "<div class='alert alert-success'>Venda efetuada com sucesso!</div>";
}
include '../vendor/autoload.php';
$uDAO = new \App\DAO\UsuarioDAO();
$uDAO->verificar();
?>


    <form action="saida.php" method="post">
        <div class="form-group">
            <label for="descricao_produto">Descrição do produto</label>
            <input type="text" id="descricao_produto" name="descricao_produto" class="form-control" autofocus required>
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="number" id="quantidade" name="quantidade" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="valor">Valor Unitário</label>
            <input type="text" id="valor" name="valor" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="total">Valor Total</label>
            <input type="text" id="total" name="total" class="form-control" required>
        </div>

        <br>
        <button type="submit" class="btn btn-success">Vender produto</button>
    </form>
<?php include 'rodape.php';?>