@extends('layout.app')
@section('title','Calculo IMC - Resultado')
@section('apresentacao')

   <p>Veja qual sua classificação ocom relação ao seu IMC</p>
   @endesection
   @section('content')

<div>
    <h2>{{$resultadoimc["nome"]}}</h2>
    <p>Idade: {{$resultadoimc["idade"]}}</p>
    <p>Peso: {{$resultadoimc["peso"]}}</p>
    <p>Altura: {{$resultadoimc["altura"]}}</p>
    <p>IMC: {{$resultadoimc["imc"]}} - {{$resultadoimc["classificacaoimc"]}}</p>
</div>

    </main>
    
</body>
</html>