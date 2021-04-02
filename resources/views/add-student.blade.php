@extends('layouts.app')
@section('title', 'School Management|Student List')
@section('content')
  <section>
	<div class="container">
		    <div class="row">
			 <div class="col-md-6">
			<form method="post" id="form" action="{{url('/student')}}" >
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			  <div class="form-group">
			    <label for="name">Name</label>
			    <input type="text" name="name" class="form-control" id="name" aria-describedby="" placeholder="Enter Name" required="">
			    <small id="emailHelp" class="form-text text-muted"></small>
			  </div>
			  <div class="form-group">
			    <label for="age">Age</label>
			    <input type="number" class="form-control" id="age" name="age" placeholder="Age" min="4">
			  </div>
				 <div class="form-group">
				    <label for="age">Gender</label>
				    <select name="gender" class="form-control">
				    	<option>Select Gender</option>
				    	<option value="male">Male</option>
				    	<option value="female">Female</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="age">Reporting Teacher</label>
				    <select name="teacher_id" class="form-control">
				    	<option>Select Teacher</option>
				    	@foreach($teachers as $teacher)
				    	<option value="{{$teacher->id}}">{{$teacher->name}}</option>
				    	@endforeach
				    </select>
				  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
			</div>
		</div>
	</div>

@stop