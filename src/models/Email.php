<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

}
