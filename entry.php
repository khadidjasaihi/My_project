<?php
$msg = "";
include('conn.php');
if(isset($_POST['Login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // validate form

    if($email == "" || $password == ""){
        $msg = "<p style='text-align: center; color: red'>Invalid parameters</p>";
        header('Location: /');
    }


    // check if user exist in the database
    $checkUser ="SELECT * FROM `ens` WHERE `email` = '$email'AND  `mpass`='$password'";
    $result = mysqli_query($sql, $checkUser);
    $counUser = mysqli_num_rows($result) > 0;
    
     if(!$counUser){
        $msg = "<p style='text-align: center; color: red'>Invalid email address or password</p>";
    }else{
        header('Location: profil.php');
    }
    
    // if the user does exist
    if($counUser){
        while($row = mysqli_fetch_assoc($result)){
            $hash = $row['mpass'];


            if(password_verify($password,$hash)){
                session_start();
                $_SESSION['ens'] = $email;

                header('Location: profil.php');
            }else {
                $msg = "<p style='text-align: center; color: red'>Invalid login credentials</p>";
            }
        }
    }
}


?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" referrerpolicy="no-referrer" />-->
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="wrapper">
           
            
            <div class="form-container">
                <h3>LOGIN HERE</h3>
                <?php echo $msg;?>
                <form action="entry.php" class="form"  method="POST" >
                    <form action="" class="form">
                        <input type="text" require name="email" placeholder="Email address">
                        <input type="password" require name="password" placeholder="Password">
                        <button type="submit" name="Login">LOGIN &nbsp; 
                        <input type="hidden" id="" name="custId" value="3487">
                        <span class="fa fa-paper-plane"></span>
                        </button>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>
