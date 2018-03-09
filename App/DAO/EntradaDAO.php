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
        $sql = "insert into entrada (id, data_entrada, quantidade, valor, total, fornecedor, descricao_produto, tipo_unitario)";
        try{
            $i = $this->conexao->prepare($sql);
            $i->bindValue(":id", $produto->getId());
            $i->bindValue(":data_entrada", $produto->getData_entrada());
            $i->bindValue(":quantidade", $produto->getQuantidade());
            $i->bindValue(":valor", $produto->getValor());
            $i->bindValue(":total", $produto->getTotal());
            $i->bindValue(":fornecedor", $produto->getFornecedor());
            $i->bindValue(":descricao_produto", $produto->getDescricao_produto());
            $i->bindValue(":tipo_unitario", $produto->getTipo_unitario());
            $i->execute();
            return true;
        } catch (\PDOException $e) {
            echo "<div class='alert alert-danger'>($e->getMessage())</div>";
        }
    }
}