<?php include "db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $stmt = $conn->prepare("DELETE FROM student WHERE brukernavn = ?");
       $stmt->bind_param("s", $_POST["brukernavn"]);
       $stmt->execute();
       echo "Student slettet";
}
$res = $conn->query("SELECT brukernavn,fornavn,etternavn FROM student");
?>
<form method="post" onsubmit="return confirm('Er du sikker?');">
  <select name="brukernavn">
    <?php while ($r = $res->fetch_assoc())
  echo "<option value='{$r['brukernavn']}'>{$r['brukernavn']} - {$r['fornavn']}{$r['etternavn']}</option>"; ?>
  </select>
  <button>Slett</button>
</form>
<a href="index.php">Tilbake</a>
