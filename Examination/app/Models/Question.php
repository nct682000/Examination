<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = "Question";
    public $timestamps = false;
    protected $fillable = ["id", "content", "created_date", "updated_date", "exam"];
    public function exam(){
        return $this->belongsTo(Exam::class, "exam", "id");
    }
    public function answer(){
        return $this->hasMany(Answer::class, "question", "id");
    }
}
