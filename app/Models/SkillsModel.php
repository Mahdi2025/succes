<?php

namespace App\Models;

use App\Libraries\MySql;
use App\Models\Model;
use PDO;

class SkillsModel extends Model
{
    // Name of the table
    protected $model = "skills";

    // Max number of records when fetching all records from table
    protected  $limit;

    // Non writable fields
    protected $protectedFields = [
        'id',
        'updated',
        'deleted',
        'updated_by',
        'deleted_by',
    ];


    public function __construct()
    {
        parent::__construct(
            $this->model, 
            $this->limit, 
            $this->protectedFields,
        );   
    }

    public static function load()
    {
        return new static;
    }
    
    public function userSkills($userId)
    {
        $sql = "SELECT * FROM `skills` WHERE user_id=" . $userId;
        $result = MySql::query($sql)->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }

}
