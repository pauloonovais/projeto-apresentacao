<?php
$titulo = "Entrada de produtos";
include 'cabecalho.php';?>
<h1>Entrada de produtos</h1>
<?php
    include '../vendor/autoload.php';
    if ($_POST) {
        $e = new \App\Model\Entrada();
        $e->setData_entrada($_POST['data_entrada']);
        $e->setQuantidade($_POST['quantidade']);
        $e->setValor($_POST['valor']);
        $e->setTotal($_POST['total']);
        $e->setFornecedor($_POST['fornecedor']);
        $e->setDescricao_produto($_POST['descricao_produto']);
        $e->setTipo_unitario($_POST['tipo_unitario']);

        $eDAO = new \App\Model\Entrada();
        if ($eDAO->inserir($e));
            echo "<div class='alert alert-sucess'> Produto cadastrado com sucesso!</div>;

    }
?>

<form action="entrada.php" method="post">
    
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
        <input type="date" id="validade" name="validade" class="form-control">
    </div>
    <div class="form-group">
        <label for="fornecedor">Fornecedor</label>
        <input type="date" id="validade" name="validade" class="form-control">
    </div>
    <div class=\"form-group\">
        <label for="descricao_produto">Descrição do produto</label>
        <input type="date" id="validade" name="validade" class="form-control">
    </div>
    <div class=\"form-group\">
        <label for="tipo_unitario">Tipo Unitário</label>
        <input type="date" id="validade" name="validade" class="form-control">
    </div>
    <div class="form-group">
        Todos os campos devem ser preenchidos.
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>
<?php include 'rodape.php';?>