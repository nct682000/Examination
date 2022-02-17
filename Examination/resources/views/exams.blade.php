@extends("layout")
@section("content")

<h1 class="text-center text-primary font-weight-bold">QUẢN LÝ DANH SÁCH ĐỀ THI</h1>
	<br>
	<div class="row container-fluid">
		@foreach ($exams as $e)
		<div class="col-md-3 text-center" style="border: 1px solid gray; padding: 10px;">
			<div class="font-weight-bold">
				Tên bài kiểm tra: 
				<a href="{{route('examDetail', ['examId'=>$e->id])}}">{{$e -> name}}</a>
			</div>
			<div class="font-weight-bold">
				Thời gian làm bài: {{$e -> execution_time}} phút
			</div>
			<div class="font-weight-bold">
				Thời gian bắt đầu: {{$e->start_time}}
			</div>
			<div class="font-weight-bold">
				Thời gian hết hạn: {{$e->expire_time}}
			</div>
			<div class="font-weight-bold">
				Kích hoạt: {{$e->active}}
			</div>
			<div class="font-weight-bold">
				Mật khẩu: {{$e->password}}
			</div>
			<div class="font-weight-bold">
				Tạo mới: {{$e->created_date}}
			</div>
			<div class="font-weight-bold">
				Cập nhật: {{$e->updated_date}}
			</div>
			<div class="font-weight-bold">
				Môn học: {{$e->Subject->name}}
			</div>
			<div class="font-weight-bold">
				Người tạo: {{$e->User->first_name}} {{$e->User->last_name}}
			</div>

			<!-- Ẩn bài kiểm tra -->
			@if($e->active == 1)
			<a href="{{route('hiddenExam', ['examId' => $e->id])}}">
				<button class="btn btn-light">ẨN BÀI KIỂM TRA</button>
			</a>
			@endif
			@if($e->active == 0)
			<a href="{{route('activeExam', ['examId' => $e->id])}}">
				<button class="btn btn-primary">KÍCH HOẠT BÀI KIỂM TRA</button>
			</a>
			@endif
		</div>
		@endforeach
	</div>

@stop