<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBanners extends Model
{
    protected $table = 'links';
    protected $primaryKey = 'id';
    
    protected $allowedFields = [        
        'link_title',
        'link_url',
        'link_target',
        'link_image',
        'link_type',
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
