<?php
$titulo = "Entrada de produtos";
include 'cabecalho.php';?>
    <h1>Entrada de produtos</h1>
<?php
        include '../vendor/autoload.php';
if ($_POST) {
    $p = new \App\Model\Entrada();
    $p->setDataEntrada($_POST['data_entrada']);
    $p->setQuantidade($_POST['quantidade']);
    $p->setValor($_POST['valor']);
    $p->setTotal($_POST['total']);
    $p->setFornecedor($_POST['fornecedor']);
    $p->setDescricaoProduto($_POST['descricao_produto']);
    $p->setTipoUnitario($_POST['tipo_unitario']);


    $pDAO = new \App\DAO\ProdutoDAO();
    if ($pDAO->inserir($p))
        echo "<div class='alert alert-success'>Produto cadastrado com sucesso!</div>";
}
?>
<form action="entrada.php" method="post">

    <div class="form-group">
        <label for="quantidade">Data de entrada</label>
        <input type="text" id="data_entrada" name="data_entrada" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input type="text" id="quantidade" name="quantidade" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="valor">Valor</label>
        <input type="text" id="valor" name="valor" class="form-control">
    </div>
    <div class="form-group">
        <label for="total">Total</label>
        <input type="date" id="total" name="total" class="form-control">
    </div>
    <div class="form-group">
        <label for="fornecedor">Fornecedor</label>
        <input type="date" id="fornecedor" name="fornecedor" class="form-control">
    </div>
    <div class=\"form-group\">
        <label for="descricao_produto">Descrição do produto</label>
        <input type="date" id="descricao_produto" name="descricao_produto" class="form-control">
    </div>
    <div class=\"form-group\">
        <label for="tipo_unitario">Tipo Unitário</label>
        <input type="date" id="tipo_unitario" name="tipo_unitario" class="form-control">
    </div>
    <div class="form-group">
        Todos os campos devem ser preenchidos.
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>
<?php include 'rodape.php';?>