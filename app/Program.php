<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public function transactions()
    {
        return $this->belongsTo(Transaction::class);
    }
}
