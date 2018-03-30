<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Welcome</title>
	</head>
	<body>
		@foreach($tasks as $key=>$task)
			<div>
				<a href="localhost:8000/task3/{{$key}}"><h1>Task: {{$task['name']}}</h1></a>
    		    <h5>Date: {{$task['date']}}</h5>
    		    <h6>PIC: {{$task['pic']}}</h6>
    		</div>
    	@endforeach
	</body>
</html>