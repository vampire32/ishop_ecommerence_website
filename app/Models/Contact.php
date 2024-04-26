<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    protected $table='contacts';
    protected $fillable=['email','subject','message'];

    public function users()
    {
        return $this->hasOne(User::class, $foreignKey = 'id');
    }
}



