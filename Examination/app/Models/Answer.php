<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $table = "Answer";
    public $timestamps = false;
    protected $fillable = ["id", "content", "is_true", "created_date", "updated_date", "question"];
    public function question(){
        return $this->belongsTo(Question::class, "question", "id");
    }
}
