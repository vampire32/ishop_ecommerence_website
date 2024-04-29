<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $table='orders';
    protected $fillable=['ProductName','ProductPrice','ProductPicture','status','Address','user_id','Quantity'];

    public function users(){
        return $this->hasOne(User::class, $foreignKey='id');
    }
}
