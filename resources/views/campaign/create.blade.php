@extends("layout.index")
@section("content")
<br>
	<h1>Crear una campaña</h1>
</header>
                    <form action="/campaign" method="POST">
                        @csrf
                        <p><strong>Nombre de la campaña: </strong>
                        <input type="text" class="loginRegExp" id="name" @error("campaign_name") class="error" @enderror name="campaign_name" value="{{old('campaign_name')}}"></p>
                        @error("campaign_name")
                            <p class="error">{{ $errors->first("campaign_name", "Este campo es requerido") }}</p>
                        @enderror

                        <p><strong>Contraseña de la campaña:</strong>
                        <input type="password" class="loginRegExp" id="password" @error("campaign_password") class="error" @enderror name="campaign_password" value="{{old('campaign_password')}}"></p>
                        @error("campaign_password")
                            <p class="error">{{ $errors->first("campaign_password") }}</p>
                        @enderror

                        <br>
                        <input type="submit" id="submit" name="submit" value="Crear Campaña">
                    </form>
@endsection
