<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'Users';

    protected $primaryKey = 'User_ID';

    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = ['User_ID',
                            'Name',
                            'Email',
                            'Number'];
}
