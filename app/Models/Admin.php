<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model {
    use SoftDeletes, HasFactory;

    protected $table = 'admins';

    protected $connection = 'mysql';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $guarded = [];
    protected $hidden = [];

    protected $attributes = [
        'is_active' => true,
        'role' => 'superadmin'
    ];

    protected $fillable = [
        'name',
        'email',
        'password',
        'is_active',
        'role',
        'user_id'
    ]; // Obligatoria -> Mass Assigment

    public function casts() : array {
        return [
            'is_active' => 'boolean',
            'password' => 'hashed'
        ];
    }

    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';
    public const DELETED_AT = 'deleted_at';
}
