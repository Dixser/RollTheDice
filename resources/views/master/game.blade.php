@extends("layout.index")
@section("content")
    <h1>Personajes</h1>
    @foreach($data as $character)
    <h2 class="char_hide">{{$character[0]->char_name}}</h2>
    <div class="character_info">
        <form action="/stats/{{$character[0]->char_id}}" method="post">
        @csrf
        @method("PUT")
        <input type="hidden" name="char_id" value="{{$character[0]->char_id}}">
        <input type="hidden" name="campaign_id" value="{{$id}}">
        <table>
            <tr>
                <th>Nivel</th>
                <td><input type="number" name="level" value="{{$character[1]->level}}"></td>
            </tr>
            <tr>
                <th>Salud</th>
                <td><input type="number" name="current_health" value="{{$character[1]->current_health}}">/<input type="number" name="max_health" value="{{$character[1]->max_health}}"></td>
            </tr>
            <tr>
                <th>Oro</th>
                <td><input type="number" name="gold" value="{{$character[1]->gold}}"></td>
            </tr>
            <tr>
                <th>Armadura</th>
                <td><input type="number" name="armor" value="{{$character[1]->armor}}"></td>
            </tr>
        </table>

        <table>
            <tr>
                <th>Fuerza</th>
                <td><input type="number" name="strength" value="{{$character[1]->strength}}"></td>
            </tr>
            <tr>
                <th>Destreza</th>
                <td><input type="number" name="dexerity" value="{{$character[1]->dexerity}}"></td>
            </tr>
            <tr>
                <th>Constitución</th>
                <td><input type="number" name="stamina" value="{{$character[1]->stamina}}"></td>
            </tr>
            <tr>
                <th>Inteligencia</th>
                <td><input type="number" name="intelligence" value="{{$character[1]->intelligence}}"></td>
            </tr>
            <tr>
                <th>Sabiduría</th>
                <td><input type="number" name="wisdom" value="{{$character[1]->wisdom}}"></td>
            </tr>
            <tr>
                <th>Carisma</th>
                <td><input type="number" name="charisma" value="{{$character[1]->charisma}}"></td>
            </tr>
        </table>
        <input type="submit" value="Guardar Cambios">
        </form>
        <h2>Armas</h2>
        <table>
        	<tr>
        		<th>Nombre</th>
        		<th>Tipo</th>
        		<th>Daño</th>
        		<th>Empuñadura</th>
        		<th>Alcance</th>
        		<th>Precio</th>
        		<th></th>
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
                <td>	
                    <form action="/bag/{{$weapon->item_id}}" method="POST">
			            @csrf
			            @method("DELETE")
                        <input type="hidden" name="char_id" value="{{$character[0]->char_id}}">
                        <input type="hidden" name="campaign_id" value="{{$id}}">
			            <button type="submit" class="fas fa-times-circle">
			            </button>
			        </form>
		        </td>
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
        		<th></th>
        	</tr>
        	@foreach($character[3] as $armor)
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
                <td>	
                    <form action="/bag/{{$armor->item_id}}" method="POST">
			            @csrf
			            @method("DELETE")
                        <input type="hidden" name="char_id" value="{{$character[0]->char_id}}">
                        <input type="hidden" name="campaign_id" value="{{$id}}">
			            <button type="submit" class="fas fa-times-circle">
			            </button>
			        </form>
		        </td>
        	</tr>
        	@endforeach
        </table>
        <h2>Objetos consumibles</h2>
        <table>
        	<tr>
        		<th>Nombre</th>
        		<th>Descripción</th>
        		<th>Precio</th>
        		<th></th>
        	</tr>
        	@foreach($character[4] as $consumable)
        	<tr>
        		<td>{{ $consumable->item_name }}</td>
        		<td>{{ $consumable->description }}</td>
        		<td>{{ $consumable->item_price }} monedas</td>
                <td>	
                    <form action="/bag/{{$consumable->item_id}}" method="POST">
			            @csrf
			            @method("DELETE")
                        <input type="hidden" name="char_id" value="{{$character[0]->char_id}}">
                        <input type="hidden" name="campaign_id" value="{{$id}}">
			            <button type="submit" class="fas fa-times-circle">
			            </button>
			        </form>
		        </td>
        	</tr>
        	@endforeach
        </table>
    </div>
    <h3 class="char_hide">Realizar tirada para {{$character[0]->char_name}}</h3>
    <form action="/chat" class="roll" method="POST">
        @csrf
        <input type="hidden" name="char_id" value="{{$character[0]->char_id}}">
        <p>Tipo de Dado: <input type="number" name="dice" min="2" value="20"> <span>caras</span></p>
        <select name="stat">
            <option value="0">Sin atributo (0)</option>
            <option value="{{$character[1]->strength}}">Fuerza ({{$character[1]->strength}})</option>
            <option value="{{$character[1]->dexerity}}">Destreza ({{$character[1]->dexerity}})</option>
            <option value="{{$character[1]->stamina}}">Constitución ({{$character[1]->stamina}})</option>
            <option value="{{$character[1]->intelligence}}">Inteligencia ({{$character[1]->intelligence}})</option>
            <option value="{{$character[1]->wisdom}}">Sabiduría ({{$character[1]->wisdom}})</option>
            <option value="{{$character[1]->charisma}}">Carisma ({{$character[1]->charisma}})</option>
        </select>
        <p>Modificador: <input type="number" name="modifier" value="0"></p>
        <p>Requisito para superar: <input type="number" name="score" value="15"></p>
        <input type="hidden" name="char_name" value="{{$character[0]->char_name}}">
        <input type="submit" value="Tirar" name="roll" class="roll">
        <p class="{{$character[0]->char_id}}_result"></p>
        </form>
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

