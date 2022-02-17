@extends("layout")
@section("content")

<h1 class="text-center text-primary font-weight-bold">KẾT QUẢ BÀI KIỂM TRA</h1>
    <h3>Số câu đúng: {{$count}}/{{$countQ}}</h3>
    <h3>Số điểm: 
        @if($score < 5)
        <span class="text-danger">{{$score}}</span>
        @endif
        @if($score < 6.5 && $score >= 5)
        <span class="text-warning">{{$score}}</span>
        @endif
        @if($score > 6.5)
        <span class="text-primary">{{$score}}</span>
        @endif
        điểm</h3>
@stop