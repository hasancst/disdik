<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMCategory extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'category_name',
        'category_type',
    ];
}
