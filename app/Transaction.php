<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function donations()
    {
        return $this->belongsTo(Donation::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function programs()
    {
        return $this->belongsTo(Program::class);
    }

    public function banks()
    {
        return $this->belongsTo(Bank::class);
    }
}
