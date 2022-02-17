@extends("layout")
@section("content")

<h1 class="text-center text-primary font-weight-bold">ĐĂNG NHẬP</h1>

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

	<form>
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
			<button style="cursor: pointer;" type="submit" class="btn btn-lg btn-primary font-weight-bold">ĐĂNG NHẬP</button>
		</div>
		<a href="{{route('register')}}">
			Bạn chưa có tài khoản?
		</a>
	</form>
		

@stop