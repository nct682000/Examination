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
					<fieldset id="answer-true" name="answer-true">
						<div class="row">
							<div class="col">
							<input type="radio" value="1" name="answerTrue" checked>
								<label for="answer1" class="font-weight-bold">Câu trả lời #1</label>
								<input type="text" name="answer1" id="answer1" class="form-control">
							</div>
							<div class="col">
								<input type="radio" value="2" name="answerTrue">
								<label for="answer2" class="font-weight-bold">Câu trả lời #2</label>
								<input type="text" name="answer2" id="answer2" class="form-control">
							</div>
							<div class="col">
								<input type="radio" value="3" name="answerTrue">
								<label for="answer3" class="font-weight-bold">Câu trả lời #3</label>
								<input type="text" name="answer3" id="answer3" class="form-control">
							</div>
							<div class="col">
								<input type="radio" value="4" name="answerTrue">
								<label for="answer4" class="font-weight-bold">Câu trả lời #4</label>
								<input type="text" name="answer4" id="answer4" class="form-control">
							</div>
						</div>
					</fieldset>
				</div>

				<!-- EXAM -->
				<input type="hidden" name="exam" id="exam" value="{{$exam->id}}" class="form-control">
				
				<div class="form-group">
					<button style="cursor: pointer;" type="submit" class="btn btn-primary font-weight-bold">THÊM CÂU HỎI</button>
				</div>
			</form>
			<ol>
				@foreach($questions as $q)
					<div class="card" style="margin-top:20px">
						<div class="card-header">
							<li>{{$q->content}}</li>
						</div>
						<div class="card-body">
							<h5 class="card-title">Câu trả lời</h5>
							<p class="card-text">
								<ol style="list-style-type:lower-alpha">
									<div class="row">
										@foreach($q->answer as $a)
											@if($a->is_true == true)
												<div class="col" style="color:green"><li>{{$a->content}}</li></div>
											@else
												<div class="col" style="color:red"><li>{{$a->content}}</li></div>
											@endif
										@endforeach	
									</div>
								</ol>
							</p>
							<a href="#" class="btn btn-primary">Chỉnh sửa</a>
						</div>
					</div>
				@endforeach
			</ol>
		</div>
	</div>

@stop