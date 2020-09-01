@extends('layouts.app')

@section('content')
  <h2>Studenti</h2>

  @foreach ($students as $student)
    <div>
      <h3>Nome studente: {{$student->nome}} {{$student->cognome}}</h3>
      <ul>
        <li>Classe: {{$student->nome_classe}}</li>
        <li>Voto Massimo: {{$student->voto_max}}</li>
        <li>Media: {{$student->media}}</li><br>
      </ul>
    </div>
  @endforeach
@endsection
