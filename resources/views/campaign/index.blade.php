@extends("layout.index")
@section("content")
<header>
<br>
	<h1>Campañas</h1>
	<p>¡Busca partidas en linea y juega ahora!</p>
</header>
<p>Bienvenido a nuestra sección de campañas, aquí podrás buscar partidas existentes y unirte con un personaje creado previamente. Si aun no tienes un personaje creado, pulsa <a href="/character/create">aquí</a>.</p>
<a href="/campaign/create" class="button big primary">+ Crear Campaña</a>
<br><br>
<table>
<tr>
<th>ID</th>
<th>Nombre de la campaña</th>
<th>Master</th>
<th>Personaje</th>
<th>Contraseña</th>
<th></th>
</tr>
@foreach ($campaigns as $campaign)
<form action="/scene" method="POST">
@csrf
<input type="hidden" name="campaign_id" value="{{ $campaign->campaign_id }}">
<tr>
<td>{{ $campaign->campaign_id }}</td>
<td>{{ $campaign->campaign_name }}</td>
<td>{{ $campaign->master }}</td>
<td>
		<select name="char_id">
		@foreach ($characters as $character)
		<option value="{{$character->char_id}}">{{$character->char_name}}, {{$character->class}} {{$character->race}}</option>
		@endforeach

	</select>
</td>
<td><input type="password" name="campaign_password"></td>
<td><input type="submit" value="Jugar"></td>
</tr>
</form>
@endforeach
</table>
@endsection