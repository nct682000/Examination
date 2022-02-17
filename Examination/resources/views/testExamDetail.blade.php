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
				Tạo mới: {{$exam->created_date}}
			</div>
			<div class="font-weight-bold">
				Môn học: {{$exam->Subject->name}}
			</div>
			<div class="font-weight-bold">
				Người tạo: {{$exam->User->first_name}} {{$exam->User->last_name}}
			</div>
		</div>

	<form method="POST" action="{{route('scoreCompute')}}" enctype="multipart/form-data">
		{{csrf_field()}}
		<ol>
			@for($i = 0; $i < sizeof($questions); $i++)
				<div class="card" style="margin-top:20px">
					<div class="card-header">
						<li>{{$questions[$i]->content}}</li>
					</div>
					<div class="card-body">
						<h5 class="card-title">Câu trả lời</h5>
						<p class="card-text">
							<ol style="list-style-type:lower-alpha">
								<fieldset id="answer-true" name="answer-true" default="null">
										@foreach($questions[$i]->answer as $a)
										<div>
											<input type="radio" id=`{{$a->id}}` value=`{{$a->is_true}}` name=`answer{{$i}}` />
											<label for=`{{$a->id}}` class="font-weight-bold">{{$a->content}}</label>
										</div>
										@endforeach
								</fieldset>
							</ol>
						</p>
					</div>
				</div>
			@endfor
			<input type="hidden" name="countQuestion" value={{sizeof($questions)}} />
		</ol>
		<button class="btn btn-lg btn-primary" type="submit" >Nộp bài</button>
	</form>
</div>
@stop