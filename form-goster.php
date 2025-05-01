<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Form Bilgileri</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="container mt-5">

  <h2 class="mb-4">Gönderilen Form Bilgileri</h2>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<ul class='list-group'>";

    foreach ($_POST as $key => $value) {
      $keyFormatted = ucfirst(str_replace("_", " ", $key));
      echo "<li class='list-group-item'><strong>$keyFormatted:</strong> " . htmlspecialchars($value) . "</li>";
    }

    echo "</ul>";
  } else {
    echo "<div class='alert alert-danger'>Form gönderilmedi!</div>";
  }
  ?>

</body>
</html>
