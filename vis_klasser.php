<?php include "db.php";
$res =$conn->query("SELECT * FROM klasse");
echo "<table border_1><tr><th>Kode</th><th>Navn</th><th>Studium</th></tr>";
while ($r= $res->fetch_assoc())
  echo "<tr><td>{$r['klassekode']}</td><td>{$r['klassenavn']}</td><td>{$r['studiumkode']}</td></tr>";
  echo "</table><a href='index.php'>Tilbake</a>";
