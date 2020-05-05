<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    const STATUS_PUBLIC=1;
    const  STATUS_PRIVATE=0;
    const  HOT_ON=1;
    const HOT_OFF=0;
    protected $table='articles';
    protected $fillable=[''];
    protected $guarded=[''];
    protected  $status =[
        1 => [
            'name' => 'Public',
            'class' =>'label label-danger'
        ],
        0 =>[
            'name' =>'Private',
            'class'=>'label label-primary'
        ]

    ];

    public function getStatus(){
        return array_get($this->status,$this->a_active,null);
    }
}
