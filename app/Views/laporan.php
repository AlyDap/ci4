<table border="1">
 <tr>
  <th align="center">No</th>
  <th>Name</th>
  <th>Type</th>
  <th>Status</th>
 </tr>
 <?php foreach ($users as $key => $value) { ?>
  <tr>
   <td align="center"><?= ++$key ?></td>
   <td><?= $value['name'] ?></td>
   <td><?= $value['type'] ?></td>
   <td><?= ($value['status'] == 1) ? 'Aktif' : 'Tidak Aktif' ?></td>
  </tr>
 <?php } ?>
</table>