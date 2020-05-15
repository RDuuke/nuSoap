<?php
namespace App;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';

    protected $fillable = [
        'name'
    ];

    public $timestamps = false;
}
