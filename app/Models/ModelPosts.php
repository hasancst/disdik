<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPosts extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'post_title',
        'post_content',
        'post_image',
        'post_author',
        'post_categories',
        'post_type',
        'post_status',
        'post_visibility',
        'post_comment_status',
        'post_slug',
        'post_tags',
        'post_counter',
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
