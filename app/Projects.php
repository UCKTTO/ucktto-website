<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table = 'projects';
    protected $fillable = [
        'college',
        'department',
        'title',
        'author1',
        'author2',
        'author3',
        'author4',
        'author5',
        'author6',
        'author7',
        'author8',
        'author9',
        'author10',
        'email1',
        'email2',
        'email3',
        'email4',
        'email5',
        'email6',
        'email7',
        'email8',
        'email9',
        'email10',
        'phonenumber1',
        'phonenumber2',
        'phonenumber3',
        'phonenumber4',
        'phonenumber5',
        'phonenumber6',
        'phonenumber7',
        'phonenumber8',
        'phonenumber9',
        'phonenumber10',
        'adviser',
        'date',
        'description',
        'pip',
        'pil',
        'a',
        'b',
        'c',
        'd',
        'e',
        'f',
        'overall',
        'action',
        'fipr',
    ];

    public function file(){
    	return $this->hasMany(Projects::class);
    }
}
