<?php

namespace App\Responsitories;

interface ModelInterface
{

    //Hàm tạo 
    public function create();

    //Hàm lấy ra  theo id
    public function read($id);

    //Hàm lấy all 
    public function getAll();

    //Hàm cập nhật 
    public function update();

    //Hàm xóa
    public function delete($id);
}