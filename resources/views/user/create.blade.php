@extends("layout.index")
@section("content")

            <div class="row">
                <div class="col-md-8">
                    <form action="/user" method="POST">
                        @csrf
                        <p>Nombre de Usuario:
                        <input type="text" @error("username") class="error" @enderror name="username" value="{{old('username')}}"></p>
                        @error("username")
                            <p class="error">{{ $errors->first("username") }}</p>
                        @enderror
                        <p>Contraseña:
                        <input type="password" @error("password") class="error" @enderror name="password" value="{{old('password')}}"></p>
                        @error("password")
                            <p class="error">{{ $errors->first("password") }}</p>
                        @enderror
                        <br>
                        <input type="submit" name="submit" value="Registrarse">
                    </form>
                </div>
            </div>
@endsection
