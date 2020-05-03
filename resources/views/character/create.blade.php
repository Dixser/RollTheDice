@extends("layout.index")
@section("content")
        <h1>Creación de personajes</h1>
                    <form action="/character" method="POST">
                        @csrf
            <div class="row">
                    <div class="col-md-8">
                        <p>Nombre:
                        <input type="text" @error("char_name") class="error" @enderror name="char_name" value="{{old('char_name')}}"></p>
                        @error("char_name")
                            <p class="error">{{ $errors->first("char_name") }}</p>
                        @enderror

                        <p>Raza:
                        <select name="race" @error("race") class="error" @enderror value="{{old('race')}}">
                            <option value="Humano">Humano (Sin modificadores)</option>
                            <option value="Elfo">Elfo (+1 Carisma +1 Destreza -1 Constitución)</option>
                            <option value="Enano">Enano (+1 Constitución -1 Carisma)</option>
                            <option value="Gnomo">Gnomo (+1 Destreza +1 Inteligencia -1 Fuerza)</option>
                            <option value="Mediano">Mediano (+1 Destreza -1 Fuerza)</option>
                            <option value="Orco">Orco (+1 Fuerza +1 Constitución -1 Inteligencia)</option>
                            <option value="Trasgo">Trasgo (+1 Destreza -1 Constitución)</option>
                        </select>
                        @error("race")
                            <p class="error">{{ $errors->first("race") }}</p>
                        @enderror

                        <p>Alineamiento:
                        <select name="alignment" @error("alignment") class="error" @enderror value="{{old('alignment')}}">
                            <option value="Legal bueno">Legal bueno</option>
                            <option value="Neutral bueno">Neutral bueno</option>
                            <option value="Caótico bueno">Caótico bueno</option>
                            <option value="Legal neutral">Legal neutral</option>
                            <option value="Neutral">Neutral</option>
                            <option value="Caótico neutral">Caótico neutral</option>
                            <option value="Legal malvado">Legal malvado</option>
                            <option value="Neutral malvado">Neutral malvado</option>
                            <option value="Caótico malvado">Caótico malvado</option>
                        </select>
                        @error("alignment")
                            <p class="error">{{ $errors->first("alignment") }}</p>
                        @enderror

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <p>
							<input type="radio" id="male" name="sex" checked value="Masculino">
							<label for="male">Masculino</label>
							<input type="radio" id="female" name="sex" value="Femenino">
							<label for="female">Femenino</label>
                        </p>

                        <p>Clase:
                        <select name="class" @error("class") class="error" @enderror value="{{old('class')}}">
                            <option value="Arcano">Arcano</option>
                            <option value="Asesino">Asesino</option>
                            <option value="Bárbaro">Bárbaro</option>
                            <option value="Caballero">Caballero</option>
                            <option value="Clérigo">Clérigo</option>
                            <option value="Druida">Druida</option>
                            <option value="Guerrero">Guerrero</option>
                            <option value="Juglar">Juglar</option>
                            <option value="Ladrón">Ladrón</option>
                            <option value="Mago">Mago</option>
                            <option value="Monje">Monje</option>
                            <option value="Montaraz">Montaraz</option>
                            <option value="Paladín">Paladín</option>
                            <option value="Trovador">Trovador</option>
                        </select>
                        @error("class")
                            <p class="error">{{ $errors->first("class") }}</p>
                        @enderror

                        <p>Religión:
                        <input type="text" @error("religion") class="error" @enderror name="religion" value="{{old('religion')}}"></p>
                        @error("religion")
                            <p class="error">{{ $errors->first("religion") }}</p>
                        @enderror

                        <p>Ciudad Natal:
                        <input type="text" @error("hometown") class="error" @enderror name="hometown" value="{{old('hometown')}}"></p>
                        @error("hometown")
                            <p class="error">{{ $errors->first("hometown") }}</p>
                        @enderror
                        <br>
                        <input type="submit" name="submit" value="Registrarse">
                    </div>
                    </form>
            </div>
@endsection
