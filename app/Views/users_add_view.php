<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>add users</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container p-3">

 <h1>Add New User</h1>

 <form action="/users" method="post">
  <div class="mb-3">
   <label class="form-label" for="name">Name</label>
   <input type="text" class="form-control" id="name" name="name" required>
  </div>

  <div class="mb-3">
   <label class="form-label" for="type">Type</label>
   <select class="form-select" name="type" id="type" required>
    <option value="admin">Admin</option>
    <option value="user">User</option>
    <option value="guest">Guest</option>
   </select>
  </div>

  <div class="mb-3">
   <label class="" for="status">Status</label>
   <br>
   <input type="radio" name="status" id="1" value="1" required checked>
   <label for="1" class="pe-3">Active</label>
   <input type="radio" name="status" id="0" value="0" required>
   <label for="0">Inactive</label>
  </div>

  <button type="submit" class="btn btn-primary">Save</button>
 </form>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</body>

</html>