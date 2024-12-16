<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable=[
        'user_id',
        'product_id'
    ];
    public function users(){
<<<<<<< HEAD
        return $this->belongsTo(User::class);
    }
    public function products(){
        return $this->belongTo(Product::class);
=======
        return $this->belongsToMany(User::class);
    }
    public function products(){
        return $this->belongToMany(Product::class);
>>>>>>> 08a1fb44af0bcdbae3fe93da68abfca7411f9a4d
    }

}
