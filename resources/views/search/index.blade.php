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
	        		<table style="width:50%" bgcolor="#ccde77" align="center">
				
				<tr>
					 <th>ID</th>
   					 <th>Name</th>
					 <th>Trainer</th>
 				</tr>
					<h3> Search Result</h3>
					        <form>
							<tr>
						        <td width="25%" align="center">{{$newpokemon->id}}</td>
						        <td width="25%" align="center"> {{$newpokemon->name}}</td>
						        <td width="25%" align="center"> {{$newpokemon->trainer->name}}</td>

						</form>
				</table>
		</div>
         	</div>
	</body>
</html>

@endsection

