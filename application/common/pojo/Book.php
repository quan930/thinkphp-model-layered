<?php
/**
 * Created by PhpStorm.
 * User: daquan
 * Date: 2019-03-28
 * Time: 09:43
 */

namespace app\common\pojo;


class Book
{
    public $id;
    public $name;
    public $price;

    /**
     * Book constructor.
     * @param $id
     * @param $name
     * @param $price
     */
    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
}