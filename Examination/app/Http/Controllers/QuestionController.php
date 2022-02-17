<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Question;
use App\Models\Answer;
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

        $answer1 = Answer::create([
            "content" => $request->answer1,
            "is_true" => $request->answerTrue=="1"?1:0,
            "created_date" => date('Y-m-d H:i:s'),
            "updated_date" => date('Y-m-d H:i:s'),
            "question" => $question->id
        ]);

        $answer2 = Answer::create([
            "content" => $request->answer2,
            "is_true" => $request->answerTrue=="2"?1:0,
            "created_date" => date('Y-m-d H:i:s'),
            "updated_date" => date('Y-m-d H:i:s'),
            "question" => $question->id
        ]);

        $answer3 = Answer::create([
            "content" => $request->answer3,
            "is_true" => $request->answerTrue=="3"?1:0,
            "created_date" => date('Y-m-d H:i:s'),
            "updated_date" => date('Y-m-d H:i:s'),
            "question" => $question->id
        ]);

        $answer4 = Answer::create([
            "content" => $request->answer4,
            "is_true" => $request->answerTrue=="4"?1:0,
            "created_date" => date('Y-m-d H:i:s'),
            "updated_date" => date('Y-m-d H:i:s'),
            "question" => $question->id
        ]);
        

        $exam = Exam::where("id", $request->exam)->first();
        $questions = Question::where("exam", $request->exam)->get();
        return view("examDetail", compact("exam", "questions"));
    }
    public function scoreCompute(Request $request){
        $count = 0;
        $answer = [];
        $countQ = (int)$request->countQuestion;

        foreach($request->all() as $a){
            array_push($answer, $a);
        }

        for($i = 1; $i < (sizeof($answer)-1); $i++){
            if((string)$answer[$i] == "`1`")
                $count++;
        }
        if(sizeof($answer) > 2)
            $score = $count*(10/$countQ);
        else
            $score = 0;
        return view("scoreCompute", compact("score", "count", "countQ"));
    }
}
