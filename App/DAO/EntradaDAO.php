<?php
/**
 * Created by PhpStorm.
 * User: 01566533201
 * Date: 08/03/2018
 * Time: 21:54
 */

namespace App\DAO;


class EntradaDAO extends Conexao
{
    public function inserir($produto)
    {
        $sql = "insert into entrada (descricao_produto, fornecedor, tipo_unitario, quantidade, data_entrada, valor, total) VALUES (:descricao_produto, :fornecedor, :tipo_unitario, :quantidade, :data_entrada, :valor, :total)";
        try{
            $i = $this->conexao->prepare($sql);

            $i->bindValue(":data_entrada", $produto->getDataEntrada());
            $i->bindValue(":descricao_produto", $produto->getDescricaoProduto());
            $i->bindValue(":fornecedor", $produto->getFornecedor());
            $i->bindValue(":tipo_unitario", $produto->getTipoUnitario());

            $i->bindValue(":quantidade", $produto->getQuantidade());
            $i->bindValue(":data_entrada", $produto->getDataEntrada());
            $i->bindValue(":valor", $produto->getValor());
            $i->bindValue(":total", $produto->getTotal());
            $i->execute();
            return true;
        } catch (\PDOException $e) {
            echo "<div class='alert alert-danger'>($e->getMessage())</div>";
        }
    }
}