@extends("layout.index")
@section("content")
<br>
	<h1>Iniciar Sesión</h1>
</header>
            <div class="row">
                <div class="col-md-8">
                    <form action="/login" id="user" method="POST">
                        @csrf
                        <p>Nombre de Usuario:
                        <input type="text" id="name" class="loginRegExp" @error("username") class="error" @enderror name="username" value="{{old('username')}}"></p>
                        @error("username")
                            <span class="error">{{ $errors->first("username") }}</span>
                        @enderror
                        <p>Contraseña:
                        <input type="password" id="password" class="loginRegExp" @error("password") class="error" @enderror name="password" value="{{old('password')}}"></p>
                        @error("password")
                            <span class="error">Introduce una contraseña</span>
                        @enderror
                        <br>
                        <input type="submit" name="submit" id="submit" value="Iniciar Sesión">
                    </form>
                </div>
            </div>
@endsection
