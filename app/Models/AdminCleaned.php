<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminCleaned extends Model {
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'is_active',
        'role',
        'user_id'
    ];

    protected $attributes = [
        'is_active' => true,
        'role' => 'superadmin'
    ];

    public function casts() : array {
        return [
            'is_active' => 'boolean',
            'password' => 'hashed'
        ];
    }
}
