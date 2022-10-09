<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    
    protected $allowedFields = [        
        'user_name',
        'user_password',
        'user_full_name',
        'user_email',
        'user_url',
        'user_group_id ',
        'user_type',
        'user_profile_id',
        'user_biography',
        'user_forgot_password_key',
        'user_forgot_password_request_date',
        'has_login',
        'last_logged_in',
        'last_logged_out',
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
