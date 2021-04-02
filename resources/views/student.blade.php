@extends('layouts.app')
@section('title', 'School Management|Student List')
@section('content')
	<section>
		<div class="container">
		    <div class="row">
		    	<div class="col-md-12">
		    		<h2>Student List</h2>
		    		<span class="pull-right">
		        
		        <a href="student/create">Add</button>

		          	</span>
		    	</div>
		    </div>
	    </div>
	</section>
    <section>
		<div class="container">
		    <div class="row">
			    <div class="col-md-12">
				    <table class="table">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Name</th>
					      <th scope="col">Reporting Teacher</th>
					      <th scope="col">Age</th>
					      <th scope="col">Gender</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach(@$students as $student)
					    <tr>
					      <th scope="row">{{ $loop->index+1 }}</th>
					      <td>{{$student->name}}</td>
					      <td>{{$student->teachers->name}}</td>
					      <td>{{$student->age}}</td>
					      <td>{{$student->gender}}</td>
					      <td><a href=""><i class="icon-trash"></i>
<a style="color:black" href="{{ route('student.destroy', ['id' => $student->id]) }}">
    delete
</a></a> <a href="{{url('student/'.$student->id.'/edit')}}"><i class="fa fa-edit"></i></a></td>
					    </tr>
					   @endforeach
					  </tbody>
				</table>
			{{$students->links()}}
			</div>
		</div>
	</div>
</section>
@stop