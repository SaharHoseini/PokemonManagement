@extends('layouts.app')

@section('content')
<div class="container" style="background-color:#fde7fc">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
	<a href="{{ url('/trainers') }}"  role="button">
                                        You Are Logged in! click To Proceed
                                    </a>
   		</div>

            </div>
        </div>
    </div>
</div>
@endsection
