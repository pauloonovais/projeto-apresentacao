<?php
/**
 * Created by PhpStorm.
 * User: 01566533201
 * Date: 12/03/2018
 * Time: 20:46
 */
class Data
{
    /*
     * @param mixed $data
     * @return mixed $data
     */
    static public function get($data)
    {
        if (!empty($data))
            return date("d/m/Y", strtotime($data));
        else return "";
    }

    static public function set($data)
    {
        $data = str_replace('/', '-', $data);
        return date("Y-m-d", strtotime($data));
    }
}