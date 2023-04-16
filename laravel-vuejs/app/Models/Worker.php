<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Worker extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'surname'
    ];

    public function clients(): HasMany
    {
        return $this->hasMany(Client::class);
    }

    public function responsibleOrders(): HasManyThrough
    {
        return $this->hasManyThrough(Order::class, Client::class);
    }

    public function cars(): MorphToMany
    {
        return $this->morphToMany(Car::class, 'carrable');
    }
}
