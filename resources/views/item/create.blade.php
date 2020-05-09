@extends("layout.index")
@section("content")
<header>
<br>
	<h1>Creación de Equipo</h1>
</header>
<form action="/item" method="POST">
                        @csrf
                        <p><strong>Nombre del objeto:</strong>
                            <input type="text" id="name" class="itemRegExp" @error("item_name") class="error" @enderror name="item_name" value="{{old('item_name')}}">
                        </p>
                        @error("item_name")
                            <p class="error">{{ $errors->first("item_name", "Este campo es requerido") }}</p>
                        @enderror
                        <p><strong>Precio:</strong>
                                <input type="number" id="price" class="itemRegExp" @error("item_price") class="error" min="0" @enderror name="item_price" value="{{old('item_price')}}">
                            </p>
                            @error("item_price")
                                <p class="error">{{ $errors->first("item_price", "Este campo es requerido") }}</p>
                            @enderror
                            <p><strong>Tipo de objeto:</strong></p>
                        <p>
							<input type="radio" id="weapon_item" name="item_type" value="weapon">
							<label for="weapon_item">Arma</label>
							<input type="radio" id="armor_item" name="item_type" value="armor">
							<label for="armor_item">Armadura</label>
							<input type="radio" id="consumable_item" name="item_type" value="consumable">
							<label for="consumable_item">Consumible</label>
                        </p>
                        @error("item_type")
                        <p class="error">{{ $errors->first("item_type", "Este campo es requerido") }}</p>
                        @enderror
                        <div class="weapon">

                            <p><strong>Alcance:</strong>
                                <input type="number"  id="weapon_range" class="itemRegExp" @error("weapon_range") class="error" min="0" @enderror name="weapon_range" value="{{old('weapon_range')}}">
                            </p>
                            @error("weapon_range")
                                <p class="error">{{ $errors->first("weapon_range", "Este campo es requerido") }}</p>
                            @enderror
                            <p><strong>Daño:</strong>
                                <input type="number" id="weapon_damage" class="itemRegExp" @error("weapon_damage") class="error" min="0" @enderror name="weapon_damage" value="{{old('weapon_damage')}}">
                            </p>
                            @error("weapon_damage")
                                <p class="error">{{ $errors->first("weapon_damage", "Este campo es requerido") }}</p>
                            @enderror
                            <p><strong>Tipo de Arma:</strong>
                            <input type="text" class="itemRegExp" id="weapon_type" @error("weapon_type") class="error" @enderror name="weapon_type" value="{{old('weapon_type')}}">
                            </p>
                            @error("weapon_type")
                                <p class="error">{{ $errors->first("weapon_type", "Este campo es requerido") }}</p>
                            @enderror

                            <p><strong>Empuñadura:</strong></p>
                            <p>
                                <input type="radio" id="one_hand" name="hands"  value="Una Mano" checked>
							    <label for="one_hand">Una Mano</label>
                                <input type="radio" id="two_handed" name="hands" value="Dos Manos">
                                <label for="two_handed">Dos Manos</label>
                            </p>
                            @error("hands")
                                <p class="error">{{ $errors->first("hands", "Este campo es requerido") }}</p>
                            @enderror
                        </div>
                        <div class="armor">
                            <p><strong>Armadura:</strong>
                                <input type="number" class="itemRegExp" id="armour" @error("armour") class="error" min="0" @enderror name="armour" value="{{old('armour')}}">
                            </p>
                            @error("armour")
                                <p class="error">{{ $errors->first("armour", "Este campo es requerido") }}</p>
                            @enderror
                            <p><strong>Modificador de movimiento:</strong>
                                <input type="number" class="itemRegExp" id="penality" @error("penality") class="error" @enderror name="penality" value="{{old('penality')}}">
                            </p>
                            @error("penality")
                                <p class="error">{{ $errors->first("penality", "Este campo es requerido") }}</p>
                            @enderror

                            <p><strong>Parte del cuerpo:</strong></p>
                            <p>
                                <input type="radio" id="head" name="body_part"  value="Cabeza" checked>
							    <label for="head">Cabeza</label>
                                <input type="radio" id="shoulder" name="body_part" value="Hombros">
                                <label for="shoulder">Hombros</label>
                                <input type="radio" id="torso" name="body_part" value="Torso">
                                <label for="torso">Torso</label>
                                <input type="radio" id="hand" name="body_part" value="Guantes">
							    <label for="hand">Guantes</label>
                                <input type="radio" id="legs" name="body_part" value="Piernas">
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
                        <div class="consumable">
                            <p><strong>Descripción del objeto:</strong>
                                <textarea name="description" class="itemRegExp" id="description" @error("description") class="error" @enderror cols="15" rows="3" value="{{old('description')}}"></textarea>
                            </p>
                            @error("description")
                                <p class="error">{{ $errors->first("description", "Este campo es requerido") }}</p>
                            @enderror
                        </div>
                        <input type="submit" id="submit" name="submit" value="Crear objeto">
</form>
@endsection