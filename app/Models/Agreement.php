<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Agreement extends Model
{
    use HasFactory;

    protected $fillable = [
        'grant_no', 'supervisor', 'start_date', 'end_date', 'delete_later',
    ];

    protected $casts = [

    ];

    public function request(): MorphOne
    {
        return $this->morphOne(Request::class, 'requestable');
    }
}
