@extends('layaout')
@section('pasta')
  @foreach ($pastaGenerica as $pasta)
    <div class="tipiPasta">
      <h1>{{$pasta["titolo"]}}</h1>
      <h2>{{$pasta["tipo"]}}</h2>
    </div>
  @endforeach
  <a href="{{route('pastaLungaLink')}}">TIPI DI PASTA</a>

@endsection

@section('pastaLungaLayout')
  <div class="pastaLungaDiv">
    @foreach ($pastaGenerica as $pasta)
      @if ($pasta['tipo']=='lunga')
        <h1>{{$pasta['titolo']}}</h1>
      @endif


    @endforeach

  </div>

@endsection
