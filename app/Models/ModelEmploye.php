<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelEmploye extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'assignment_letter_number',
        'assignment_letter_date',
        'assignment_start_date',
        'parent_school_status',
        
        'full_name',
        'gender',
        'nik',
        'irth_place',
        'birth_date',
        'mother_name',
        'street_address',
        'rt',
        'rw',
        'sub_village',
        'village',
        'sub_district',
        'district',
        'postal_code',
        'religion_id',
        'marriage_status_id',
        'pouse_name',
        'spouse_employment_id',
        'citizenship',
        'country',
        'npwp',
        'employment_status_id',
        'nip',
        'niy',
        'nuptk',
        'employment_type_id',
        'decree_appointment',
        'appointment_start_date',
        'institution_lifter_id',
        'decree_cpns',
        'pns_start_date',
        'rank_id',
        'salary_source_id',
        'headmaster_license',
        'laboratory_skill_id',
        'special_need_id',
        'braille_skills',
        'sign_language_skills',
        'phone',
        'mobile_phone',
        'email',
        'photo',
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
