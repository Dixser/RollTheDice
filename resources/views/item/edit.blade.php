@extends("layout.index")
@section("content")
<header>
<br>
	<h1>Edición de Equipo</h1>
</header>
<form action="/item/{{$item->item_id}}" method="POST">
                        @csrf
                        @method("PUT")
                        <p><strong>Nombre del objeto:</strong>
                            <input type="text" @error("item_name") class="error" @enderror name="item_name" value="{{$item->item_name}}">
                        </p>
                        @error("item_name")
                            <p class="error">{{ $errors->first("item_name", "Este campo es requerido") }}</p>
                        @enderror
                        <p><strong>Precio:</strong>
                                <input type="number" @error("item_price") class="error" min="0" @enderror name="item_price" value="{{$item->item_price}}">
                            </p>
                            @error("item_price")
                                <p class="error">{{ $errors->first("item_price", "Este campo es requerido") }}</p>
                            @enderror
                        @if($item->item_type=="weapon")
                        <div>

                            <p><strong>Alcance:</strong>
                                <input type="number" @error("weapon_range") class="error" min="0" @enderror name="weapon_range" value="{{$item->weapon_range}}">
                            </p>
                            @error("weapon_range")
                                <p class="error">{{ $errors->first("weapon_range", "Este campo es requerido") }}</p>
                            @enderror
                            <p><strong>Daño:</strong>
                                <input type="number" @error("weapon_damage") class="error" min="0" @enderror name="weapon_damage" value="{{$item->weapon_damage}}">
                            </p>
                            @error("weapon_damage")
                                <p class="error">{{ $errors->first("weapon_damage", "Este campo es requerido") }}</p>
                            @enderror
                            <p><strong>Tipo de Arma:</strong>
                            <input type="text" @error("weapon_type") class="error" @enderror name="weapon_type" value="{{$item->weapon_type}}">
                            </p>
                            @error("weapon_type")
                                <p class="error">{{ $errors->first("weapon_type", "Este campo es requerido") }}</p>
                            @enderror

                            <p><strong>Empuñadura:</strong></p>
                            <p>
                                <input type="radio" id="one_hand" name="hands"  value="Una Mano">
							    <label for="one_hand">Una Mano</label>
                                <input type="radio" id="two_handed" name="hands" value="Dos Manos">
                                <label for="two_handed">Dos Manos</label>
                            </p>
                            @error("hands")
                                <p class="error">{{ $errors->first("hands", "Este campo es requerido") }}</p>
                            @enderror
                        </div>
                        @endif
                        @if($item->item_type=="armor")
                        <div>
                            <p><strong>Armadura:</strong>
                                <input type="number" @error("armour") class="error" min="0" @enderror name="armour" value="{{$item->armour}}">
                            </p>
                            @error("armour")
                                <p class="error">{{ $errors->first("armour", "Este campo es requerido") }}</p>
                            @enderror
                            <p><strong>Modificador de movimiento:</strong>
                                <input type="number" @error("penality") class="error" @enderror name="penality" value="{{$item->penality}}">
                            </p>
                            @error("penality")
                                <p class="error">{{ $errors->first("penality", "Este campo es requerido") }}</p>
                            @enderror

                            <p><strong>Parte del cuerpo:</strong></p>
                            <p>
                                <input type="radio" id="head" name="body_part"  value="Cabeza">
							    <label for="head">Cabeza</label>
                                <input type="radio" id="shoulder" name="body_part" value="Hombros">
                                <label for="shoulder">Hombros</label>
                                <input type="radio" id="torso" name="body_part" value="Torso">
                                <label for="torso">Torso</label>
                                <input type="radio" id="hand" name="body_part" value="Guantes">
							    <label for="hand">Guantes</label>
                                <input type="radio" id="leg" name="body_part" value="Piernas">
                                <label for="legs">Piernas</label>
                                <input type="radio" id="foot" name="body_part" value="Pies">
							    <label for="foot">Pies</label>
                                <input type="radio" id="shield" name="body_part" value="Escudo">
                                <label for="shield">Escudo</label>
                                <input type="radio" id="neck" name="body_part" value="Colgante">
							    <label for="neck">Colgante</label>
                                <input type="radio" id="ring" name="body_part" value="Anillo">
                                <label for="ring">Anillo</label>
                            </p>
                            @error("body_part")
                                <p class="error">{{ $errors->first("body_part", "Este campo es requerido") }}</p>
                            @enderror
                        </div>
                        @endif
                        @if($item->item_type=="consumable")
                        <div>
                            <p><strong>Descripción del objeto:</strong>
                                <textarea name="description" @error("description") class="error" @enderror cols="15" rows="3" value="{{$item->description}}"></textarea>
                            </p>
                            @error("description")
                                <p class="error">{{ $errors->first("description", "Este campo es requerido") }}</p>
                            @enderror
                        </div>
                        @endif
                        <input type="submit" name="submit" value="Editar objeto">
</form>
@endsection