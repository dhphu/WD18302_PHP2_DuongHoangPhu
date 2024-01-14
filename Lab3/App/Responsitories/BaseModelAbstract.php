<?php

namespace App\Responsitories;

abstract class BaseModelAbstract{

    protected $id;

    // phương thức lấy ra id
    public abstract function getId();

    // phương thức set id
    public abstract function setId($id);
}