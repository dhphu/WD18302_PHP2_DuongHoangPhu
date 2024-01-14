<?php


namespace App\Model;

use App\Responsitories\BaseModelAbstract;
use App\Responsitories\ModelInterface;

class BaseModel extends BaseModelAbstract implements ModelInterface{


    public function getId(){
        echo "Hàm này lấy ra id";
    }

    public function setId($id){
        echo "Hàm này dùng set id";
    }

    public function create(){
        echo "Hàm này tạo mới";
    }

    public function read($id){
        echo "Hàm này lấy ra 1 theo id";
    }

    public function getAll(){
        echo "Hàm lấy tất cả";
    }

    public function update(){
        echo "Hàm cập nhật nha";
    }

    public function delete($id){
        echo "Hàm xóa";
    }
}