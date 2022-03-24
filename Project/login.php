<!-- Get connection  -->
<?php require_once('./php/db.php') ?>

<?php

// get the passsword and username from database
$selectLogin = "SELECT * FROM login";
$resultSet = mysqli_query($con, $selectLogin);

if (isset($_POST['submit'])) {

    if ($resultSet) {
        //values from database
        $result = mysqli_fetch_assoc($resultSet);
        $user = $result['username'];
        $pass = $result['password'];

        //values from form
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($user == $username && password_verify($password, $pass)) {
            echo "<script>window.location.href= './adminPanel.php'</script>";
            $username = "";
            $password = "";

            //create authentication
            // session_start();
            // $_SESSION['authorized'] = "true";
            // header('location:adminPanel.php');
            // header('location:changePassword.php');

            // start the session
            // this is first
            session_start();
            $_SESSION['authorized'] = "true";

        } else {
            echo '<script>window.alert("Wrong Password");</script>';
        }
    }
}



// print_r($result);

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


    <div class="loginMainCon" id="lgMainCon">
        <!-- logo -->
        <div class="logo">
            <img src="./Images/Icon/User.png" alt="">
        </div>


        <div class="formCon">
            <form action="./login.php" method="POST">
                <!-- form Heading -->
                <div class="loginInput">
                    <h1>Admin Panel</h1>
                </div>
                <p id="massage"></p>
                <!-- Username -->
                <div class="loginInput">
                    <input type="text" class="tbInput" id="username" name="username" placeholder="Username">
                </div>
                <!-- Password -->
                <div class="loginInput">
                    <input type="password" class="tbInput" id="password" name="password" placeholder="Password">
                </div>
                <!-- login -->
                <div class="loginInput">
                    <input type="submit" class="tbInput" id="login" value="Login" name="submit" onclick="btnClick()">
                </div>
            </form>
        </div>
    </div>

    <script>
        function btnClick() {
            console.log("Button was Clicked");
        }
    </script>




</body>

</html>

<!-- close the connection -->
<?php mysqli_close($con) ?>