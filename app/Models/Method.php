<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Method extends Model
{
    protected $table = 'methods';

    public $timestamps = false;

    use HasFactory;
    protected $fillable = [
        'created_by',
        'created_on',
        'last_updated_by',
        'last_updated_on',
        'is_active',
        'code',
        'description',
    ];

    protected $casts = [
        'created_on' => 'datetime',
        'last_updated_on' => 'datetime',
        'is_active' => 'boolean',
    ];

    protected static function booted()
    {
        static::creating(function ($method) {
            $method->created_on = now();
        });

        static::updating(function ($method) {
            $method->last_updated_on = now();
        });
    }
}
