<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Pledge extends Model
{
    use HasFactory;

    protected $fillable = [
        'vot_no', 'sample_no', 'payment_method', 'description', 'payment_proof_path', 'start_date', 'end_date',
    ];

    protected $casts = [

    ];

    public function request(): MorphOne
    {
        return $this->morphOne(Request::class, 'requestable');
    }
}
