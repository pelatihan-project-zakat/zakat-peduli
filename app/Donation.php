<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
