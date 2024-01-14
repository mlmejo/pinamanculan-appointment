<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'service_id',
        'name',
        'email',
        'address',
        'birth_date',
        'birth_place',
        'civil_status',
        'height',
        'weight',
        'gender',
        'is_approved'
    ];

    protected $casts = [
        'birth_date' => 'datetime',
    ];

    public function approve()
    {
        $this->update(['is_approved' => true]);
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
