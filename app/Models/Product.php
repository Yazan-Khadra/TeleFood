<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model{
    use Searchable;
    protected $fillable=[
        'name',
        'description',
        'image_url',
        'price',
        'store_id',
        'quantity',
    ];
    public function Store(){
        return $this->belongsto(Store::class);
    }
    public function products(){
        return $this->belongToMany(User::class,'favorites');
    }
}
