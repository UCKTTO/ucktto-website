<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'files';
    protected $fillable = [
        'name',
        'file_path'
    ];

    public function file(){
    	return $this->hasMany(File::class);
    }
}
