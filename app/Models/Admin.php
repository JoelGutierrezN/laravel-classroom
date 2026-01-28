<?php

namespace App\Models;

use App\Traits\HasFormattedDate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model {
    use SoftDeletes, HasFactory, HasFormattedDate;

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

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function apartments(): HasMany {
        return $this->hasMany(Apartment::class);
    }
}
