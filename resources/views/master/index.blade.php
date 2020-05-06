@extends("layout.index")
@section("content")
<header>
<br>
	<h1>Panel de Master</h1>
</header>
<p>Bienvenido a tu panel de control de tus campañas, aquí podrás ver tus partidas y administrar el contenido de ellas. Si aun no tienes un personaje creado, pulsa <a href="/character/create">aquí</a>.</p>
<a href="/campaign/create" class="button big primary">+ Crear Campaña</a>
<br><br>
<table>
	<tr>
	<th>Nombre de la campaña</th>
	<th></th>
	<th></th>
	<th></th>
</tr>
@foreach ($campaigns as $campaign)
<tr>
	<td>{{ $campaign->campaign_name }}</td>
	<td>    <a href="campaign/{{$campaign->campaign_id}}/edit"><i class="fas fa-edit"></i></a></td>
    <td>
		<form action="/campaign/{{$campaign->campaign_id}}" method="POST">
		@csrf
		@method("DELETE")
		<button type="submit" class="fas fa-times-circle"></button>
	</form>
	</td>
	<td><a href="/master/{{$campaign->campaign_id}}" class="button big primary">Entrar</a></td>
</tr>
@endforeach
</table>
@endsection