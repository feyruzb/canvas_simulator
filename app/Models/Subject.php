<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    public $fillable = ["name","description","image_url"];
    
    public function tasks() {
        return $this->hasMany(Task::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}
