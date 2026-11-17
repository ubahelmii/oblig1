<?php include "db.php";
if ($_SERVER[REQUEST_METHOD"] == "POST") {
   try {
       $stmt = $conn->prepare(DELETE FROM klasse WHERE klassekode = ?");
       $stmt->bind_param("s", $_POST["klassekode"]);
       $stmt->execute();
       echo "Klasse slettet";
}catch (mysqli_sql_exeception $e) {
  echo "Klassen har studenter og kan ikke slettes";
}

}

$res = $conn->query("SELECT klassekode,klassenavn FROM klasse");
?>
<form method="post" onsubmit="return confirm('Er du sikker? ');">
  <select name="klassekode">
    <?php while ($r = $res->fetch_assoc())
  echo "<option value='{$r['klassekode']}'>{$r['klassekode']} - {$r['klassenavn']}
  </option>"; ?>
  </select>
  <button>Slett</button>
</form>
<a href="index.php">Tilbake</a>
