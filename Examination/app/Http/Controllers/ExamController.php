<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Exam;
use App\Models\User;
use App\Models\Subject;
use App\Models\Question;

class ExamController extends Controller
{
    public function getAll(){
        $exams = Exam::all();
        return view("exams", compact("exams"));
    }

    public function getById($id){
        $exam = Exam::where("id", $id)->first();
        $questions = Question::where("exam", $id)->get();
        return view("examDetail", compact("exam", "questions"));
    }

    public function addExam(){
        $subjects = Subject::all();
        return view("addExam", compact("subjects"));
    }

    public function insertExam(Request $request){
        $message = [
            "name.required" => "Bạn chưa nhập tên bài kiểm tra",
            "execution_time.required" => "Bạn chưa đặt thời gian làm bài",
            "start_time.required" => "Bạn chưa đặt thời gian mở bài",
            "expire_time.required" => "Bạn chưa đặt thời gian hết hạn",
            "subject.required" => "Bạn chưa chọn môn học"
        ];
        $validator = Validator::make($request -> all(),
            ["name" => "required",
            "execution_time" => "required",
            "start_time" => "required",
            "expire_time" => "required",
            "subject" => "required",],
            $message) -> validate();

        // đặt lại múi giờ (Mặc định là múi giờ 0 - London)
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        $exam = Exam::create([
            "name" => $request->name,
            "execution_time" => $request->execution_time,
            "start_time" => $request->start_time,
            "expire_time" => $request->expire_time,
            "password" => $request->password,
            "active" => 1,
            "created_date" => date('Y-m-d H:i:s'),
            "updated_date" => date('Y-m-d H:i:s'),
            "subject" => $request->subject,
            "user" => $request->user
        ]);

        $exams = Exam::where("active", 1)->get();
        return view("exams", compact("exams"));
    }

    public function hiddenExam($id){
        Exam::where("id", $id)->update(array("active" => 0));

        $exams = Exam::all();
        return view("exams", compact("exams"));
    }

    public function activeExam($id){
        Exam::where("id", $id)->update(array("active" => 1));

        $exams = Exam::all();
        return view("exams", compact("exams"));
    }

    public function deleteExam($id){
       Exam::where("id", $id)->delete();
       $exams = Exam::where("active", 1)->get();
       return view("exams", compact("exams"));

    }

}
