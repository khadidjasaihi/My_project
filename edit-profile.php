<?php
 @include 'conn.php';
 $id = $_POST['edit'];
 if(isset($_POST['updateprofile'])){
   $nom = $_POST['nom'];
   $fac = $_POST['fac'];
   $dep = $_POST['dep'];
   $tel= $_POST['tel'];
   $prop = $_POST['about'];
   $update_data = "UPDATE `ens` SET `nom`='$nom',`fac`='$fac',`dep`='$dep',`propos`='$prop',`tel`='$tel' WHERE `id`='$id'";
   $upload = mysqli_query($sql, $update_data);
 };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page </title>
    <link rel="stylesheet" href="edit-profile.css">
</head>
<body>
  <?php
    if(isset($message)){
    foreach($message as $message){
     echo '<span class="message">'.$message.'</span>';
    }
   }
  ?>
 <div class="logout">
     <a href="logout.html"><img src="./assets/img/logout.png" alt="Logout icon"></a>
    </div>
    <div class="container">
        <div class="sidebar">
            <div class="user">
                <img src="./assets/img/user .png" alt="user profile picture" class="img">
            </div>
            <div class="action">
                <center>
                    <a href="profil.php" class="edit-btn">Profile</a>
                </center>
            </div>
        </div>
    <div class="page">
        <div class="header">
            <img src="./assets/img/user .png" alt="LOGO">
        </div>
        <?php
      
      $select = mysqli_query($sql, "SELECT * FROM ens WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

       ?>
        <div class="page-inner">
            <h3>Modifier Profile</h3>
            <form action="edit-profile.php" method="POST" class="form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">NOM :</label>
                    <input type="text" value= "<?php echo $row['nom']; ?>" id="title" name="nom">
                </div>
                <div class="form-group">
                    <label for="title">FACULTE :</label>ح
                    <input type="text" value= "<?php echo $row['fac']; ?>" id="title" name="fac">
                </div>
                <div class="form-group">
                    <label for="title">DEPARTEMENT :</label>
                    <input type="text" value= "<?php echo $row['dep']; ?>" id="title" name="dep">
                </div>
                <div class="form-group">
                    <label for="skills">TELEFONE  :</label>
                    <input type="text" id="skills" value="<?php echo $row['tel']; ?>" name="tel">
                </div>
                <div class="form-group">
                    <label for="email">NOUVEAU MOT DE PASS :</label>
                    <input type="email" id="email" value="" name="nmp">
                </div>
                <div class="form-group">
                    <label for="email">CONFIRMER MOT DE PASS :</label>
                    <input type="email" id="email" value="" name="cmp">
                </div>
                <div class="form-group">
                <input type="hidden" id="<?php  $row['id']; ?>" name="id" value="">
                    
                </div>
                <div class="form-group">
                    <label for="about">A PROPOS :</label>
                    <textarea name="about" id="about" cols="30" rows="10"><?php echo $row['propos']; ?></textarea>
                </div>
          </form>
   
                
      <input type="submit" value="updateprofile" name="update_profile" class="btn">
            </form>
        </div>
    </div>
    <?php }; ?> 
</div>
