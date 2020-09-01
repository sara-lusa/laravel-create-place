@extends('layouts.app')

@section('content')
  <h2>Professori</h2>

  @foreach ($teachers as $teacher)
    <div>
      <h3>Nome: {{$teacher->nome}} {{$teacher->cognome}}</h3>
      <ul>
        <li>Materia: {{$teacher->materia}}</li><br>
      </ul>
    </div>
  @endforeach
@endsection
