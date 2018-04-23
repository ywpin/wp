@extends('layouts.app')

@section('content')
		<section id="container">
			<div id="eachBox">
				<p id="eachTitle">Task: {{$taskOne['name']}}</p>
    		    <p id="date">Date: {{$taskOne['date']}}</p>
    		    <img src="{{$taskOne['pic']}}" alt="icon">
    		</div>
    		<a href="../task2"><p id="backButton">Back</p></a>
		</section>
@endsection
