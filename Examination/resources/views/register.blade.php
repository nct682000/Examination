@extends("layout")
@section("content")

<h1 class="text-center text-primary font-weight-bold">ĐĂNG KÝ</h1>

<br>
	@if($errors -> any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors -> all() as $error)
			<li>{{$error}}</li>
			@endforeach	
		</ul>
		
	</div>
	@endif

<form method="POST" action="{{route('insertUser')}}" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="form-group">
			<label for="username" class="font-weight-bold">Tên đăng nhập</label>
			<input type="text" name="username" id="username" class="form-control">
		</div>
		<div class="form-group">
			<label for="password" class="font-weight-bold">Mật khẩu</label>
			<input type="text" name="password" id="password" class="form-control">
		</div>
		<div class="form-group">
			<label for="password_confirm" class="font-weight-bold">Xác nhận mật khẩu</label>
			<input type="text" name="password_confirm" id="password_confirm" class="form-control">
		</div>
		<div class="form-group">
			<label for="first_name" class="font-weight-bold">Tên</label>
			<input type="text" name="first_name" id="first_name" class="form-control">
		</div>
		<div class="form-group">
			<label for="last_name" class="font-weight-bold">Họ</label>
			<input type="text" name="last_name" id="last_name" class="form-control">
		</div>
		<div class="form-group">
			<label for="mail" class="font-weight-bold">Email</label>
			<input type="email" name="mail" id="mail" class="form-control">
		</div>
		<div class="form-group">
			<label for="phone" class="font-weight-bold">Số điện thoại</label>
			<input type="tel" name="phone" id="phone" class="form-control">
		</div>
		<div class="form-group">
			<label for="birthday" class="font-weight-bold">Ngày sinh</label>
			<input type="date" name="birthday" id="birthday" class="form-control">
		</div>
		<div class="form-group">
			<label for="gender" class="font-weight-bold">Giới tính</label>
			<select class="form-control" name="gender" id="gender">
				<option value="Nam">Nam</option>
				<option value="Nữ">Nữ</option>
				<option value="Giới tính khác">Giới tính khác</option>
			</select>
		</div>
		<div class="form-group">
			<label for="student_number" class="font-weight-bold">Mã số sinh viên</label>
			<input type="number" name="student_number" id="student_number" class="form-control">
		</div>
		<div class="form-group">
			<label for="upload" class="font-weight-bold">Ảnh đại diện</label>
			<input type="file" name="upload" id="upload" class="form-control">
		</div>
		
		<div class="form-group">
			<button style="cursor: pointer;" type="submit" class="btn btn-primary btn-lg font-weight-bold">ĐĂNG KÝ</button>
		</div>
	</form>

@stop