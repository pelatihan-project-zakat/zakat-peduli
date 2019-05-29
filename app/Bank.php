<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
