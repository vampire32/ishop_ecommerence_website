<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $table='orders';
    protected $fillable=['ProductName','ProductPrice','ProductPicture','UserEmail','Username','UserAddress','UserNumber','status'];

    public function users(){
        return $this->hasOne(User::class, $foreignKey='id');
    }
}
