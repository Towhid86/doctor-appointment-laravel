<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Business extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function plan() : BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }
    public function businessCategory() : BelongsTo
    {
        return $this->belongsTo(BusinessCategory::class);
    }
}
