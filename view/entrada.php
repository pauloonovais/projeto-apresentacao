<?php
$titulo = "Entrada de produtos";
include 'cabecalho.php';?>
    <h1>Entrada de produtos</h1>
<?php
        include '../vendor/autoload.php';
if ($_POST) {
    $p = new \App\Model\Entrada();
    $p->setDescricaoProduto($_POST['descricao_produto']);
    $p->setFornecedor($_POST['fornecedor']);
    $p->setTipoUnitario($_POST['tipo_unitario']);
    $p->setQuantidade($_POST['quantidade']);
    $p->setDataEntrada($_POST['data_entrada']);
    $p->setValor($_POST['valor']);
    $p->setTotal($_POST['total']);





    $pDAO = new \App\DAO\ProdutoDAO();
    if ($pDAO->inserir($p))
        echo "<div class='alert alert-success'>Produto cadastrado com sucesso!</div>";
}
?>
<form action="entrada.php" method="post">

    <div class=\"form-group\">
        <label for="descricao_produto">Descrição do produto</label>
        <input type="text" id="descricao_produto" name="descricao_produto" class="form-control" required>
      </div>
    <div class="form-group">
        <label for="fornecedor">Fornecedor</label>
        <input type="text" id="fornecedor" name="fornecedor" class="form-control" required>
    </div>
    <div class=\"form-group\">
        <label for="tipo_unitario">Tipo Unitário</label>
             <select id="tipo_unitario" name="tipo_unitario" class="form-control">
                 <option value="1">Peça</option>
                 <option value="2">Kit</option>
                 <option value="3">Conjunto</option>
             </select>
        </div>
    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input type="number" id="quantidade" name="quantidade" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="quantidade">Data de entrada</label>
        <input type="date" id="data_entrada" name="data_entrada" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="valor">Valor Unitário</label>
        <input type="text" id="valor" name="valor" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="total">Valor Total</label>
        <input type="text" id="total" name="total" class="form-control">
    </div>

    <br>
    <button type="submit" class="btn btn-success">Cadastrar produto</button>
</form>
<?php include 'rodape.php';?>