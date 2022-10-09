<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSetting extends Model
{
    protected $table = 'settings';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'setting_group',
        'setting_variable',
        'setting_value',
        'setting_default_value',
        'setting_access_group',
        'setting_description',
        'created_at',
        'updated_at',
        'deleted_at',
        'restored_at',
        'created_by',
        'updated_by',
        'deleted_by',
        'restored_by'
    ];
}
