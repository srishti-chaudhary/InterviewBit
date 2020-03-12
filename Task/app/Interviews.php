<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interviews extends Model
{
    protected $table = 'Interviews';

    protected $primaryKey = 'I_ID';

    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = ['I_ID',
                            'Date',
                            'Start_Time',
                            'End_Time'];
}
