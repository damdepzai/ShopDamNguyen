<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
    protected $fillable=[''];
    protected $guarded=[''];

    const STATUS_PUBLIC = 1;
    const  STATUS_PRIVATE =0;
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
        return array_get($this->status,$this->c_active,null);
    }
}
