<?php

namespace App\Models;

use App\Models\Admin;
use App\Models\Depot;
use App\Models\ProductOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'description',
        'quantity',
        'price'
    ];


    public function depots(){
        return $this->hasMany(Depot::class,'id_product' ,'id') ;
    }

    public function orders(){
        return $this->hasMany(ProductOrder::class,'id_product' ,'id') ;
    }

    public function admin(){
        return $this->belongsTo(Admin::class,'id_admin' ,'id') ;
    }
}
