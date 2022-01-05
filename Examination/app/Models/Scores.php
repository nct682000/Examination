<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scores extends Model
{
    use HasFactory;
    protected $table = "Question";
    public $timestamps = false;
    protected $fillable = ["user", "exam", "scores"];
    public function user(){
        return $this->belongsTo(User::class, "user", "id");
    }
    public function exam(){
        return $this->belongsTo(Exam::class, "exam", "id");
    }

}
