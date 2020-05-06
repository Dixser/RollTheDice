@extends("layout.index")
@section("content")
<header>
<br>
	<h1>Tus Partidas</h1>
	<p>¡Accede a tus partidas aquí!</p>
</header>
<p>Entra a una partida a la cual hayas accedido previamente, si aún no te has registrado en ninguna partida pulsa <a href="/campaign">aquí</a>.</p>
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