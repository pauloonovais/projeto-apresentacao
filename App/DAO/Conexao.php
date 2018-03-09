<?php
/**
 * Created by PhpStorm.
 * User: 01566533201
 * Date: 08/03/2018
 * Time: 20:04
 */

namespace App\DAO;

class Conexao
{
    protected $conexao;
    private $database = "db_controle";
    private $host = "localhost";
    private $user = "root";
    private $senha = "Suporte99";

    public function __construct()
    {
        $this->conexao = new \PDO("mysql:dbname={$this->database};host={$this->host}","{$this->user}", "{$this->senha}");
        $this->conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

    }
}