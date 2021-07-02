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
        'email1',
        'email2',
        'email3',
        'email4',
        'email5',
        'email6',
        'phonenumber1',
        'phonenumber2',
        'phonenumber3',
        'phonenumber4',
        'phonenumber5',
        'phonenumber6',
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
