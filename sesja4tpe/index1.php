<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Mechanizm Sesji</title>
</head>
<body>
<?php

   if (isset($_SESSION['auth']['login'])) {
       echo "<h1>Witaj, " . htmlspecialchars($_SESSION['auth']['login']) . "</h1>";
   }
   ?>

<form action="sesja1.php" method="post">
<label for="login">Login:</label>
<input type="text" id="login" name="login" required>
<button type="submit">Wyślij</button>
</form>

<form action="sesja1.php" method="post">
<input type="hidden" name="action" value="destroy">
<button type="submit">kopiuj sesje</button>
</form>

</body>
</html>