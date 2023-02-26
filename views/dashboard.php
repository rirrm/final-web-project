<?php 
  require_once '../LajmiController.php';
  require_once '../ProdController.php';
  require_once '../homeController.php';
  include_once '../user/userMapper.php';
  require_once '../kontaktController.php';
  

  session_start();
if((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && $_SESSION['role'] == 0) || !(isset($_SESSION['loggedin']))){
    header("location: ../index.php");
    exit;
}
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

  <h2><a id="goback" href="../index.php">Kthehu ne Home</a></h2>
  <h1>Dashboard</h1>

<div>

        <h2>Lista e admineve</h2>
        <table class="content-table">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Beje user</th>
                    <th colspan="2"><a href="krijo-adminin.php">Krijo Adminin</a></th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $mapper = new userMapper();
                $adminList = $mapper->getAllAdmins();

                foreach ($adminList as $mapper) {
                ?>
                    <tr>
                        <td><?php echo $mapper['email']; ?></td>
                        <td><?php echo $mapper['username']; ?></td>
                        <td><?php echo $mapper['userpassword']; ?></td>
                        <td><a href="beje-user.php?id=<?php echo $mapper['userID'];?>">Beje User</a></td>
                        <td><a href="edito-adminin.php?id=<?php echo $mapper['userID'];?>">Edit</a></td>
                        <td><a href="fshij-adminin.php?id=<?php echo $mapper['userID'];?>">Fshij</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

<h2>Lista e te rejave</h2>
    <table class="content-table">
        <thead>
            <tr>
              <th>Titulli i lajmit</th>
              <th>Foto e lajmit</th>
              <th>Pershkrimi</th>
              <th colspan="2" ><a href="krijo-lajmin.php">Krijo Lajmin</a></th>
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
    
    
    <h2>Lista e arritjeve te reja</h2>
    <table class="content-table">
        <thead>
            <tr>
              <th>Foto e produkuktit</th>
              <th>Pershkrimi i produktit</th>
              <th colspan="2" ><a href="krijo-produktinn.php">Krijo Produktin Per Home</a></th>
            </tr>
        </thead>
        <tbody>
        <?php 
          $p = new homeController;
          $allProduktet = $p->readData();
          foreach($allProduktet as $produkti): ?>
        <tr>
          <td><?php echo $produkti['home_image'];?></td>
          <td><?php echo $produkti['home_emri'];?></td>
          <td><a href="edito-produktinn.php?id=<?php echo $produkti['Id'];?>">Edit</a></td>
          <td><a href="fshij-produktinn.php?id=<?php echo $produkti['Id'];?>">Delete</a></td>
        </tr>  
        <?php endforeach; ?>
      </tbody>
    </table>
    
    <h2>Lista e produkteve</h2>
    <table class="content-table">
        <thead>
            <tr>
              <th>Pershkrimi i produktit</th>
              <th>Foto e produktit</th>
              <th>Cmimi i produktit</th>
              <th colspan="2" ><a href="krijo-produktin.php">Krijo Produktin</a></th>
            </tr>
        </thead>
        <tbody>
        <?php 
          $p = new ProdController;
          $allProduktet = $p->readData();
          foreach($allProduktet as $produkti): ?>
        <tr>
          <td><?php echo $produkti['prod_pershkrimi'];?></td>
          <td><?php echo $produkti['prod_foto'];?></td>
          <td><?php echo $produkti['prod_cmimi'];?></td>
          <td><a href="edito-produktin.php?id=<?php echo $produkti['Id'];?>">Edit</a></td>
          <td><a href="fshij-produktin.php?id=<?php echo $produkti['Id'];?>">Delete</a></td>
        </tr>  
        <?php endforeach; ?>
      </tbody>
    </table>

    <h2>Lista e kontakteve</h2>
        <table class="content-table">
            <thead>
                <tr>
                    <th>Emri</th>
                    <th>Mbiemri</th>
                    <th>Mesazhi</th>
                    <th>Fshij</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $controller = new kontaktController();
                $kontaktList = $controller->getAllKontaktet();

                foreach ($kontaktList as $controllerr) {
                ?>
                    <tr>
                        <td><?php echo $controllerr['emri']; ?></td>
                        <td><?php echo $controllerr['mbiemri']; ?></td>
                        <td><?php echo $controllerr['mesazhi']; ?></td>
                        <td><a href="fshij-kontaktin.php?id=<?php echo $controllerr['Id'];?>">Fshij</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    <h2>Lista e perdorueseve</h2>
        <table class="content-table">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Beje Admin</th>
                    <th>Fshij</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $mapper = new userMapper();
                $userList = $mapper->getAllSimpleUsers();

                foreach ($userList as $user) {
                ?>
                    <tr>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['username']; ?></td>
                        <td><a href="beje-admin.php?id=<?php echo $user['userID'];?>">Beje Admin</a></td>
                        <td><a href="fshij-userin.php?id=<?php echo $user['userID'];?>">Fshij</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
</div>
</body>
<style>
*{
  font-family: Arial, Helvetica, sans-serif;
}

body{
  background-color:#bacbc1;
}
div{
  margin-top:50px;
}

h1{
  color:white;
  background-color: #13765b;
  padding:20px;
}

#goback{
    color: #262626;
    text-decoration:none;
}

.content-table {
  border-collapse: collapse;
  margin-top:20px;
  margin-bottom:40px;
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
.content-table th a{
  color:white;
}
.content-table th{
  background-color: #13765b;
  padding: 12px 15px;
}
.content-table td {
  padding: 12px 15px;
  background-color: #e9e8e4;
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