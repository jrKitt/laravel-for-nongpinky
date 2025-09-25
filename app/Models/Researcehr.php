<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Researcher extends Model
{
    protected $fillable = ['id','re_name','re_position','lab_id'];
    protected $primaryKey = "id";
    protected $keyType = 'string';

    public function lab(){
        return $this->belongsTo(Lab::class, 'lab_id', 'id');
    }
}
