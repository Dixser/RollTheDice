@extends("layout.index")
@section("content")
<br>
        <h1>Edición de personaje</h1>
                    <form action="/character/{{$character->char_id}}" method="POST">
                        @csrf
                        @method("PUT")
                        <p><strong>Nombre:</strong>
                        <input type="text" id="name" class="charRegExp" @error("char_name") class="error" @enderror name="char_name" value="{{$character->char_name}}"></p>
                        @error("char_name")
                            <p class="error">{{ $errors->first("char_name") }}</p>
                        @enderror

                        <p><strong>Raza: </strong>{{$character->race}}</p>

                        <p><strong>Alineamiento:</strong> {{$character->alignment}}</p>
                        <p>
                            <strong>Sexo: </strong>{{$character->sex}}
                        </p>

                        <p><strong>Clase:</strong> {{$character->class}}</p>
                       

                        <p><strong>Religión:</strong>
                        <input type="text" id="religion" class="charRegExp" @error("religion") class="error" @enderror name="religion" value="{{$character->religion}}"></p>
                        @error("religion")
                            <p class="error">{{ $errors->first("religion") }}</p>
                        @enderror

                        <p><strong>Ciudad Natal:</strong>
                        <input type="text" id="hometown" class="charRegExp" @error("hometown") class="error" @enderror name="hometown" value="{{$character->hometown}}"></p>
                        @error("hometown")
                            <p class="error">{{ $errors->first("hometown") }}</p>
                        @enderror
                        <br>
                        <input type="submit" name="submit" value="Editar Personaje">
                    </form>
@endsection
