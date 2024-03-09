<?php

namespace App\Models;

use App\Models\Admin;
use App\Models\Fournisseur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fournisseur extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'phone',
        'adress',
        'email'
    ];

    public function depots(){
        return $this->hasMany(Fournisseur::class,'id_fournisseur' ,'id') ;
    }

    public function admin(){
        return $this->belongsTo(Admin::class,'id_admin' ,'id') ;
    }


}
