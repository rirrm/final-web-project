<?php 
  require_once '../controllers/LajmiController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <table class="content-table">
        <thead>
            <tr>
              <th>Titulli i lajmit</th>
              <th>Foto e lajmit</th>
              <th>Pershkrimi</th>
            </tr>
        </thead>
        <tbody>
          <?php 
          $l = new LajmiController;
          $allLajmet = $l->readData();
          foreach($allLajmet as $lajmi): ?>
        <tr>
          <td><?php echo $lajmi['lajmi_titulli'];?></td>
          <td><?php echo $lajmi['lajmi_foto'];?></td>
          <td><?php echo $lajmi['lajmi_pershkrimi'];?></td>
          <td><a href="edito-lajmin.php?id=<?php echo $lajmi['Id'];?>">Edit</a></td>
          <td><a href="fshij-lajmin.php?id=<?php echo $lajmi['Id'];?>">Delete</a></td>
        </tr>  
        <?php endforeach; ?>
      </tbody>
    </table>
</div>
</body>
<style>
*{
  font-family: sans-serif; 
}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  width: 100%;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.link{
    text-decoration: none;
    color: red;
    font-size: 17px;
}
.first-link{
  color: black;
  font-size: 22px;
  padding-left: 50%;
  position: relative;
  top: 20px;
}
.top-links{
    font-size: 30px;
    color: black;
    padding: 30px;
    text-decoration: none;
}
</style>
</html>