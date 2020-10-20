@extends('layout')
@section('content')
	<div class="col-sm-8">
		 <h2>
		 	Editar producto
		 	<a href="{{ route('products.index') }}" class="btn btn-default pull-right">Listado</a>
		 </h2>
		 formulario
	</div>
	<div class="col-sm-4">
		 @include('products.fragment.info')
	</div>
@endsection