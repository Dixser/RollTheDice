<head>
<style>
    table{
        border: 1px solid black;
        padding: 15px;
        margin: 15px;
        border-radius: 3px;
        border-spacing: 15px 0;
    }
    .separador{
        float: right;
    }
    body{
        font-family: "Open Sans", sans-serif;
    }
    h1,h2{
        text-align: center;
    }
    th{
        text-align:left;
    }
</style>
<title>{{$character->char_name}} - Hoja de personaje en PDF</title>
</head>
<body>
<h1>{{$character->char_name}}, {{$character->class}} de Nivel {{$stats->level}}</h1>
<div class="separador">

    <h3>   Información</h3>
    <table>
        <tr>
            <th>Nombre</th>
            <td>{{$character->char_name}}</td>
        </tr><tr>
            <th>Clase</th>
            <td>{{$character->class}}</td>
        </tr><tr>
            <th>Raza</th>
            <td>{{$character->race}}</td>
        </tr><tr>
            <th>Sexo</th>
            <td>{{$character->sex}}</td>
        </tr><tr>
            <th>Religion</th>
            <td>{{$character->religion}}</td>
        </tr><tr>
            <th>Ciudad Natal</th>
            <td>{{$character->hometown}}</td>
        </tr><tr>
            <th>Alineamiento</th>
            <td>{{$character->alignment}}</td>
        </tr>
    </table>
</div>
<div>
    <h3>   Atributos</h3>
    <table>
        <tr>
        <th>Nivel</th>
        <td>{{$stats->level}}</td>
        <th>Salud</th>
        <td>{{$stats->current_health}}/{{$stats->max_health}}</td>
        <td></td>
        <td></td>

        </tr>
        <tr>
            <th>Armadura</th>
            <td>{{$stats->armor}}</td>
            <th>Oro</th>
            <td>{{$stats->gold}}</td>
            <td></td>
            <td></td>

        </tr>
        </table>
        <table>
        <tr>
            <th>Fuerza</th>
            <td>{{$stats->strength}}</td>
            </tr><tr>
            <th>Destreza</th>
            <td>{{$stats->dexerity}}</td>
            </tr><tr>
            <th>Constitución</th>
            <td>{{$stats->stamina}}</td>
            </tr><tr>
            <th>Inteligencia</th>
            <td>{{$stats->intelligence}}</td>
            </tr><tr>
            <th>Sabiduría</th>
            <td>{{$stats->wisdom}}</td>
            </tr><tr>
            <th>Carisma</th>
            <td>{{$stats->charisma}}</td>
        </tr>
    </table>
</div>
<div class="equipo">
<h2>Armas</h2>
    <table>
    	<tr>
    		<th>Nombre</th>
    		<th>Tipo</th>
    		<th>Daño</th>
    		<th>Empuñadura</th>
    		<th>Alcance</th>
    		<th>Precio</th>
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
    	</tr>
    	@endforeach
    </table>
</div>
<div class="equipo">
    <h2>Armaduras</h2>
    <table>
    	<tr>
    		<th>Nombre</th>
    		<th>Tipo</th>
    		<th>Armadura</th>
    		<th>Penalización</th>
    		<th>Precio</th>
    	</tr>
    	@foreach($armors as $armor)
    	<tr>
    		<td>{{ $armor->item_name }}</td>
    		<td>{{ $armor->body_part }}</td>
    		<td>{{ $armor->armour }}</td>
    		<td>
    			@if($armor->penality>0)
    			+{{ $armor->penality }}
    			@else
    			{{ $armor->penality }}
    			@endif
    		</td>
    		<td>{{ $armor->item_price }} monedas</td>
    	</tr>
    	@endforeach
    </table>
    <div class="equipo">
    <h2>Objetos consumibles</h2>
    <table>
    	<tr>
    		<th>Nombre</th>
    		<th>Descripción</th>
    		<th>Precio</th>
    	</tr>
    	@foreach($consumables as $consumable)
    	<tr>
    		<td>{{ $consumable->item_name }}</td>
    		<td>{{ $consumable->description }}</td>
    		<td>{{ $consumable->item_price }} monedas</td>
    	</tr>
    	@endforeach
    </table>
</body>