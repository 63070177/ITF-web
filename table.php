<html>
<head>
<title>ITF Lab</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'garthy.mysql.database.azure.com', 'it63070177@garthy', 'JSRhsq44', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table class="table table-dark table-striped" width="600" border="1">
  <thead>
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="350"> <div align="center">Action </div></th>
  </tr>
   </thead>
  <tbody>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
  <td class="contact-delete">
      <form action='delete.php' method="post">
      <input type="hidden" name="name" value="">
      <input type="submit" name="submit" value="Delete">
      </form>
</td>
    <td><button type="button" class="btn btn-outline-danger">ลบ</button>
       <button type="button" class="btn btn-outline-info">แก้ไข</button> 
    </td>
  </tr>
<?php
}
?>
  </tbody>
</table>
<?php
mysqli_close($conn);
?>
<a target="_blank" href="https://supichayathamsuna.azurewebsites.net/form.html" class="btn btn-outline-info">เพิ่ม</a>
</body>
</html>
