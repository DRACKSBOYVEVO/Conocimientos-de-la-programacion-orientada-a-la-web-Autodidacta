@extends('layout')
@section('content')
	<div class="col-sm-8">
		 <h2>
		 	Listado de productos
		 	<a href="{{ route('products.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		 </h2>
		 @include('products.fragment.info')
		 <table class="table table-hover table-striped">
		 	<thead>
		 		<tr>
		 			<th width="20px">ID</th>
		 			<th>Nombre del producto</th>
		 			<th colspan="">&nbsp;</th>
		 		</tr>
		 	</thead>
		 	<tbody>
		 		@foreach($products as $product)
		 		<tr>
		 			<td>{{ $product->id }}</td>
		 			<td>
		 				<strong>{{ $product->name }}</strong>
		 				{{ $product->short }}
		 			</td>
		 			<td>
		 				<a href="{{ route('products.show', $product->$id) }}">Ver</a>
		 			</td>
		 			<td>
		 				<a href="{{ route('products.show', $product->$id) }}">Editar</a>
		 			</td>
		 			<td>Borrar</td>
		 		</tr>
		 		@endforeach
		 	</tbody>
		 </table>
		 {!! $products->render()!!}
	</div>
	<div class="col-sm-4">
		 @include('products.fragment.aside')
	</div>
@endsection