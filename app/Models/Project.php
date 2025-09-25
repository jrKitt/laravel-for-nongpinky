<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use Hasfactory;
    use SoftDeletes;
    protected $fillable = ['id','project_name','budget','lab_id'];
    protected $primaryKey = "id";
    protected $keyType = 'string';

    public function lab(){
        return $this->belongsTo(Lab::class, 'lab_id', 'id');
    }
}
