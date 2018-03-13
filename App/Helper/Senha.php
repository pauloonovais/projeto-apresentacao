<?php
/**
 * Created by PhpStorm.
 * User: 01566533201
 * Date: 12/03/2018
 * Time: 20:45
 */

namespace App\Helper;


class Senha
{
    static public function gerar($senha)
    {
        return md5($senha);
    }

}