@extends("layout.index")
@section("content")
<header>
<br>
	<h1>Equipo</h1>
	<p>¡Todo lo que puedas necesitar para vencer!</p>
</header>
<p>Afiladas espadas, armaduras impenetrables, componentes mágicos... ¡Vencer al mal no es sencillo, pero llevar encima un arma fiable, una armadura adecuada para tu estilo de juego y un par de pociones de sobra siempre ayuda! Aqui tienes un listado de todo el equipo disponible, aprovecha y ojea lo que puedas necesitar en un futuro para vencer a cualquiera que se interponga en tu camino.</p>
	@if(Auth::user()->user_type=="admin")
	<a href="/item/create" class="button big primary">+ Crear Objeto</a>
	@endif
	<br><br>
<h2>Armas</h2>
<table>
	<tr>
		<th>Nombre</th>
		<th>Tipo</th>
		<th>Daño</th>
		<th>Empuñadura</th>
		<th>Alcance</th>
		<th>Precio</th>
		@if(Auth::user()->user_type=="admin")
		<th></th>
		<th></th>
		@endif
	</tr>
	@foreach($weapons as $weapon)
	<tr>
		<td>{{ $weapon->item_name }}</td>
		<td>{{ $weapon->weapon_type }}</td>
		<td>{{ $weapon->weapon_damage }}</td>
		<td>{{ $weapon->weapon_hands }}</td>
		<td>
			@if($weapon->weapon_range!=0)
			{{ $weapon->weapon_range }} metros
			@else
			Cuerpo a Cuerpo
			@endif
		</td>
		<td>{{ $weapon->item_price }} monedas</td>
		@if(Auth::user()->user_type=="admin")
		<td> <a href="/item/{{$weapon->item_id}}/edit"><i class="fas fa-edit edit"></i></a></td>
    	<td>	<form action="/item/{{$weapon->item_id}}" method="POST">
			@csrf
			@method("DELETE")
			<button type="submit" class="fas fa-times-circle delete"></button>
			</form>
		</td>
		@endif
	</tr>
	@endforeach
</table>
<h2>Armaduras</h2>
<table>
	<tr>
		<th>Nombre</th>
		<th>Tipo</th>
		<th>Armadura</th>
		<th>Penalización</th>
		<th>Precio</th>
		@if(Auth::user()->user_type=="admin")
		<th></th>
		<th></th>
		@endif
	</tr>
	@foreach($armors as $armor)
	<tr>
		<td>{{ $armor->item_name }}</td>
		<td>{{ $armor->body_part }}</td>
		<td>{{ $armor->armour }}</td>
		<td>
			@if($armor->penality!=0)
			{{ $armor->penality }}
			@else
			Sin penalización
			@endif
		</td>
		<td>{{ $armor->item_price }} monedas</td>
		@if(Auth::user()->user_type=="admin")
		<td><a href="/item/{{$armor->item_id}}"><i class="fas fa-edit edit"></i></a></td>
    	<td>	<form action="/item/{{$armor->item_id}}" method="POST">
			@csrf
			@method("DELETE")
			<button type="submit" class="fas fa-times-circle delete"></button>
			</form>
		</td>
		@endif
	</tr>
	@endforeach
</table>
<h2>Objetos consumibles</h2>
<table>
	<tr>
		<th>Nombre</th>
		<th>Descripción</th>
		<th>Precio</th>
		@if(Auth::user()->user_type=="admin")
		<th></th>
		<th></th>
		@endif
	</tr>
	@foreach($consumables as $consumable)
	<tr>
		<td>{{ $consumable->item_name }}</td>
		<td>{{ $consumable->description }}</td>
		<td>{{ $consumable->item_price }} monedas</td>
		@if(Auth::user()->user_type=="admin")
		<td> <a href="/item/{{$consumable->item_id}}"><i class="fas fa-edit edit">  </i></a></td>
		<td>
		<form action="/item/{{$consumable->item_id}}" method="POST">
			@csrf
			@method("DELETE")
			<button type="submit" class="fas fa-times-circle delete">
			</button>
			</form>
		</td>
		@endif
	</tr>
	@endforeach
</table>
@endsection