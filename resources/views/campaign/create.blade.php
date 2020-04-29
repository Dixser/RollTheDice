@extends("layout.index")
@section("content")
                    <form action="/campaign" method="POST">
                        @csrf
                        <p>Nombre de la campaña:
                        <input type="text" @error("campaign_name") class="error" @enderror name="campaign_name" value="{{old('campaign_name')}}"></p>
                        @error("campaign_name")
                            <p class="error">{{ $errors->first("campaign_name", "Este campo es requerido") }}</p>
                        @enderror

                        <p>Contraseña de la campaña:
                        <input type="password" @error("campaign_password") class="error" @enderror name="campaign_password" value="{{old('campaign_password')}}"></p>
                        @error("campaign_password")
                            <p class="error">{{ $errors->first("campaign_password") }}</p>
                        @enderror

                        <br>
                        <input type="submit" name="submit" value="Registrarse">
                    </form>
@endsection
