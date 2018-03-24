<?php
include "../vendor/autoload.php";
$desc= $_GET['descricao'];

$prod= new App\Model\Entrada();
$prod->setDescricaoProduto($desc);

$pDAO= new App\DAO\EntradaDAO();
$recebido=$pDAO->pesquisar_ajax($prod);

echo "<table> <tr><td></td><td><td/></tr>"; //Colocar nome do campo dentro da tag <td> .. Ex: Descrição
foreach ($recebido as $item){
    echo "<tr><td>{$item['descricao_produto']}</td><td><botton type='button' id='btn' class='btn btn-danger' onclick='pegarDados()'>Escolher item</botton></td></tr>";
}
echo "</table>";
