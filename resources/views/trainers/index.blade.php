@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
	<head>
		<title>Laravel</title>
	<style>
             table, th, td {
             border: 1px solid black;
                 }
        </style>
	
 </head>
	<body style="background-color=:#f3fde7">
		<div class="container" style="background-color:#f3fde7">
		<div class="content">
				<table style="width:50%" bgcolor="#e1ea77" align="center">
				 <tr>
   					 <th>Name</th>
   					 <th>HomwTown</th>
					 <th>Pokemons</th>
					 <th>Admin</th>
 				 </tr>
					@if(Auth::user()->profile == 0)
						<h3> You Are Logged in! But Seems you Don't Have A Profile Set Yet</h3><a href="{{ url('/profile',[Auth::user()->id]) }}" role="button">Set My Profile</a>
						@foreach($trainers as $trainer)
        		                                <tr>
                        		                <td width="25%" align="center">N/A</td>
                                        		<td width="25%" align="center">N/A</td>
                                        		<td width="25%" align="center">N/A</td>
		                                        <td width="25%" align="center">N/A</td>

                	                        @endforeach
					@else
						<h3>Trainers Info</h3>
					        @foreach($trainers as $trainer)
							<tr>
						        <td width="25%" align="center">{{$trainer->name}}</td>
						        <td width="25%" align="center"> {{$trainer->hometown}}</td>
						        <td width="25%" align="center"> {{link_to_route('trainers.pokemons.index', $trainer->pokemons->count(),[$trainer->id])}}</td>
							<td width="25%" align="center"> {{$trainer->admin}}</td>

						@endforeach
					@endif
				
				</table>
                                                        @if(Session::has('message'))
                                                                <div class="alert alert-info">{{Session::get('message')}}</div>
                                                        @endif
	
                      </div>
        	</div>
	</body>
</html>

@endsection

