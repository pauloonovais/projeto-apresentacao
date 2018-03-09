<?php
/**
 * Created by PhpStorm.
 * User: 01566533201
 * Date: 08/03/2018
 * Time: 20:11
 */

namespace App\Model;

class Saida
{
    private $id;
    private $data_entrada;
    private $quantidade;
    private $valor;
    private $total;
    private $fornecedor;
    private $descricao_produto;
    private $tipo_unitario;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDataEntrada()
    {
        return $this->data_entrada;
    }

    /**
     * @param mixed $data_entrada
     */
    public function setDataEntrada($data_entrada)
    {
        $this->data_entrada = $data_entrada;
    }

    /**
     * @return mixed
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * @param mixed $quantidade
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function getFornecedor()
    {
        return $this->fornecedor;
    }

    /**
     * @param mixed $fornecedor
     */
    public function setFornecedor($fornecedor)
    {
        $this->fornecedor = $fornecedor;
    }

    /**
     * @return mixed
     */
    public function getDescricaoProduto()
    {
        return $this->descricao_produto;
    }

    /**
     * @param mixed $descricao_produto
     */
    public function setDescricaoProduto($descricao_produto)
    {
        $this->descricao_produto = $descricao_produto;
    }

    /**
     * @return mixed
     */
    public function getTipoUnitario()
    {
        return $this->tipo_unitario;
    }

    /**
     * @param mixed $tipo_unitario
     */
    public function setTipoUnitario($tipo_unitario)
    {
        $this->tipo_unitario = $tipo_unitario;
    }


}