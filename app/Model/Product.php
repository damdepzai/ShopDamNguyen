<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const STATUS_PUBLIC=1;
    const  STATUS_PRIVATE=0;
    const  HOT_ON=1;
    const HOT_OFF=0;
    protected $table='products';
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
        return array_get($this->status,$this->pro_active,null);
    }
    protected  $hots =[
        1 => [
            'name' => 'Nổi bật',
            'class' =>'label label-warning'
        ],
        0 =>[
            'name' =>'Bình thường',
            'class'=>'label label-success'
        ]

    ];
    public function getHots(){
        return array_get($this->hots,$this->pro_hot,null);
    }



    public function category(){
        return $this->belongsTo(Category::class,'pro_category_id');
    }

}
