<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Client;
use App\Models\Worker;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Car extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'brand',
        'model',
        'year'
    ];

    public function clients(): MorphToMany
    {
        return $this->morphedByMany(Client::class, 'carrable');
    }

    public function workers(): MorphToMany
    {
        return $this->morphedByMany(Worker::class, 'carrable');
    }

    public function checkIfUsedBy(Worker|Client $user): bool
    {
        if ($user instanceof Worker) {
            return $this->workers->contains('id', $user->id);
        }
        return $this->clients->contains('id', $user->id);
    }
}
