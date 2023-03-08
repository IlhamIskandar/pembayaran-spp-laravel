<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;

class Classes extends Model
{
    use HasFactory;
    protected $table = 'classes';
    protected $primaryKey = 'class_id';
    protected $fillable = [
    	'class_name',
    	'competency'
    ];

    public function student()
    {
    	return $this->hasMany(Student::class, 'class_id');
    }
}
