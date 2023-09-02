<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sample extends Model
{
    use HasFactory;

    protected $fillable = [
        'request_id', 'sample_no', 'sample_marking', 'sample_description', 'no_of_samples', 'sample_condition', 'action', 'remarks', 'delete_later',
    ];

    protected $casts = [

    ];

    public function request(): BelongsTo
    {
        return $this->belongsTo(Request::class);
    }
}
