@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
       <table class="table table-stripted table-bordered">
       	<thead>
       		<tr>
       			<th>ID</th>
       			<th>Name</th>
       			<th>Email</th>
       		</tr>
       	</thead>
       	<tbody>
       		@foreach($users as $key=>$value)
       		<tr>
       			<td>{{$value->id}}</td>
       			<td>{{$value->name}}</td>
       			<td>{{$value->email}}</td>
       		</tr>
       		@endforeach
       		
       	</tbody>
       </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
