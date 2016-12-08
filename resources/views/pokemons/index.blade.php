@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
        <head>
                <title>Laravel</title>
        </head>
        <body>
                <div class="container" style="background-color:#e1f386">
                    <div class="content">
                        <h2>{{$trainer_name->name}} has {{$trainer_name->pokemons->count()}} pokemons</h2>
                <ul>@foreach($trainer_name->pokemons as $pokemon)
                        <li><a href="">{{$pokemon->name}}</a></li>
                @endforeach
                </ul>
            </div>
        </div>
    </body>
</html>

@endsection
