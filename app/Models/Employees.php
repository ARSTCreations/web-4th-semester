<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $guarded = [];
    public function jobs(){
        return $this->belongsTo('Jobs::class');
    }
    public function files(){
        return $this->hasMany('Files::class');
    }
    public function agendas(){
        return $this->hasMany('Agendas::class');
    }
    public function users(){
        return $this->hasOne('User::class');
    }
    public function presences(){
        return $this->hasMany('Presences::class');
    }
}
