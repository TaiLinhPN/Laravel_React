<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table ="products";
    public function product_type(){
        return $this->belongTo('App\ProductType','id_type','id');
    }
    public function bill_detail(){
        return $this->belongTo('App\BillDetail','id_type','id');
    }
    public function comment(){
        return $this->belongTo(Comment::class,'id_product','id');
    }
    public function wishlist(){
        return $this->belongTo(Wishlist::class,'id_product','id');
    }
}
