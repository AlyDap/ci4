<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>users</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container p-3">
 <h1>Cari Data</h1>
 <a href="/users" class="btn btn-outline-primary mb-3">Lihat User</a>
 <br>
 <form action="/laporan/search" method="post">
  <div class="mb-3">
   <label class="form-label" for="type">Type</label>
   <select class="form-select" name="type" id="type" required>
    <?php if (isset($type)) { ?>
     <option value="admin" <?= ($type == 'admin') ? 'selected' : '' ?>>Admin</option>
     <option value="user" <?= ($type == 'user') ? 'selected' : '' ?>>User</option>
     <option value="guest" <?= ($type == 'guest') ? 'selected' : '' ?>>Guest</option>
    <?php } else { ?>
     <option value="admin">Admin</option>
     <option value="user">User</option>
     <option value="guest">Guest</option>
    <?php } ?>
   </select>
  </div>

  <div class="mb-3">
   <label class="" for="status">Status</label>
   <br>
   <?php if (isset($type)) { ?>
    <input type="radio" name="status" id="1" value="1" required <?= ($status == 1) ? 'checked' : '' ?>>
    <label for="1" class="pe-3">Active</label>
    <input type="radio" name="status" id="0" value="0" required <?= ($status == 0) ? 'checked' : '' ?>>
    <label for="0">Inactive</label>
   <?php } else { ?>
    <input type="radio" name="status" id="1" value="1" required checked>
    <label for="1" class="pe-3">Active</label>
    <input type="radio" name="status" id="0" value="0" required>
    <label for="0">Inactive</label>
   <?php } ?>
  </div>

  <button type="submit" name="aksi" value="cari" class="btn btn-primary">Cari Data</button>
  <button type="submit" name="aksi" value="download" class="btn btn-primary">Download Data</button>
 </form>
 <br>

 <table class="table table-bordered">
  <thead>
   <tr>
    <th>No</th>
    <th>Name</th>
    <th>Type</th>
    <th>Status</th>
   </tr>
  </thead>
  <tbody>
   <?php if (isset($users)) {
    foreach ($users as $i => $item) { ?>
     <tr>
      <td><?= ++$i; ?></td>
      <td><?= $item['name']; ?></td>
      <td><?= $item['type']; ?></td>
      <td><?= ($item['status'] == 1) ? 'Aktif' : 'Tidak Aktif' ?></td>
     </tr>
    <?php }
   } else {
    ?>
    <tr>
     <td colspan="4">Masukan Pencarian</td>
    </tr>
   <?php
   }  ?>
  </tbody>
 </table>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</body>

</html>