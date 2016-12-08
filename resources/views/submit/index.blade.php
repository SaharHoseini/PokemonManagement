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
 </head>
	<body style="background-color=:#f3fde7">
		<div class="container" style="background-color:#f3fde7">
		<div class="content">
				<table style="width:50%" bgcolor="#52be80" align="center">
				 <tr>
   					 <th>Name</th>
   					 <th>HomwTown</th>
					 <th>Pokemons</th>
					 <th>Admin</th>
 				</tr>
					<h3>Trainers Info</h3>
					        @foreach($trainers as $trainer)
							<tr>
						        <td width="25%" align="center">{{$trainer->name}}</td>
						        <td width="25%" align="center"> {{$trainer->hometown}}</td>
						        <td width="25%" align="center"> {{link_to_route('trainers.pokemons.index', $trainer->pokemons->count(),[$trainer->id])}}</td>
							<td width="25%" align="center"> {{$trainer->admin}}</td>

						@endforeach
				
				</table>
		</div>
	</div>
	</body>
</html>

@endsection

