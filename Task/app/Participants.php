<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participants extends Model
{
    protected $table = 'Participants';

    protected $primaryKey = 'P_ID';

    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = ['P_ID',
                            'Name',
                            'Email',
                            'Number',
                            'Resume'];
}
