<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    protected $fillable = ['id','abbreviation','name'];
    protected $primaryKey = "id";
    public $incrementing = false;
    protected $keyType = 'string';

    public function researchers(){
        return $this->hasMany(Researcher::class, 'lab_id', 'id');
    }

    public function projects(){
        return $this->hasMany(Project::class, 'lab_id', 'id');
    }
}
