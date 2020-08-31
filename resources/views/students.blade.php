<h2>Studenti</h2>

  @foreach ($students as $student)
    <ul>
      <li>Nome: {{$student->nome}}</li>
      <li>Cognome: {{$student->cognome}}</li>
      <li>Media: {{$student->media}}</li><br>
    </ul>
  @endforeach
