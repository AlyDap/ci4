<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>users</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container p-3">
 <h1>List Of Users</h1>
 <a href="/users/new" class="btn btn-primary mb-3">Add User</a>
 <a type="button" href="/laporan" class="btn btn-outline-info mb-3">PDF</a>
 <table class="table table-bordered">
  <thead>
   <tr>
    <th>No</th>
    <th>Name</th>
    <th>Type</th>
    <th>Action</th>
   </tr>
  </thead>
  <tbody>
   <?php foreach ($users as $i => $item) { ?>
    <tr>
     <td><?= ++$i; ?></td>
     <td><?= $item['name']; ?></td>
     <td><?= $item['type']; ?></td>
     <td>
      <a href="/users/<?= $item['id']; ?>" class="btn btn-info btn-sm">detail</a>
      <a href="/users/<?= $item['id']; ?>/edit" class="btn btn-warning btn-sm">edit</a>
      <a href="/users/<?= $item['id']; ?>/delete" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure?')">delete</a>
     </td>
    </tr>
   <?php } ?>
  </tbody>
 </table>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</body>

</html>