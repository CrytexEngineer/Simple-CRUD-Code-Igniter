<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
    <button name="button" class="btn btn-danger" onclick="location.href='<?php echo
site_url().'/welcome/insert/';?>'">Insert</button>
<br>
<br>
    <table class="table table-bordered">
      <thead>
        <th>Kode Buku</th>
        <th>Judul Buku</th>
        <th>Penerbit</th>
        <th>Action</th>
      </thead>
      <tbody>
        <?php foreach($buku as $buku): ?>
            <tr>
                <td><?php echo $buku ->kode_buku; ?></td>
                <td><?php echo $buku ->judul_buku; ?></td>
                <td><?php echo $buku ->penerbit; ?></td>
                <td><a href="https://localhost/ci_project/index.php/welcome/delete/<?php echo  $buku ->kode_buku; ?> ">Delete</a> </td>
            </tr>
        <?php endforeach; ?>
        </tr>
      </tbody>
    </table>
    <br>


  </body>
</html>
