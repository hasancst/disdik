<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelModuls extends Model
{
    protected $table = 'modules';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'module_name',
        'module_img',
        'module_url',
        'created_at',
        'updated_at',
        'deleted_at',
        'restored_at',
        'created_by',
        'updated_by',
        'deleted_by',
        'restored_by',
        'is_deleted'
    ];
}
