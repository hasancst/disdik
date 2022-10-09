<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLogs extends Model
{
    protected $table = 'logs';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'ip_address',
        'user',
        'uri',
        'method',
        'status',
        'timestamp'
    ];
}
