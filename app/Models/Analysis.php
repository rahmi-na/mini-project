<?php

namespace App\Models;

use App\Models\Parameter;
use App\Models\Method;
use App\Models\Sample;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Analysis extends Model
{
    protected $table = 'analyses';

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
        'parameter_id',
        'method_id',
        'sample_type_id',
        'lead_time'
    ];

    public function parameter()
    {
        return $this->belongsTo(Parameter::class, 'parameter_id');
    }

    public function method()
    {
        return $this->belongsTo(Method::class, 'method_id');
    }

    public function sample()
    {
        return $this->belongsTo(Sample::class, 'sample_id');
    }

    protected $casts = [
        'created_on' => 'datetime',
        'last_updated_on' => 'datetime',
        'is_active' => 'boolean',
    ];

    protected static function booted()
    {
        static::creating(function ($analysis) {
            $analysis->created_on = now();
        });

        static::updating(function ($analysis) {
            $analysis->last_updated_on = now();
        });
    }
}
