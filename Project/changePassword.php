<!-- start the session -->
<!-- this is the Third -->
<?php
//check Athorized or not
// session_start();
// if (!$_SESSION['authorized']) {

//     header('location:login.php');
// }

session_start();
if (isset($_SESSION['authorized'])) {
    echo "<script>console.log('authorized')</script>";
} else {
    // echo "<script>window.location.href=('./login.php');</script>";
    header('location:login.php');
    echo "<script>console.log('Have an Error')</script>";
}

?>

<!-- Get Connection -->
<?php require_once('./php/db.php'); ?>

<?php
// <!-- ====================================================== -->
// <!-- Change password ++++++++++++++++++++++++++++++++++++++ -->
// <!-- ====================================================== -->

if (isset($_POST['submit'])) {

    echo "<script>console.log('Yes')</script>";

    //get user input
    $nUsername = $_POST['username'];
    $oPassword = $_POST['oPassword'];
    $nPassword = $_POST['nPassword'];
    $hashed = password_hash($nPassword, PASSWORD_DEFAULT);
    $cPassword = $_POST['cPassword'];

    //get database values
    $querySelect = "SELECT * FROM login";
    $result = mysqli_query($con, $querySelect);

    while ($record = mysqli_fetch_assoc($result)) {
        $ps = $record['password'];
    }

    // check condition
    //      --database ps and oPassword
    //      --nPassword and cPassword
    //      --username has 4 characters or more
    //      --new password has 4 characters or more
    if (password_verify($oPassword, $ps) and $nPassword == $cPassword and strlen($nUsername) >= 4 and strlen($nPassword) >= 4) {
        // echo "yes";

        //get today
        $today = date('Y-m-d');

        //upadte database
        $queryUpdate = "UPDATE login SET username='{$nUsername}' , password='{$hashed}' , date='{$today}' WHERE password='{$ps}'";

        $resultUpadte = mysqli_query($con, $queryUpdate);

        if ($resultUpadte) {
            // echo "Update Successfull";
            echo "<script>alert('Update Successfull!!')</script>";
            echo "<script>window.location.href='./logout.php'</script>";
        } else {
            echo "<script>alert('Please check your information again!!')</script>";
            // echo "Error";
        }
    } else {
        echo "<script>alert('Please check your information again!!')</script>";
        // echo "no";
    }

    // echo $un.'<br>'.$ps;


} else {
    echo "<script>console.log('No')</script>";
    // do nothing
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ovin Gases</title>
    <link rel="icon" href="./Images/Icon/OvinLogo.ico">

    <link rel="stylesheet" href="./Css/admin.css">

</head>

<body>

    <div class="loginMainCon" id="cpMainCon">
        <?php

        // echo $nUsername;
        // echo $oPassword;
        // echo $nPassword;
        // echo $cPassword;
        ?>

        <!-- logo -->
        <div class="logo" id="cpLogo">
            <img src="./Images/Icon/changePassword.png" alt="">
        </div>


        <div class="formCon" id="cpFormCon">
            <form action="./changePassword.php" method="POST">
                <!-- form Heading -->
                <div class="loginInput">
                    <h1>Change Password</h1>
                </div>
                <!-- Username -->
                <div class="loginInput">
                    <input type="text" class="tbInput" id="username" name="username" placeholder="Username">
                </div>
                <!--old Password -->
                <div class="loginInput">
                    <input type="password" class="tbInput" id="password" name="oPassword" placeholder=" Old Password">
                </div>
                <!-- Password -->
                <div class="loginInput">
                    <input type="password" class="tbInput" id="password" name="nPassword" placeholder="New Password">
                </div>
                <!-- Confirm Password -->
                <div class="loginInput">
                    <input type="password" class="tbInput" id="password" name="cPassword" placeholder=" Confirm Password">
                </div>
                <!-- login -->
                <div class="loginInput">
                    <input type="submit" class="tbInput" id="login" value="Change" name="submit">
                </div>
            </form>
        </div>
    </div>


</body>


</html>

<!-- close the connection -->
<?php mysqli_close($con); ?>