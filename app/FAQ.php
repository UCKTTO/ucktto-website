<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    protected $table = 'f_a_q_s';
    protected $fillable = [
        'question',
        'answer',
    ];

    public function file(){
    	return $this->hasMany(FAQ::class);
    }
}
