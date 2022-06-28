<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonement extends Model
{
    use HasFactory;

    public function visitors()
    {
        return $this->hasMany(Visitor::class);
    }

    public function subscriptions(){
        return $this->hasMany(AbonementSubscription::class);
    }
}
