<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Fournisseur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Depot extends Model
{
    use HasFactory;

    protected $fillable=[
        'adress'
    ];

    public function products(){
        return $this->belongsTo(Product::class,'id_product' ,'id') ;
    }

    public function fournisseurs(){
        return $this->belongsTo(Fournisseur::class,'id_fournisseur' ,'id') ;
    }
}
