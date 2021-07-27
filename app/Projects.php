<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table = 'projects';
    protected $fillable = [
        'college',
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

    public function computeOverall($a, $b, $c, $d, $e, $f){
        $overall = ($a/10)*5 + ($b/10)*35 + ($c/10)*5 + ($d/10)*5 + ($e/10)*15 + ($f/10)*35;
        $this->attributes['overall'] = $overall;
    }

    public function setAction($overall){
        if ($overall > 79){
            $action = 'PROMOTION';
        } elseif ($overall > 65){
            $action = 'COMMERCIABLE';
        } elseif ($overall > 45){
            $action = 'SPIN-OFF / START-UP';
        } elseif ($overall > 0){
            $action = 'R&D';
        } else {
            $action = 'PUBLICATION';
        }
        $this->attributes['action'] = $action;
    }

    public function setFIPR($overall){
        if ($overall > 40){
            $fipr = 'YES';
        } else {
            $fipr = 'NO';
        }
        $this->attributes['fipr'] = $fipr;
    }

}
