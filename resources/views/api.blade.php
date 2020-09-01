<h2>Studenti</h2>

<div id="student-list"></div>

<script src="{{asset('js/app.js')}}"></script>

<script id="student-template" type="text/x-handlebars-template">
  <h3>Nome studente: @{{nome}} @{{cognome}}</h3>
  <ul>
    <li>Classe: @{{nome_classe}}</li>
    <li>Voto Massimo: @{{voto_max}}</li>
    <li>Media: @{{media}}</li><br>
  </ul>
</script>
