<?php include "db.php";
if ($_Server["REQUEST_METHOD"] == "POST") {
  try {
      $stmt = $conn->prepare("INSERT INTO klasse (klassekode, klassenavn, studiumkode) VALUES (?,?, ?) ");
      $stmt->bind_param("sss", $_POST["klassekode"], $_POST["klassenavn"], $_POST["studiumkode"]);
      $stmt->execute();
      echo "Klasse registrert";
  } catch (mysqli_sql_exception $e) {
    echo "Klassekoden finnes fra før";
    
  }

}
?>
  <form method="post">
    klassekode: <input name="klassekode" maxlength="5" required><br>
    klassenavn: <input name="klassenavn" required><br>
    Studieumkode: <input name="studiumkode" required><br>
    <button>Registrer</button>
  </form>
<a href="index.php">Tilbake</a>
    
