<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{

    public function register(){
        return view("register");
    }

    public function login(){
        return view("login");
    }

    public function insertUser(Request $request){
        $message = [
            "username.required" => "Tên đăng nhập không được bỏ trống",
            "password.required" => "Bạn chưa nhập mật khẩu",
            "first_name.required" => "Bạn chưa nhập tên",
            "last_name.required" => "Bạn chưa nhập họ",
            "mail.required" => "Vui lòng nhập địa chỉ mail",
            "phone.required" => "Vui lòng nhập số điện thoại"
        ];
        $validator = Validator::make($request -> all(),
            ["username" => "required",
            "password" => "required",
            "first_name" => "required",
            "last_name" => "required",
            "mail" => "required",
            "phone" => "required"
            ],
            $message) -> validate();

        // đặt lại múi giờ (Mặc định là múi giờ 0 - London)
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        $passErr = "";
        $avatar = "";
        $Err = "";
        if($request->file("upload") != null){
            $avatar = $request->upload->getClientOriginalName();
            $request->upload->move("images/", $avatar);
        }
        if(!User::where("username", $request->username)->get()) {
            if($request->password === $request->password_confirm){
                $user = User::create([
                    "username" => $request->username,
                    "password" => Hash::make($request->password),
                    "first_name" => $request->first_name,
                    "last_name" => $request->last_name,
                    "mail" => $request->mail,
                    "phone" => $request->phone,
                    "birthday" => $request->birthday,
                    "gender" => $request->gender,
                    "student_number" => $request->student_number,
                    "avatar" => $avatar,
                    "role" => "User",
                    "active" => 1,
                    "last_login" => date('Y-m-d H:i:s'),
                    "is_login" => 0,
                    "created_date" => date('Y-m-d H:i:s'),
                    "updated_date" => date('Y-m-d H:i:s')
                ]);
            }else{
                $passErr = "Mật khẩu không trùng khớp";
                echo $passErr;
                return view("register", compact("passErr"));
            }
        } else {
            $Err = "Tài khoản này đã tồn tại";
            echo $Err;
            return view("register", compact("Err"));
        }
        return view("index");
    }
}
