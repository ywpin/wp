<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Welcome</title>
		<link rel="stylesheet" href="{{asset('css/every.css')}}">
	</head>
	<body>
		<section id="container">
			<div id="box">
				<p id="title">Task: {{$taskOne['name']}}</p>
    		    <p id="date">Date: {{$taskOne['date']}}</p>
    		    <img src="{{$taskOne['pic']}}" alt="icon">
    		</div>
    		<a href="../task2"><p id="backButton">Back</p></a>
		</section>
	</body>
</html>