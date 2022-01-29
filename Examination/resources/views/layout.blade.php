<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EXAM</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		<base href="{{asset('')}}">
</head>
<body>
	<div class="container-fluid">
			<nav class="navbar navbar-expand-sm bg-light">
				<a class="navbar-brand font-weight-bold text-dark" href="{{route('home')}}">
					EXAM
				</a>
			    <!-- Links -->
			    <ul class="navbar-nav">
			    	<li class="nav-item">
				      	<a class="nav-link font-weight-bold" href="{{route('exams')}}">
				      		EXAM LIST
				      	</a>
				    </li>
				    <li class="nav-item">
				      	<a class="nav-link font-weight-bold" href="{{route('addExam')}}">
				      		THÊM BÀI KIỂM TRA
				      	</a>
				    </li>
				    <!-- Dropdown -->
				    <li class="nav-item dropdown">
					    <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbardrop" data-toggle="dropdown">
					        DANH SÁCH MÔN HỌC
					    </a>
				        <div class="dropdown-menu font-weight-bold">
					        <a class="dropdown-item" href="#">Link 1</a>
					        <a class="dropdown-item" href="#">Link 2</a>
					        <a class="dropdown-item" href="#">Link 3</a>
				        </div>
				     </li>
					 <li>
						 ĐĂNG KÍ
					</li>
			  	</ul>
			</nav>
			@yield("content")
			<br>
			<p class="footer"><?php echo date("d/m/y"); ?></p>
		</div>
</body>
</html>