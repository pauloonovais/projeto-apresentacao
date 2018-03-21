<?php
/**
 * Created by PhpStorm.
 * User: 01566533201
 * Date: 12/03/2018
 * Time: 20:46
 */

namespace App\Helper;


class Moeda
{

    static public function get($valor)
    {
        return number_format($valor,2,',','.');
    }

    static public function set($valor)
    {
        return str_replace(',', '.', str_replace('.','', $valor));
    }
}