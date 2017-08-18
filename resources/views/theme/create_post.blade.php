@extends('master')


@section('content')

	<div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
		<h3>Create New Post</h3>

		<div class="alert alert-danger">
			@foreach($errors->all() as $error)

				<li>{{$error}}</li>

			@endforeach
		</div>

		<form method="post" action="/posts/create">
			{{csrf_field()}}
			<div>
				<span style="font-size: 15px">Post Title<label>*</label></span>
				<input type="text" name="title" placeholder="Post Title" > 
			</div>

			<div>
				<span style="font-size: 15px">Post Body<label>*</label></span>

				<textarea rows="4" cols="58" name="body" placeholder="Say! What is your mind" ></textarea>
			</div>
			<input type="submit" value="Create">
		</form>
   </div>	
@endsection