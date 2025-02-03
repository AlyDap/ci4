<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>detail users</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container p-3">

 <h1>Detail User</h1>

 <div class="mb-3">
  <label class="form-label" for="name">Name</label>
  <input type="text" class="form-control" id="name" name="name" readonly value="<?= $user['name']; ?>">
 </div>
 <div class="mb-3">
  <label class="form-label" for="type">Type</label>
  <input type="text" class="form-control" id="type" name="type" readonly value="<?= $user['type']; ?>">
 </div>
 <div class="mb-3">
  <label class="form-label" for="status">Status</label>
  <input type="text" class="form-control" id="status" name="status" readonly value="<?= ($user['status'] == 1) ? 'Aktif' : 'Tidak Aktif' ?>">
 </div>
 <a href="/users" class="btn btn-secondary">Back</a>
 <a href="/users/<?= $user['id']; ?>/edit" class="btn btn-warning btn-sm">edit</a>
 <a href="/users/<?= $user['id']; ?>/delete" class="btn btn-danger btn-sm">hapus</a>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</body>

</html>