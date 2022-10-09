<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMTags extends Model
{
    protected $table = 'tags';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'tag',
        'slug',
    ];
}
