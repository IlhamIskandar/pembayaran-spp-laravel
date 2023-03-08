<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    use HasFactory;
    protected $primaryKey = 'spp_id';
    protected $fillable = [
    	'year',
    	'nominal'
    ];

    public function student()
    {
    	return $this->hasMany(Student::class, 'spp_id');
    }
}