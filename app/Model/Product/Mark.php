<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $table='marks';
    protected $primarykey='id';
    protected $fillable=[
        'id','name'
    ];
    
    public function producto(){
        //belongs to pertene a 
        return $this->belongsTo(Product::class);
    }

    
}
