@extends('layouts.crud.index')
@include('layouts.app')
@section('content')
<div class="section">
	@foreach($ketrings as $ketring)

	<div class="row">
		<div class="col s12">
            <br><h5>{{ $ketring->harga }}</h5>
            <img src="{{ asset('images/'.$ketring->gambar)  }}" style="max-height:200px;max-width:200px;margin-top:10px;">

            
			<a href="{{url('readketring', $ketring->id)}}" class="btn btn-flat pink accent-3 waves-effect waves-light white-text">Readmore <i class="material-icons right">send</i></a>
			<a class="btn btn-flat purple darken-4 waves-effect waves-light white-text">Edit <i class="material-icons right">mode_edit</i></a>
            <a class="btn btn-flat red darken-4 waves-effect waves-light white-text">Delete <i class="material-icons right">delete</i></a>   
            <!-- <button><a href="{{url('read', $ketring->id)}}">Readmore</a>
            <button>Edit 
            <button>Delete  -->
		</div>
	</div>
	@endforeach

</div>
@endsection