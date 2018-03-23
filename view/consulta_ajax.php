<?php
include "../vendor/autoload.php";
$desc= $_GET['descricao'];

$prod= new App\Model\Entrada();
$prod->setDescricaoProduto($desc);

$pDAO= new App\DAO\EntradaDAO();
$recebido=$pDAO->pesquisar_ajax($prod);

echo "<table> <tr><td>Descrição</td><td></td></tr>";
foreach ($recebido as $item){
    echo "<tr><td>{$item['descricao_produto']}</td><td><botton type='button' id='btn' class='btn btn-danger' onclick='pegarDados()'>Enviar</botton></td></tr>";
}
echo "</table>";
