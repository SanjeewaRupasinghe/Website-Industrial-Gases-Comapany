<!-- start the session -->
<!-- this is the second -->
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

<!-- get connection -->
<?php require_once('./php/db.php') ?>

<!-- create suggestion table -->
<?php
//get today
$today = date('Y-m-d');

//get username for set user
$sqlUsername = "SELECT username FROM login";
$u = mysqli_query($con, $sqlUsername);
$user = mysqli_fetch_assoc($u);
$username = $user['username'];

$fd = '2021-01-01';
$td = "'{$today}'";

if (isset($_POST['submit'])) {

    //<!-- ============================================================ -->
    //<!-- filter By Date +++++++++++++++++++++++++++++++++++++++++++++ -->
    //<!-- ============================================================ -->
    //get from and to date as a array
    $dt = $_POST['fDate'];

    //2021-01-01 is default from date
    //today is default to date (it's get set the max date in input => date)

    $fd = ($dt[0] != null ? "'" . $dt[0] . "'" : '2021-01-01');
    $td = ($dt[1] != null ? "'" . $dt[1] . "'" : "'{$today}'");

    // echo $fd;
    // echo $td;

} else {
}

//<!-- ============================================================ -->
//<!-- get suggestion table +++++++++++++++++++++++++++++++++++++++ -->
//<!-- ============================================================ -->
$querySelect = "SELECT * FROM `suggestion` WHERE date>={$fd} AND date<={$td} ORDER BY date DESC";
$resultSet = mysqli_query($con, $querySelect);

// get number of records for set number of found
$nRows = mysqli_num_rows($resultSet);


if ($resultSet) {

    // create table
    $table = "<table>";
    $table .= "<tr><th>Suggestion Index</th><th>Date</th><th>Name</th><th>Company Name</th><th id='thEmail'>Email</th><th>Contact</th><th id='thSuggestion'>Suggestion Details</th></tr>";

    // add record for table
    while ($record = mysqli_fetch_assoc($resultSet)) {
        // print_r($record)."<br>";
        // echo "<hr>";

        $table .= "<tr>";
        $table .= "<td>" . $record['sug_id'] . "</td>";
        $table .= "<td>" . $record['date'] . "</td>";
        $table .= "<td>" . $record['name'] . "</td>";
        $table .= "<td>" . $record['company_name'] . "</td>";
        $table .= "<td class='tdEmail'>" . $record['email'] . "</td>";
        $table .= "<td>" . $record['contact'] . "</td>";
        $table .= "<td>" . $record['suggestion_details'] . "</td>";
        $table .= "</tr>";
    }

    $table .= "</table>";
    // end of table
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

<body id="adminPanelBody">

    <!-- ============================================================ -->
    <!-- header Section +++++++++++++++++++++++++++++++++++++++++++++ -->
    <!-- ============================================================ -->
    <div class="header" id="header">
        <div class="ovinlogo" id="ovinlogo">
            <img src="./Images/Icon/Ovin.PNG" alt="Ovin Gases (Pvt) Ltd ">
        </div>
        <div class="middle" id="middle">
            <h1>Ovin Gases (Pvt) Ltd</h1>
            <h2>Admin Panel</h2>
        </div>
        <div class="user" id="user">
            <div class="userIcon">
                <div class="userItem">
                    <a href="./changePassword.php">
                        <img src="./Images/Icon/profile.png" alt="Profile Icon">
                        <p id="userName"><?php echo $username ?></p>
                    </a>
                </div>
                <div class="userItem">
                    <a href="./logout.php">Log out</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================ -->
    <!-- body section +++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!-- ============================================================ -->

    <div class="bodySec">
        <form action="./adminPanel.php" method="POST">
            <div class="filter" id="filter">
                <div class="filterItem" id="from">
                    <label>From</label>
                    <input type="date" name="fDate[]" id="fDate" class="date" onchange="tdMinSet()" max=<?php echo '"' . $today . '"'; ?>>
                </div>
                <div class="filterItem" id="to">
                    <label>To</label>
                    <input type="date" name="fDate[]" id="tDate" onchange="fdMaxSet()" class="date" max=<?php echo '"' . $today . '"'; ?>>
                </div>
                <!-- <div class="filterItem" id="c1">
                    <input type="checkBox" name="filter[]" value="sug_id" id="sugId">
                    <label for="">Suggestion Index</label>
                </div>
                <div class="filterItem" id="c2">
                    <input type="checkBox" name="filter[]" value="date" id="date">
                    <label for="">Date</label>
                </div>
                <div class="filterItem" id="c3">
                    <input type="checkBox" name="filter[]" value="name" id="name">
                    <label for="">Name</label>
                </div>
                <div class="filterItem" id="c4">
                    <input type="checkBox" name="filter[]" value="company_name" id="comName">
                    <label for="">Company Name</label>
                </div>
                <div class="filterItem" id="c5">
                    <input type="checkBox" name="filter[]" value="email" id="email">
                    <label for="">Email</label>
                </div>
                <div class="filterItem" id="c6">
                    <input type="checkBox" name="filter[]" value="contact" id="contact">
                    <label for="">Contact</label>
                </div>
                <div class="filterItem" id="c7">
                    <input type="checkBox" name="filter[]" value="suggestion_details" id="suggestion">
                    <label for="">Suggestion</label>
                </div> -->
                <div class="filterItem" id="sbmit">
                    <input type="submit" name="submit" value="Filter" id="submit">
                </div>
                <div class="filterItem" id="itemFound">
                    <label for=""><?php echo $nRows . " Records found!!"; ?></label>
                </div>
            </div>
        </form>
        <!-- end of filter -->

        <div class="suggSec">
            <?php echo $table; ?>
        </div>




    </div>

    <?php

    // echo $th;

    ?>


    <script>
        function tdMinSet() {
            // console.log("Chabge Function");
            var minDate = document.getElementById('fDate').value;
            console.log(minDate);
            document.getElementById('tDate').setAttribute('min', minDate);
        }

        function fdMaxSet() {
            // console.log("Chabge Function");
            var maxDate = document.getElementById('tDate').value;
            console.log(maxDate);
            document.getElementById('tDate').setAttribute('max', maxDate);
        }
    </script>


</body>

</html>

<!-- close the connection -->
<?php mysqli_close($con) ?>