@extends("layout.index")
@section("content")
<header>
<br>
	<h1>Tus personajes</h1>
</header>
<p>Bienvenido a tu panel de control de tus personajes, aquí podrás echar un vistazo a tus personajes y realizar un par de acciones con ellos. Si aun no tienes un personaje creado, pulsa <a href="/character/create">aquí</a>.</p>
<a href="/character/create" class="button big primary">+ Crear Personaje</a>
<br><br>
<table>
<tr>
    <th>Nombre</th>
    <th>Clase</th>
    <th>Raza</th>
    <th>Sexo</th>
    <th>Religion</th>
    <th>Ciudad Natal</th>
</tr>
@foreach ($characters as $character)
<tr>
    <td>{{$character->char_name}}</td>
    <td>{{$character->class}}</td>
    <td>{{$character->race}}</td>
    <td>{{$character->sex}}</td>
    <td>{{$character->religion}}</td>
    <td>{{$character->hometown}}</td>
</tr>
@endforeach
</table>
@endsection