<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Form Sonuçları</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container my-5">
  <h2>Formdan Gelen Bilgiler</h2>

  <ul class="list-group">
    <?php
    foreach ($_POST as $key => $value) {
      $goster = is_array($value) ? implode(", ", $value) : $value;
      echo "<li class='list-group-item'><strong>" . htmlspecialchars($key) . ":</strong> " . htmlspecialchars($goster) . "</li>";
    }
    ?>
  </ul>

  <a href="iletisim.html" class="btn btn-primary mt-3">Forma Geri Dön</a>
</body>
</html>

