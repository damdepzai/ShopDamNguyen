<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table='transactions';
    protected $guarded=[''];
    const TRANSACTION_ON=1;
    const TRANSACTION_PRIMARY=0;

    public function user(){
        return $this->belongsTo(User::class,'tr_user_id');
    }
}
