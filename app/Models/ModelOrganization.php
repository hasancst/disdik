<?php

namespace App\Models;

use CodeIgniter\Model;


class ModelOrganization extends Model
{
    protected $table = 'organization';
    protected $primaryKey = 'id_org';

    protected $allowedFields = [
        
        'name',
        'description',
        'root',
        'person'
    ];
}
