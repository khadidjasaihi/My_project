<?php
echo"hiiiiiiiiii"
/*include 'conn.php';
 session_start();
 $id = $_POST['edit'];
 //$email = $_POST['email'];
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <title>PROFILE PAGE</title>
    <link rel="stylesheet" href="profil.css">
    <script src="script.js" defer></script>
</head>
<body>
    
    <div class="logout">
        <img src="./assets/img/logout.png" alt="Logout icon"></a>
    </div>
    <?php 

        $checkUser = "SELECT * FROM `ens` WHERE `email` = '$email'";
        $result = mysqli_query($sql, $checkUser);
        $counUser = mysqli_num_rows($result) > 0;
        if(!$counUser){
            echo "<script>alert('Please login first')</script>";
            echo "<script>window.location.assign('./')</script>";
        }

        if($counUser){
            while($row = mysqli_fetch_assoc($result)){
        
        ?>
<div class="container">
    <div class="sidebar">
        <div class="user">
            <img src="./assets/img/user .png" alt="user profile picture" class="img">
            <h3><?php echo $row['nom'] ?></h3>
            <P>Professeur</P>
        </div>
        <div class="fac">
            <p class="title">Faculté</p>
            <p class="nom"><?php echo $row['fac'] ?> </p>
            
        </div>
        <div class="dep">
            <p class="title">Département</p>
            <p class="nom"><?php echo $row['dep'] ?> </p>

        </div>
        <div class="action">
            <center>
            <a href="edit-profile.php?edit=" class="btn"> <i class="fas fa-edit"></i> Modifier </a>
            </center>
        </div>
    </div>
    <div class="page"> 
        <div class="containerr">
            <div class="progress-container">
                <div class="progress" id="progress"></div>
                <div class="circle active">1</div>
                <div class="circle ">2</div>
                <div class="circle ">3</div>
                <div class="circle ">4</div>
            </div>
        </div> 
        <div class="header"> 
           <img src="./assets/img/user .png" alt="LOGO">
        </div>
        <div class="page-inner">
            <div class="about">
                <h3>A Propos</h3>
                <p>  <?php echo $row['propos'] ?>.</p>
            </div>
            <div class="cours">
                <h3> Les polycopies de cours</h3>
                
                    <a href="cours.php" class="btn">import</a>
                
            </div>
            <div class="contact">
                <h3>Contact</h3>
                <a href="mailto:<?php echo $row['email'];?>"><?php echo $row['email'];?></a> <br /> <br />
                <a class="tel"><?php echo $row['tel'];?></a>
            </div>
        </div>
    </div>
</div>
<?php 
            }
        }


    ?>
</body>
</html>
