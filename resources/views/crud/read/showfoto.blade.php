@extends('layouts.crud.index')
@include('layouts.app')
@section('content')
<div class="section">
	@foreach($fotos as $foto)

	<div class="row">
		<div class="col s12">
            <br><h5>{{ $foto->harga }}</h5>
            <img src="{{ asset('images/'.$foto->gambar)  }}" style="max-height:200px;max-width:200px;margin-top:10px;">

            
			<a href="{{url('readfoto', $foto->id)}}" class="btn btn-flat pink accent-3 waves-effect waves-light white-text">Readmore <i class="material-icons right">send</i></a>
			<a class="btn btn-flat purple darken-4 waves-effect waves-light white-text">Edit <i class="material-icons right">mode_edit</i></a>
            <a class="btn btn-flat red darken-4 waves-effect waves-light white-text">Delete <i class="material-icons right">delete</i></a>   
            <!-- <button><a href="{{url('read', $foto->id)}}">Readmore</a>
            <button>Edit 
            <button>Delete  -->
		</div>
	</div>
	@endforeach

</div>
@endsection