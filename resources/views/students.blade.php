<h2>Studenti</h2>
<ul>
  <?php foreach ($students as $student) { ?>
    <li>Nome: <?php echo $student['nome'] ?></li>
    <li>Cognome: <?php echo $student['cognome'] ?></li>
    <li>Media: <?php echo $student['media'] ?></li><br>
  <?php } ?>
</ul>
