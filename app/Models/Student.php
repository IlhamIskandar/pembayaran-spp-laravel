<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $primaryKey = 'nisn';
    protected $fillable = [
    	'nisn',
    	'nis',
    	'name',
    	'id_class',
    	'address',
    	'phone_number',
    	'id_spp',
    	'id',
    ];
}
