@extends('layouts.app')
@section('title', 'School Management|Student List')
@section('content')
  <section>
	<div class="container">
		    <div class="row">
			 <div class="col-md-6">
			<form method="post" id="form" action="{{url('/student/'.$student->id.'?_method=PUT')}}" >
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			  <div class="form-group">
			    <label for="name">Name</label>
			    <input type="text" name="name" value="{{$student->name}}" class="form-control" id="name" aria-describedby="" placeholder="Enter Name" required="">
			    <small id="emailHelp" class="form-text text-muted"></small>
			  </div>
			  <div class="form-group">
			    <label for="age">Age</label>
			    <input type="number" class="form-control" value="{{$student->age}}" id="age" name="age" placeholder="Age" min="4">
			  </div>
				 <div class="form-group">
				    <label for="age">Gender</label>
				    <select name="gender" class="form-control">
				    	<option>Select Gender</option>
				    	<option value="male" {{$student->gender == 'male' ? 'selected' : '' }}>Male</option>
				    	<option value="female" {{$student->gender == 'female' ? 'selected' : '' }}>Female</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="age">Reporting Teacher</label>
				    <select name="teacher_id" class="form-control">
				    	<option>Select Teacher</option>
				    	@foreach($teachers as $teacher)
				    	<option value="{{$teacher->id}}" {{$student->teacher_id == $teacher->id ? 'selected' : '' }}>{{$teacher->name}}</option>
				    	@endforeach
				    </select>
				  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
			</div>
		</div>
	</div>

@stop