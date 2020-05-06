@extends("layout.index")
@section("content")
<br>
	<h1>Crear una campaña</h1>
</header>
                    <form action="/campaign/{{$campaign->campaign_id}}" method="POST">
                        @csrf
                        @method("PUT")
                        <p><strong>Nombre de la campaña: </strong>
                        <input type="text" @error("campaign_name") class="error" @enderror name="campaign_name" value="{{$campaign->campaign_name}}"></p>
                        @error("campaign_name")
                            <p class="error">{{ $errors->first("campaign_name", "Este campo es requerido") }}</p>
                        @enderror

                        <p><strong>Contraseña de la campaña:</strong>
                        <input type="password" @error("campaign_password") class="error" @enderror name="campaign_password" value="{{$campaign->campaign_password}}"></p>
                        @error("campaign_password")
                            <p class="error">{{ $errors->first("campaign_password") }}</p>
                        @enderror

                        <br>
                        <input type="submit" name="submit" value="Editar Campaña">
                    </form>
@endsection
