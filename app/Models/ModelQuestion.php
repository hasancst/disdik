<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelQuestion extends Model
{
    protected $table = 'questions';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'type',
        'nik',
        'fullname',
        'email',
        'message',
        'ip_address',
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
