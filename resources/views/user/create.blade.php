@extends("layout.index")
@section("content")

            <div class="row">
                <div class="col-md-8">
                    <form action="/user" method="POST">
                        @csrf
                        <p>Nombre de Usuario:</p>
                        <input type="text" name="username">
                        <p>Contraseña:</p>
                        <input type="password" name="password">
                        <br>
                        <input type="submit" name="submit" value="Registrarse">
                    </form>
                </div>
            </div>
@endsection
