<?php include "db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  try {
      $stmt = $conn->prepare("INSERT INTO student (brukernavn,fornavn,etternavn,klassekode) VALUES (?,?,?, ?)");
      $stmt->bind_param("ssss", $_POST["brukernavn"], $_POST["fornavn"], $_POST["etternavn"], $_POST["klassekode"]);
      $stmt->execute();
      echo "Student registrert";
  } catch (mysqli_sql_exception $e) {
    echo "Brukernavnet finnes fra før";
    
  }

}
  $res = $conn->query("SELECT klassekode,klassenavn FROM klasse");
?>
  <form method="post">
    Brukernavn: <input name="brukernavn" maxlength="7" required><br>
    Fornavn: <input name="fornavn" required><br>
    Etternavn: <input name="etternavn" required><br>
    Klasse: <select name="klassekode">
      <?php while ($r = $res->fetch_assoc())
  echo "<option value='{$r['klassekode']}'>{$r['klassekode']}- {$r['klassenavn']}</option>"; ?>

    </select><br>  
    <button>Registrer</button>
  </form>
<a href="index.php">Tilbake</a>
    
