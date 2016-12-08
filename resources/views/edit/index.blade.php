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
	<body style="background-color=:#dedfdf">
	        <div class="container" style="background-color:#dce0e1">
		<div class="content">
	        		<table style="width:50%" bgcolor="#d9f6fc" align="center">
				
				<caption style="background-color:#d9f6fc"><BR></BR>List of Trainers<BR></BR></caption>
				<tr>
					 <th>Name</th>
   					 <th>Email</th>
					 <th>HomeTown</th>
					 <th>Pokemons</th>
					 <th>Admin</th>
					 <th>Edit</th>
 				</tr>
					<h3> Trainers' Data</h3>
					        @foreach($trainers as $trainer)
						 <form action="{{ url('/edit',[$trainer->id] )}}" method="PUT">
							<tr>
						        <td width="25%" align="center"><input type="text" name="name" value="{{$trainer->name}}"></input></td>
						        <td width="25%" align="center"><input type="text" name="email" value="{{$trainer->email}}"></input</td>
						        <td width="25%" align="center"><input type="text" name="hometown" value="{{$trainer->hometown}}"></input></td>
						        <td width="25%" align="center">@if($trainer->pokemons->count() != 0)
												@foreach($trainer->pokemons as $p)
                  		                                                                        <input type="text" name="pokemon" value="{{$p->name}}"
                                		                                                          </input>
												@endforeach
											@else
												<input type="text" name="pokemon" ></input>
											@endif
 							</td>
							<td width="25%" align="center"><input type="text" name="admin" value="{{$trainer->admin}}"></input></td>
      							<td width="25%" align="center" name="{{$trainer->id}}"><button> Edit</button></td>

						</form>
						@endforeach
							@if(Session::has('message'))
								<div class="alert alert-info">{{Session::get('message')}}</div>
							@endif
						        	</tr>
						    
				</table>
		</div>
         	</div>
	</body>
</html>

@endsection

