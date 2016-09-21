<?php

namespace App\Model\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    protected $primarykey ='id';
    protected $fillable=[
        'id',
        'name',
        'price',
        'marks_id'
    ];
    
    public function mark(){
        //has many tiene una o muchas ()
        return $this->hasMany(Mark::class);
    }
}
