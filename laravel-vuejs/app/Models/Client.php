<?php

namespace App\Models;

use App\Models\Worker;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'surname',
        'worker_id'
    ];

    public function worker(): BelongsTo
    {
        return $this->belongsTo(Worker::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
