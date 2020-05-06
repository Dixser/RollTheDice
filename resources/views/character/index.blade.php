@extends("layout.index")
@section("content")
<header>
<br>
	<h1>Tus personajes</h1>
</header>
<p>Bienvenido a tu panel de control de tus personajes, aquí podrás echar un vistazo a tus personajes y realizar un par de acciones con ellos. Si aun no tienes un personaje creado, pulsa <a href="/character/create">aquí</a>.</p>
<a href="/character/create" class="button big primary">+ Crear Personaje</a>
<br><br>
@foreach ($characters as $character)
<h3>{{$character->char_name}}, {{$character->class}} de Nivel {{$character->level}}  ({{$character->alignment}})</h3>
<span>Información</span>
<table>
<tr>
    <th>Nombre</th>
    <td>{{$character->char_name}}</td>
    <th>Clase</th>
    <td>{{$character->class}}</td>
    <th>Raza</th>
    <td>{{$character->race}}</td>
</tr>
<tr>
    <th>Sexo</th>
    <td>{{$character->sex}}</td>
    <th>Religion</th>
    <td>{{$character->religion}}</td>
    <th>Ciudad Natal</th>
    <td>{{$character->hometown}}</td>
</tr>
</table>
<span>Atributos</span>
<table>
<tr>
    <th>Nivel</th>
    <td>{{$character->level}}</td>
    <th>Salud</th>
    <td>{{$character->current_health}}/{{$character->max_health}}</td>
    <td></td>
    <td></td>

</tr>
<tr>
    <th>Armadura</th>
    <td>{{$character->armor}}</td>
    <th>Oro</th>
    <td>{{$character->gold}}</td>
    <td></td>
    <td></td>

</tr>
<tr>
    <th>Fuerza</th>
    <td>{{$character->strength}}</td>
    <th>Destreza</th>
    <td>{{$character->dexerity}}</td>
    <th>Constitución</th>
    <td>{{$character->stamina}}</td>

</tr>
<tr>
    <th>Inteligencia</th>
    <td>{{$character->intelligence}}</td>
    <th>Sabiduría</th>
    <td>{{$character->wisdom}}</td>
    <th>Carisma</th>
    <td>{{$character->charisma}}</td>
</tr>
</table>
<br>
@endforeach
@endsection