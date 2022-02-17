@extends("layout")
@section("content")

<h1 class="text-center text-primary font-weight-bold">DANH SÁCH BÀI KIỂM TRA</h1>
	<br>
	<div class="row container-fluid">
		@foreach ($testExam as $e)
		<div class="col-md-3 text-center" style="border: 1px solid gray; padding: 10px;">
			<div class="font-weight-bold">
				<h2><a href="{{route('testExamDetail', ['examId'=>$e->id])}}">{{$e -> name}}</a></h2>
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
				Cập nhật: {{$e->updated_date}}
			</div>
			<div class="font-weight-bold">
				Môn học: {{$e->Subject->name}}
			</div>
			<div class="font-weight-bold">
				Người tạo: {{$e->User->first_name}} {{$e->User->last_name}}
			</div>
		</div>
		@endforeach
	</div>

@stop