<?php include "db.php";
$res =$conn->query("SELECT * FROM student");
echo "<table border=1><tr><th>Brukernavn</th><th>Fornavnavn</th><th>Etternavn</th></tr>Klasse</th></tr>";
while ($r= $res->fetch_assoc())
  echo "<tr><td>{$r['brukernavn']}</td><td>{$r['fornavn']}</td><td>{$r['etternavn']}</td></tr>{$r['klassekode']}</td></tr>";
  echo "</table><a href='index.php'>Tilbake</a>";
