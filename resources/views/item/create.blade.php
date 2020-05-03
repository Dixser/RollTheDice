@extends("layout.index")
@section("content")
<header>
<br>
	<h1>Creación de Equipo</h1>
</header>
<form action="/item" method="POST">
                        @csrf
                        <p>Nombre del objeto:
                            <input type="text" @error("campaign_name") class="error" @enderror name="campaign_name" value="{{old('campaign_name')}}">
                        </p>
                        @error("campaign_name")
                            <p class="error">{{ $errors->first("campaign_name", "Este campo es requerido") }}</p>
                        @enderror
                        <p>Precio:
                                <input type="number" @error("weapon_range") class="error" min="0" @enderror name="weapon_range" value="{{old('weapon_range')}}">
                            </p>
                            @error("weapon_range")
                                <p class="error">{{ $errors->first("weapon_range", "Este campo es requerido") }}</p>
                            @enderror
                        <p>
							<input type="radio" id="weapon_item" name="item_type" checked value="weapon">
							<label for="weapon_item">Arma</label>
							<input type="radio" id="armor_item" name="item_type" value="armor">
							<label for="armor_item">Armadura</label>
							<input type="radio" id="consumable_item" name="item_type" value="consumable">
							<label for="consumable_item">Consumible</label>
                        </p>
                        <br>
                        <div class="weapon">
                            <p>
                                <input type="radio" id="one_hand" name="hands" value="Una Mano">
							    <label for="one_hand">Una Mano</label>
                                <input type="radio" id="two_handed" name="hands" value="Dos Manos">
                                <label for="two_handed">Dos Manos</label>
                            </p>
                            <p>Alcance:
                                <input type="number" @error("weapon_range") class="error" min="0" @enderror name="weapon_range" value="{{old('weapon_range')}}">
                            </p>
                            @error("weapon_range")
                                <p class="error">{{ $errors->first("weapon_range", "Este campo es requerido") }}</p>
                            @enderror
                            <p>Tipo de Arma:
                            <input type="text" @error("weapon_type") class="error" @enderror name="weapon_type" value="{{old('weapon_type')}}">
                            </p>
                            @error("weapon_type")
                                <p class="error">{{ $errors->first("weapon_type", "Este campo es requerido") }}</p>
                            @enderror
                        </div>
                        <div class="armor">
                            <p>
                                <input type="radio" id="head" name="weapon_type" value="Cabeza">
							    <label for="head">Cabeza</label>
                                <input type="radio" id="shoulder" name="weapon_type" value="Hombros">
                                <label for="shoulder">Hombros</label>
                                <input type="radio" id="torso" name="weapon_type" value="Torso">
                                <label for="torso">Torso</label>
                                <input type="radio" id="hand" name="weapon_type" value="Guantes">
							    <label for="hand">Guantes</label>
                                <input type="radio" id="leg" name="weapon_type" value="Piernas">
                                <label for="legs">Piernas</label>
                                <input type="radio" id="foot" name="weapon_type" value="Pies">
							    <label for="foot">Pies</label>
                                <input type="radio" id="shield" name="weapon_type" value="Escudo">
                                <label for="shield">Escudo</label>
                                <input type="radio" id="neck" name="weapon_type" value="Colgante">
							    <label for="neck">Colgante</label>
                                <input type="radio" id="ring" name="weapon_type" value="Anillo">
                                <label for="ring">Anillo</label>
                            </p>
                            <p>Armadura:
                                <input type="number" @error("armour") class="error" min="0" @enderror name="armour" value="{{old('armour')}}">
                            </p>
                            @error("armour")
                                <p class="error">{{ $errors->first("armour", "Este campo es requerido") }}</p>
                            @enderror
                            <p>Modificador de movimiento:
                                <input type="number" @error("penality") class="error" @enderror name="penality" value="{{old('penality')}}">
                            </p>
                            @error("penality")
                                <p class="error">{{ $errors->first("penality", "Este campo es requerido") }}</p>
                            @enderror
                        </div>
                        <div class="consumable">
                        <p>Descripción del objeto:
                            <textarea name="" @error("description") class="error" @enderror cols="15" rows="3" value="{{old('description')}}"></textarea>
                        </p>
                        @error("description")
                            <p class="error">{{ $errors->first("description", "Este campo es requerido") }}</p>
                        @enderror
                        </div>
                        <input type="submit" name="submit" value="Registrarse">
</form>
@endsection