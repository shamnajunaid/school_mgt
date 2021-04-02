@extends('layouts.app')
@section('title', 'School Management|Score List')
@section('content')
	<section>
		<div class="container">
		    <div class="row">
		    	<div class="col-md-12">
		    		<h2>Score List</h2>
		    		<span class="pull-right">
		        
		        <a href="score/create">Add</button>

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
					      <th scope="col">Student Name</th>
					      <th scope="col">Maths</th>
					      <th scope="col">Science</th>
					      <th scope="col">History</th>
					      <th scope="col">Term</th>
					     <th scope="col">Total Marks</th>
					     <th scope="col">Created On</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach(@$scores as $score)
					    <tr>
					      <th scope="row">{{ $loop->index+1 }}</th>
					      <td>{{$score->student->name}}</td>
					      <td>{{$score->maths}}</td>
					      <td>{{$score->science}}</td>
					      <td>{{$score->history}}</td>
					      <td>{{$score->term->title}}</td>
					      <td>{{$score->total}}</td>
					      <td>{{ \Carbon\Carbon::parse($score->created_at)->format('M d,Y g:i A')}}</td>
					      <td><a href=""><i class="icon-trash"></i>
<a style="color:black" href="{{ route('score.destroy', ['id' => $score->id]) }}">
    delete
</a></a> <a href="{{url('score/'.$score->id.'/edit')}}"><i class="fa fa-edit"></i></a></td>
					    </tr>
					   @endforeach
					  </tbody>
				</table>
			{{$scores->links()}}
			</div>
		</div>
	</div>
</section>
@stop