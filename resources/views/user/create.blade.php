@extends("layout.index")
@section("content")
<br>
	<h1>Registro de usuario</h1>
</header>
                    <form action="/user" method="POST">
                        @csrf
                        <p>Nombre de Usuario: 
                        <input type="text" id="name" class="loginRegExp" @error("username") class="error" @enderror name="username" value="{{old('username')}}"></p>
                        @error("username")
                            <span class="error">Introduce un nombre de usuario válido</span>
                        @enderror
                        <p>Contraseña: 
                        <input type="password" id="password" class="loginRegExp" @error("password") class="error" @enderror name="password" value="{{old('password')}}"></p>
                        @error("password")
                            <span class="error">Introduce una contraseña válida</span>
                        @enderror
                        <span>(Debe contener caracteres númericos y mayúsculas y minúsculas)</span>
                        <br><br>
                        <input type="submit" name="submit" id="submit" value="Registrarse">
                    </form>
@endsection
