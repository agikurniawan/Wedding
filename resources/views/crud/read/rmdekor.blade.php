@extends('layouts.crud.index')
@include('layouts.app')
@section('content')

<div class="section">
	
	<div class="row">
		<div class="col s12">
			<h5>{{ $tampilkan->nama }}</h5>

			<p>Vendor: <a href="{{ url('readdekor', $tampilkan->user_id)}}">{{$tampilkan->user->name}}</a></p> <P>Alamat: {{$tampilkan->alamat}}</P> 
			<div class="divider"></div>
			<p>Rp. {!! $tampilkan->harga !!}</p>
			 
			<img src="{{ asset('images/'.$tampilkan->gambar)  }}" style="max-height:200px;max-width:200px;margin-top:10px;">
                
		</div>
	</div>

</div>

@endsection