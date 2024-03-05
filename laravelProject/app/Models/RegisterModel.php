<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterModel extends Model
{
    use HasFactory;

    // protected $fillable = ['name','email','mobile','year','department'];
    protected $guarded = [];

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($model) {
    //         // Additional actions before creating the model
    //         $model->status = 'A';
    //     });
    // }
}
