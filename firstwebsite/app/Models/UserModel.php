<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'students'; // Specify the table name if different from the model name
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'birthdate',
    ];
}
