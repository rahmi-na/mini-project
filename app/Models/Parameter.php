<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Parameter extends Model
{
    protected $table = 'parameters';

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
        static::creating(function ($parameter) {
            $parameter->created_on = now();
        });

        static::updating(function ($parameter) {
            $parameter->last_updated_on = now();
        });
    }
}
