<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Worker;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Collection;

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

    public function clientInterview(): Client
    {
        return $this->with('worker', 'orders')->get()[0];
    }

    public function cars(): MorphToMany
    {
        return $this->morphToMany(Car::class, 'carrable');
    }
}
