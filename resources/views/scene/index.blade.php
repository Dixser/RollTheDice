@extends("layout.index")
@section("content")
<header>
<br>
	<h1>Tus Campañas</h1>
	<p>¡Busca partidas en linea y juega ahora!</p>
</header>
<p>Bienvenido a nuestra sección de campañas, aquí podrás buscar partidas existentes y unirte con un personaje creado previamente. Si aun no tienes un personaje creado, pulsa <a href="/character/create">aquí</a>.</p>
<br><br>
<table>
<tr>
	<th>ID</th>
	<th>Nombre de la campaña</th>
	<th>Master</th>
	<th>Personaje</th>
	<th></th>
</tr>
@foreach ($scenes as $scene)
<tr>
	<td>{{ $scene->campaign_id }}</td>
	<td>{{ $scene->campaign_name }}</td>
	<td>{{ $scene->master }}</td>
	<td>{{ $scene->char_name }}</td>
	<td><a href="/scene/{{$scene->campaign_id}}" class="button small primary">Entrar</a></td>
</tr>
@endforeach
</table>
@endsection