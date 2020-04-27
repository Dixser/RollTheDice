@extends("layout.index")
@section("content")

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
                            <option value="Elfo">Elfo</option>
                            <option value="Enano">Enano</option>
                            <option value="Gnomo">Gnomo</option>
                            <option value="Humano">Humano</option>
                            <option value="Mediano">Mediano</option>
                            <option value="Orco">Orco</option>
                            <option value="Trasgo">Trasgo</option>
                        </select>
                        @error("race")
                            <p class="error">{{ $errors->first("race") }}</p>
                        @enderror

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <p>Sexo:
                        <input type="text" @error("sex") class="error" @enderror name="sex" value="{{old('sex')}}"></p>
                        @error("sex")
                            <p class="error">{{ $errors->first("sex") }}</p>
                        @enderror

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
