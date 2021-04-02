@extends('layouts.app')
@section('title', 'School Management|Student List')
@section('content')
  <section>
	<div class="container">
		    <div class="row">
			 <div class="col-md-6">
			<form method="post" id="form" action="{{url('/score/'.$score->id.'?_method=PUT')}}" >
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			  <div class="form-group">
			    <label for="name">Student </label>
			   <select name="student_id" class="form-control">
				    	<option>Select Student</option>
				    	@foreach($students as $student)
				    	<option {{$student->id == $score->student_id ? 'selected' : '' }} value="{{$student->id}}">{{$student->name}}</option>
				    	@endforeach
				    </select>
			   
			  </div>
			  <div class="form-group">
			   <label for="name">Term </label>
			   <select name="term_id" class="form-control">
				    	<option>Select Term</option>
				    	@foreach($terms as $term)
				    	<option {{$term->id == $score->term_id ? 'selected' : '' }} value="{{$term->id}}">{{$term->title}}</option>
				    	@endforeach
				    </select>
			  </div>
				 <div class="form-group">
				    <label for="age">Maths</label>
				    <input type="number" min="0" name="maths" value="{{$score->maths}}"  required="" class="form-control">
				  </div>
				 <div class="form-group">
				    <label for="age">Science</label>
				    <input type="number" min="0" name="science"  value="{{$score->science}}"   required="" class="form-control">
				  </div>
				  <div class="form-group">
				    <label for="age">History</label>
				    <input type="number" min="0" name="history"  value="{{$score->history}}"   required="" class="form-control">
				  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
			</div>
		</div>
	</div>

@stop