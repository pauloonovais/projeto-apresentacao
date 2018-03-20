<?php
/**
 * Created by PhpStorm.
 * User: 01566533201
 * Date: 08/03/2018
 * Time: 21:54
 */

namespace App\DAO;


class SaidaDAO extends Conexao
{
    public function alterar($produto)
    {
        $sql = "update entrada set quantidade=quantidade-:quantidade where descricao_produto=:descricao_produto";
        try{
            $a = $this->conexao->prepare($sql);
            $a->bindValue(":quantidade", $produto->getQuantidade());
            $a->bindValue("descricao_produto", $produto->getDescricaoProduto());
            $a->execute();

            return true;
        } catch (\PDOException $e){
            echo "<div class='alert alert-danger'> ($e->getMessage()) </div>";
        }
    }
}