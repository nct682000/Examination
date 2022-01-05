<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table = "Subject";
    public $timestamps = false;
    protected $fillable = ["id", "name"];
    public function exam(){
        return $this->hasMany(Exam::class, "subject", "id");
    }
}
