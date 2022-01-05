@extends("layout")
@section("content")

<h1 class="text-center text-primary font-weight-bold">KIỂM TRA</h1>
	<br>
	<div class="container-fluid">
		<div class="text-center">
			<div class="font-weight-bold">
				Tên bài kiểm tra: {{$exam -> name}}
			</div>
			<div class="font-weight-bold">
				Thời gian làm bài: {{$exam -> execution_time}} phút
			</div>
			<div class="font-weight-bold">
				Thời gian bắt đầu: {{$exam->start_time}}
			</div>
			<div class="font-weight-bold">
				Thời gian hết hạn: {{$exam->expire_time}}
			</div>
			<div class="font-weight-bold">
				Mật khẩu: {{$exam->password}}
			</div>
			<div class="font-weight-bold">
				Kích hoạt: {{$exam->active}}
			</div>
			<div class="font-weight-bold">
				Tạo mới: {{$exam->created_date}}
			</div>
			<div class="font-weight-bold">
				Cập nhật: {{$exam->updated_date}}
			</div>
			<div class="font-weight-bold">
				Môn học: {{$exam->Subject->name}}
			</div>
			<div class="font-weight-bold">
				Người tạo: {{$exam->User->first_name}} {{$exam->User->last_name}}
			</div>
		</div>


		<div>
			<br>
			<h4>THÊM CÂU HỎI</h4>
			<form method="POST" action="{{route('insertQuestion')}}" enctype="multipart/form-data">
				{{csrf_field()}}
				<div class="form-group">
					<label for="content" class="font-weight-bold">Câu hỏi</label>
					<input type="text" name="content" id="content" class="form-control">
				</div>

				<!-- EXAM -->
				<input type="hidden" name="exam" id="exam" value="{{$exam->id}}" class="form-control">
				
				<div class="form-group">
					<button style="cursor: pointer;" type="submit" class="btn btn-primary font-weight-bold">THÊM CÂU HỎI</button>
				</div>
			</form>
			@foreach($questions as $q)

			<div>{{$q->content}}</div>

			@endforeach			
		</div>
	</div>

@stop