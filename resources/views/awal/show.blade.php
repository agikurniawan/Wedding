@extends('layouts.app')
@section('content')


<ul>
		@foreach($datas as $data)
		<li><a href="{{ url('coba',$data->id) }}">nama vendor : {{ $data->nama }}</a></li>
		@endforeach
	</ul>



@stop
