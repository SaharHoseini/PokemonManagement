@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>

<h3>{{$trainer->name}}'s Profile</h3>

<div>
  <form action="{{ url('/submit', [$trainer->id] )}}" method="PUT">
    <label for="name">Name</label>
    <input type="text" id="fname" value="{{$trainer->name}}" name="name">

    <label for="email">email</label>
    <input type="text" id="email" value="{{$trainer->email}}" name="email">

    <label for="hometown">HomeTown</label>
    <input type="text" id="hometown" value="{{$trainer->hometown}}" name="hometown">

    <label for="pokemon">Pokemons</label>
    <select id="pokemon" name="pokemon">
	  <option value="" name="pokemon"></option>
	@foreach($pokemons as $pokemon)
           <option value="{{$pokemon->name}}" name="pokemon">{{$pokemon->name}}</option>
        @endforeach
    </select> 
    <input type="submit" value="Submit">
    @if(Session::has('message'))
         <div class="alert alert-info">{{Session::get('message')}}</div>
    @endif

  </form>
</div>

</body>
</html>

@endsection
