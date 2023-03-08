<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;
    protected $primaryKey = 'nisn';
    protected $fillable = [
    	'nisn',
    	'nis',
    	'name',
    	'class_id',
    	'address',
    	'phone_number',
    	'spp_id',
    	'user_id',
    ];

    public function spp()
    {
    	return $this->belongsTo(Spp::class, 'spp_id', 'spp_id');
    }

    public function class()
    {
    	return $this->belongsTo(Classes::class, 'class_id', 'class_id');
    }
}
