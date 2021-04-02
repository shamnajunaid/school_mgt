@extends('layouts.app')
@section('title', 'School Management|Student List')
@section('content')
  <section>
	<div class="container">
		    <div class="row">
			 <div class="col-md-6">
			<form method="post" id="form" action="{{url('/score')}}" >
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			  <div class="form-group">
			    <label for="name">Student </label>
			   <select name="student_id" class="form-control">
				    	<option>Select Student</option>
				    	@foreach($students as $student)
				    	<option value="{{$student->id}}">{{$student->name}}</option>
				    	@endforeach
				    </select>
			   
			  </div>
			  <div class="form-group">
			   <label for="name">Term </label>
			   <select name="term_id" class="form-control">
				    	<option>Select Term</option>
				    	@foreach($terms as $term)
				    	<option value="{{$term->id}}">{{$term->title}}</option>
				    	@endforeach
				    </select>
			  </div>
				 <div class="form-group">
				    <label for="age">Maths</label>
				    <input type="number" min="0" name="maths" required="" class="form-control">
				  </div>
				 <div class="form-group">
				    <label for="age">Science</label>
				    <input type="number" min="0" name="science" required="" class="form-control">
				  </div>
				  <div class="form-group">
				    <label for="age">History</label>
				    <input type="number" min="0" name="history" required="" class="form-control">
				  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
			</div>
		</div>
	</div>

@stop