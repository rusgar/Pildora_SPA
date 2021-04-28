@extends("layouts.app")
@section("contenido")
      <img src="data:image/png;base64,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"  width="125px"alt="">
      <hr>
      <p><a href="/">Inicio</a> || <a href="/secondPage">Segunda Pagina</a></p>
@endsection