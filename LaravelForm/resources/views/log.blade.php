<!-- resources/views/log.blade.php -->

@extends('layouts.app')

@section('content')
	<div class="container-fluid" style="background-color: white;">
		<div class="row">
			@include('common.errors')
			<form method="post" action="{{ url('usernew') }}">{{ csrf_field() }}
				<div class="form-group">
					<input type="text" class="form-control" name="name" placeholder="Name" autocomplete="off">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" name="email" placeholder="Email" autocomplete="off">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="pass" placeholder="Password" autocomplete="off">
				</div>
				<p class="text-center">	
					<button type="submit" class="btn btn-success">Submit</button>
				</p>
			</form>
		</div>
	</div>
   
@endsection