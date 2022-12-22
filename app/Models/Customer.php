<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['full_name','age','email_address','status','phone','credit_limit'];

    public function products() {
        return $this->hasMany('App\Models\Product');

}
}