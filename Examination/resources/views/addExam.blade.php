@extends("layout")
@section("content")

<h1 class="text-center text-primary font-weight-bold">THÊM BÀI KIỂM TRA</h1>

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

<form method="POST" action="{{route('insertExam')}}" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="form-group">
			<label for="name" class="font-weight-bold">Tên bài kiểm tra</label>
			<input type="text" name="name" id="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="execution_time" class="font-weight-bold">Thời gian làm bài (phút)</label>
			<input type="number" name="execution_time" id="execution_time" class="form-control">
		</div>
		<div class="form-group">
			<label for="start_time" class="font-weight-bold">Thời gian mở bài</label>
			<input type="datetime-local" name="start_time" id="start_time" class="form-control">
		</div>
		<div class="form-group">
			<label for="expire_time" class="font-weight-bold">Thời gian hết hạn</label>
			<input type="datetime-local" name="expire_time" id="expire_time" class="form-control">
		</div>
		<div class="form-group">
			<label for="password" class="font-weight-bold">Mật khẩu</label>
			<input type="text" name="password" id="password" class="form-control">
		</div>
		<div class="form-group">
			<label for="subject" class="font-weight-bold">Môn học</label>
			<select class="form-control" name="subject" id="subject">
				@foreach($subjects as $s)
				<option value="{{$s -> id}}">{{$s -> name}}</option>
				@endforeach
			</select>
		</div>

		<!-- USER (Đang gắn mặc định) -->
		<input type="hidden" name="user" id="user" value="2" class="form-control">
		
		<div class="form-group">
			<button style="cursor: pointer;" type="submit" class="btn btn-primary font-weight-bold">THÊM BÀI KIỂM TRA</button>
		</div>
	</form>

@stop