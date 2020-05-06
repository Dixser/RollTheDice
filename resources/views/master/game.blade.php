@extends("layout.index")
@section("content")
    <h1>Personajes</h1>
    @foreach($data as $character)
    <h2 class="char_hide">{{$character[0]->char_name}}</h2>
    <div class="character_info">
        <table>
            <tr>
                <th>Nivel</th>
                <td>{{$character[1]->level}}</td>
            </tr>
            <tr>
                <th>Salud</th>
                <td>{{$character[1]->current_health}}/{{$character[1]->max_health}}</td>
            </tr>
            <tr>
                <th>Oro</th>
                <td>{{$character[1]->gold}}</td>
            </tr>
        </table>

        <table>
            <tr>
                <th>Fuerza</th>
                <td>{{$character[1]->strength}}</td>
            </tr>
            <tr>
                <th>Destreza</th>
                <td>{{$character[1]->dexerity}}</td>
            </tr>
            <tr>
                <th>Constitución</th>
                <td>{{$character[1]->stamina}}</td>
            </tr>
            <tr>
                <th>Inteligencia</th>
                <td>{{$character[1]->intelligence}}</td>
            </tr>
            <tr>
                <th>Sabiduría</th>
                <td>{{$character[1]->wisdom}}</td>
            </tr>
            <tr>
                <th>Carisma</th>
                <td>{{$character[1]->charisma}}</td>
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
        	@foreach($character[2] as $weapon)
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
        	@foreach($character[3] as $armor)
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
        	@foreach($character[4] as $consumable)
        	<tr>
        		<td>{{ $consumable->item_name }}</td>
        		<td>{{ $consumable->description }}</td>
        		<td>{{ $consumable->item_price }} monedas</td>
        	</tr>
        	@endforeach
        </table>
    </div>
    @endforeach
    <h1>Gestión de equipo</h1>
    <form action="/bag" method="POST">
        <p>
        @csrf
        <input type="hidden" name="campaign_id" value="{{$id}}">
        Dar <select name="item_id">
            @foreach($items as $item)
                <option value="{{$item->item_id}}">{{$item->item_name}}</option>
            @endforeach
        </select>
        a <select name="char_id">
            @foreach($characters as $character)
                <option value="{{$character->char_id}}">{{$character->char_name}}</option>
            @endforeach
        </select>
        </p>
        <input type="submit" name="submit" value="Dar objeto">
    </form>

@endsection