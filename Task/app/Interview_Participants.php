<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview_Participants extends Model
{
    protected $table = 'Interview_Participants';

    protected $primaryKey = 'ID';

    public $timestamps = false;

    protected $fillable = ['ID',
                            'Interview',
                            'Partipant',
                            'Interviewer'];
}
