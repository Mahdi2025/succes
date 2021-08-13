<?php

namespace App\Models;

use App\Models\Model;
use App\Libraries\MySql;
use PDO;

class HobbiesModel extends Model
{
    // Name of the table
    protected  $model = "hobbies";

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

     /**
     * Load class 'staticaly'
     */
    public static function load()
    {
        return new static;
    }
    
    public function __construct()
    {
        parent::__construct(
            $this->model, 
            $this->limit, 
            $this->protectedFields,
            
        );   
    }

    public function userhobbies($userId)
    {
        $sql = "SELECT * FROM `hobbies` WHERE user_id=" . $userId;
        $result = MySql::query($sql)->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }

}
