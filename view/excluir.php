
/<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 23/02/2018
 * Time: 22:45
 */
include '../vendor/autoload.php';
$p = new \App\Model\Entrada();
$p->setId($_GET["id"]);

$pDAO = new \App\DAO\EntradaDAO();
if ($pDAO->excluir($p))
    header("Location:estoque.php?msg=1");