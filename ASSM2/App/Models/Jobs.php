<?php

namespace App\Models;

class Jobs extends BaseModel
{
    protected $name = "JobsModel";
    public $tableName = 'job';

    public $table = "job";

    public function __construct()
    {

        parent::__construct();
    }

    public function create(array $data)
    {

    }
    public function getAllWithPaginate(int $limit, int $offset)
    {

    }

    public function addJobs($data)
    {
        return $this->insert($this->table, $data);
    }

    public function getListJobs()
    {
        return $this->getAll()->get();
    }

    public function getOneJob($id)
    {
        return $this->select()->where('id', '=', $id)->first();
    }

    public function updateJob($data, $id)
    {
        return $this->table('job')->where('id', '=',  $id)->update($data);
    }

    public function deleteJob($id)
    {
        return $this->table('job')->where('id', '=', $id)->delete();
    }

    
    
}