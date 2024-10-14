<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <div class="container mt-3">
    <h2>Biodata</h2>
    <p>anak anak tongkrongan malam:</p>
    <table class="table table-hover">
      <thead>
        <tr>
          <th><input type="checkbox" ID="select_all"></th>
          <th>ID</th>
          <th>Nama depan</th>
          <th>Nama belakang</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <?php
      include "koneksi.php";
      $sql = "SELECT id, namadepan, namabelakang FROM biodata ";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) < 0) {
        ?>
        <tr>
          <td colspan="5">data kosong</td>
        </tr>

        <?php
      } else {
        ?>
        <tr>
          <td><input type="checkbox" class="checkbox" name="checked_id[]" value=""></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <?php

      }
      ?>

      <table>
      </table>
    
  </div>

</body>

</html>