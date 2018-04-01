<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Welcome</title>
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
	</head>
	<body>
		<section id="container">
			<p id="header">Database</p>
			@foreach($tasks as $key=>$task)
				<div id="box">
					<a href="task3/{{$key}}"><p id="title">Task: {{$task['name']}}</p></a>
    			    <p class="detail">Date: {{$task['date']}}</p>
    			    <p class="detail">Pic: {{$task['pic']}}</p>
    			</div>
    		@endforeach
		</section>
	</body>
</html>