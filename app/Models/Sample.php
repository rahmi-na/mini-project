<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Sample extends Model
{
    protected $table = 'samples';

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
        static::creating(function ($sample) {
            $sample->created_on = now();
        });

        static::updating(function ($sample) {
            $sample->last_updated_on = now();
        });
    }

}
