<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RequestService extends Model
{
    use HasFactory;

    protected $fillable = [
        'request_id', 'service_id', 'method_equipment', 'quantity', 'total_price', 'is_return_sample', 'is_disposed',
    ];

    protected $casts = [

    ];

    public function request(): BelongsTo
    {
        return $this->belongsTo(Request::class);
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
