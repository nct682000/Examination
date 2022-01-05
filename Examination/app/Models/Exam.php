<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $table = "Exam";
    public $timestamps = false;

    protected $fillable = ["id", "name", "execution_time", "start_time", "expire_time", "password", "active", "created_date", "updated_date", "subject", "user" ];
    public function subject(){
        return $this->belongsTo(Subject::class, "subject", "id");
    }

    public function user(){
        return $this->belongsTo(User::class, "user", "id");
    }

    public function question(){
        return $this->hasMany(Question::class, "exam", "id");
    }

    public function scores(){
        return $this->hasMany(Scores::class, "exam", "id");
    }
}
