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
	<script type="text/javascript">
	      $(document).ready(function(){
        	$('.added').hide();
        	$('.add').click(function() {
                $(this).hide("fast");
	       $(this).next('.added').fadeIn("slow");
             });
           });
	</script>
 </head>
	<body style="background-color=:#f3fde7">
		<div class="container" style="background-color:#f3fde7">
		<div class="content">
	        		<table style="width:50%" bgcolor="#bbea77" align="center">
				
				<caption style="background-color:#bbea77"><BR></BR>There Are {{$pokemons->count()}} Pokemon(s) Registered In The System<BR></BR></caption>
				<tr>
					 <th>ID</th>
   					 <th>Name</th>
					 <th>Trainer</th>
 				</tr>
					<h3> Pokemons Data</h3>
					        @foreach($pokemons as $pokemon)
						 <form action="{{ url('/delete',[$pokemon->id] )}}" method="PUT">
							<tr>
						        <td width="25%" align="center">{{$pokemon->id}}</td>
						        <td width="25%" align="center"> {{$pokemon->name}}</td>
						        <td width="25%" align="center"> {{$pokemon->trainer->name}}</td>
							<td width="25%" align="center" name="{{$pokemon->id}}"><button> Delete</button></td>

						</form>
						@endforeach

						    
							<form action="{{ url('/add/{name}') }}" method="PUT" accept-charset="UTF-8">
								<tr>
							<td width="25%" align="center" name="id"><input type="number" name="id" valu="id"></td>
							<td width="25%" align="center" name="name"><input type="text"  name="name" value="name"></td>
							<td width="25%" align="center" name="trainer_id"><input type="number" name="trainer_id" value="{{$pokemon->trainer_id}}"</td>
						 	<td width="25%" align="center"><button>Add</button></td>
							@if(Session::has('message'))
								<div class="alert alert-info">{{Session::get('message')}}</div>
							@endif
						        	</tr>
							</form>
						    
				</table>
		</div>
         	</div>
	</body>
</html>

@endsection

