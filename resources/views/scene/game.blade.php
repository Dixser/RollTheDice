@extends("layout.index")
@section("content")
    <h1>{{$character->char_name}}</h1>

    <table>
        <tr>
            <th>Nivel</th>
            <td>{{$stats->level}}</td>
        </tr>
        <tr>
            <th>Salud</th>
            <td>{{$stats->current_health}}/{{$stats->max_health}}</td>
        </tr>
        <tr>
            <th>Oro</th>
            <td>{{$stats->gold}}</td>
        </tr>
    </table>

    <table>
        <tr>
            <th>Fuerza</th>
            <td>{{$stats->strength}}</td>
        </tr>
        <tr>
            <th>Destreza</th>
            <td>{{$stats->dexerity}}</td>
        </tr>
        <tr>
            <th>Constitución</th>
            <td>{{$stats->stamina}}</td>
        </tr>
        <tr>
            <th>Inteligencia</th>
            <td>{{$stats->intelligence}}</td>
        </tr>
        <tr>
            <th>Sabiduría</th>
            <td>{{$stats->wisdom}}</td>
        </tr>
        <tr>
            <th>Carisma</th>
            <td>{{$stats->charisma}}</td>
        </tr>
    </table>
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
    			@if($armor->penality!=0)
    			{{ $armor->penality }}
    			@else
    			Sin penalización
    			@endif
    		</td>
    		<td>{{ $armor->item_price }} monedas</td>
    	</tr>
    	@endforeach
    </table>
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
@endsection