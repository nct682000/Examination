<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Question;
use App\Models\Exam;

class QuestionController extends Controller
{
    public function insertQuestion(Request $request){
        $message = [
            "content.required" => "Bạn chưa nhập câu hỏi"
        ];
        $validator = Validator::make($request -> all(),
            ["content" => "required"],
            $message) -> validate();

        // đặt lại múi giờ (Mặc định là múi giờ 0 - London)
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        $question = Question::create([
            "content" => $request->content,
            "created_date" => date('Y-m-d H:i:s'),
            "updated_date" => date('Y-m-d H:i:s'),
            "exam" => $request->exam
        ]);

        $exam = Exam::where("id", $request->exam)->first();
        $questions = Question::where("exam", $request->exam)->get();
        return view("examDetail", compact("exam", "questions"));
    }
}
