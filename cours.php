<?php 
include 'filelogic.php'; ?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <title>import course</title>
    <link rel="stylesheet" href="cours.css">
    
</head>
<body>
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
            <div class="page-inner">
              <h3>Importer cours</h3>
               <form  method="POST" enctype="multipart/form-data">
                     
                     <input type="file" name="myfile"><br>
                     <?php echo $msg;?>
                <button type="submit" name="save">upload</button>
                  </form>
                  
                
                   
                  
                 
                
             </form>
          </div>
        </div>
   </div>
    

</body>
