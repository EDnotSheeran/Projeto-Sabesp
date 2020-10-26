<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //definir manualmente a tabela
    //protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'role',
        'password'
    ];
}
