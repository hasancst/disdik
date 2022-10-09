<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMenus extends Model
{
    protected $table = 'menus';
    protected $primaryKey = 'id';
    
    protected $allowedFields = [        
        'menu_title',
        'menu_url',
        'menu_target',
        'menu_type',
        'menu_parent_id',
        'menu_position',
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
