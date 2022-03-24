<?php require_once('./php/db.php') ?>

<?php

//  ============================================================= 
//  suggetion input to database +++++++++++++++++++++++++++++++++
//  =============================================================


if (isset($_POST['submit'])) {

    //to get suggestion id
    $r = rand(100, 999);
    $d = date('dmy');


    $sugId = $d . $r;
    $date = date('Y-m-d');
    $sName = $_POST['sugName'];
    $cName = $_POST['comName'];
    $emailAdd = $_POST['email'];
    $contactNum = $_POST['contact'];
    $sugg = $_POST['suggection'];


    $queryInsert = "INSERT INTO suggestion (sug_id, date, name, company_name, email, contact, suggestion_details) VALUES ('{$sugId}}', '{$date}', '{$sName}', '{$cName}', '{$emailAdd}', '{$contactNum}', '{$sugg}')";

    $result = mysqli_query($con, $queryInsert);

    if ($result) {
        echo '<script>alert("Suggestion Added")</script>';
        $result = false;
    } else {
        echo '<script>alert("Erorr")</script>';
        // echo "Not Added";
    }
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Meta Tags -->
    <meta name="keyword" content="Ovin, SriLanka, Gases, Industrial, oxygen, DisolvedAcetylene, CarbonDioxide, Argon, Nitrogen, MedicalOxygen, o2, DA, co2, ar, n2, mox">
    <meta name="discription" content="Ovin Gases (Pvt) Ltd is a Private Limited Liability Company and acts as an independent Manufacturer and Distributor of all type of Industrial Gases and other special gases. During this period, the company has maintained a reputation in introducing the latest technological advancements and acting as a System Integrator. We at Ovin Gases, maintain a mutually beneficial business relationship with reputed organizations of the private and public sector in Sri Lanka as regards all kind of Industrial Gas related solutions. Specialized and customized services are offered to all our clients as well as meeting their requirements and keeping abreast with the industrial norms and standards. Our “Customer Oriented” team is specifically trained in all technical aspects as well as Customer Orientation, keeping with the industry">



    <title>Ovin Gases</title>
    <link rel="icon" href="./Images/Icon/OvinLogo.ico">


    <link rel="stylesheet" href="Css/style.css">

    <style>
        @keyframes shaker {
            0% {
                transform: translateX(5px);

            }

            25% {
                transform: translateX(0);
            }

            50% {
                transform: translateX(-5px);
            }

            75% {
                transform: translateX(0);
            }

        }
    </style>

</head>

<body>

    <!-- ============================================================ -->
    <!-- header Section +++++++++++++++++++++++++++++++++++++++++++++ -->
    <!-- ============================================================ -->
    <section id="header">
        <div class="header container">
            <div class="nav-bar">
                <div class="brand">
                    <a href="#hero">
                        <div class="brand">
                            <h1><span>ovin</span> gases</h1>
                            <div>
                                <h2>name for <span>Industrial Gases</span> </h2>
                            </div>
                    </a>
                </div>
            </div>
            <div class="nav-list">
                <div class="hamburger">
                    <div class="bar">
                    </div>
                </div>
                <ul>
                    <li><a href="./index.html#hero" data-after="Home">Home</a></li>
                    <li><a href="./index.html#product" data-after="Product">Product</a></li>
                    <li><a href="./index.html#about" data-after="About us">About us</a></li>
                    <li><a href="./index.html#contact" data-after="contact">contact</a></li>
                </ul>
            </div>
        </div>
        </div>
    </section>

    <!-- ============================================================ -->
    <!-- hero Section +++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!-- ============================================================ -->
    <div id="hero">
        <div class="hero container pp_Hero" id="SuggHero">
            <!-- pp_hero=production page header -->
            <h1>Manufacturer of the <span></span>
                <h1>
                    <h1>Industrial gases <span></span></h1>
                    <h1>in Sri Lanka <span></span></h1>
        </div>
    </div>

    <!-- ============================================================ -->
    <!-- content Section ++++++++++++++++++++++++++++++++++++++++++++ -->
    <!-- ============================================================ -->
    <section id="content">
        <div class="content">
            <div class="secHeader">
                <h1 class="section-title">Add Your<span> Suggection</span></h1>
            </div>
            <div class="suggestion-form">
                <form action="./Suggection.php" method="POST">
                    <!-- Name  -->
                    <div id="inputItem">
                        <label class="formLabel">Name</label><br>
                        <input type="text" id="sugName" name="sugName" class="inputField" placeholder="John Smith" onfocusout="valName()"><br>
                    </div>
                    <!-- Company Name  -->
                    <div id="inputItem">
                        <label class="formLabel">Company Name</label><br>
                        <input type="text" id="comName" name="comName" class="inputField" placeholder="John Smith (Pvt) Ltd" onfocusout="valCompany()"><br>
                    </div>
                    <!-- Email  -->
                    <div id="inputItem">
                        <label class="formLabel">Email Address</label><br>
                        <input type="email" id="email" name="email" class="inputField" placeholder="john@example.com" onfocusout="valEmail()"><br>
                    </div>
                    <!-- Contact  -->
                    <div id="inputItem">
                        <label class="formLabel">Contact Number</label><br>
                        <input type="tel" id="contact" name="contact" class="inputField" placeholder="+947XXXXXXXX" onfocusout="valContact()"><br>
                    </div>
                    <!-- Suggestion  -->
                    <div id="inputItem"><br>
                        <label class="formLabel">Suggestion</label><br>
                        <textarea name="suggection" id="suggection" cols="30" rows="10" class="inputField" placeholder="Type Here..." onfocusout="valSuggection()"></textarea><br>
                    </div>
                    <div id="inputItem">
                        <!-- Reset  -->
                        <input type="reset" name="reset" id="reset" class="btn" onclick="rst()">
                        <!-- Submit  -->
                        <input type="Submit" name="submit" id="submit" class="btn" disabled>
                    </div>


                </form>
            </div>
        </div>
    </section>

    <!-- ============================================================ -->
    <!-- footer Section +++++++++++++++++++++++++++++++++++++++++++++ -->
    <!-- ============================================================ -->
    <section id="footer">
        <div class="footer container">
            <div class="brand">
                <h1><span>ovin</span> gases</h1>
                <div>
                    <h2>name for <span>Industrial Gases</span> </h2>
                </div>
            </div>
            <div class="social-icon">
                <!-- whatsapp -->
                <div class="social-item">
                    <a href="https://www.whatsapp.com/"><img src="Images/Icon/whats1.png" alt="WhatsApp Logo" alt="" id="socialWhats" onmouseover="WhatsMouseOver()" onmouseout="WhatsMouseOut()"></a>
                </div>
                <!-- facebook -->
                <div class="social-item">
                    <a href="https://www.facebook.com/"><img src="Images/Icon/fb1.png" alt="Facebook Logo" id="socialFb" onmouseover="FbMouseOver()" onmouseout="FbMouseOut()"></a>
                </div>
                <!-- linked in -->
                <div class="social-item">
                    <a href="https://lk.linkedin.com/"><img src="Images/Icon/lnk1.png" alt="LinkedIn Logo" id="socialLnk" onmouseover="LnkMouseOver()" onmouseout="LnkMouseOut()"></a>
                </div>
                <!-- twitter -->
                <div class="social-item">
                    <a href="https://twitter.com/"><img src="Images/Icon/twtr1.png" alt="Twitter Logo" id="socialTwtr" onmouseover="TwtrMouseOver()" onmouseout="TwtrMouseOut()"></a>
                </div>
            </div>
            <label for="">Copyright © 2021 Sanjeewa Rupasinghe. All rights reserved</label>
        </div>
    </section>

    <script src="Js/script.js"></script>

    <script>
        /* ============================================================= */
        /* Check Validate js +++++++++++++++++++++++++++++++++++++++++++ */
        /* ============================================================= */
        // name
        var idName;
        var bName, bCompany, bEmail, bContact, bSuggesction = false;
        //bName =bool Name ==>This is for last validation boolean values

        function valName() {
            var sName = document.getElementById('sugName').value;
            sName = sName.trim();
            idName = "sugName";

            if (sName.length >= 3) {
                valid();
                bName = true;

            } else {
                shake()
                console.log('name shake');
                notValid();
                bName = false;
                sName = "";
            }

            sbmt();
            console.log(sName);
        }


        //company name
        function valCompany() {
            var cName = document.getElementById('comName').value;
            cName = cName.trim();
            idName = "comName";

            if (cName.length >= 3) {
                valid();
                bCompany = true;

            } else {
                shake()
                notValid();
                bCompany = false;
                cName = "";
            }

            sbmt();
            console.log(cName);

        }


        //email
        function valEmail() {
            var emailAdd = document.getElementById('email').value;
            emailAdd = emailAdd.toLowerCase();
            idName = "email";

            var emailRegEx = new RegExp(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/);

            if (emailRegEx.test(emailAdd) == true) {
                valid();
                bEmail = true;

            } else {
                shake()
                notValid();
                bEmail = false;
                emailAdd = "";
            }

            sbmt();
            console.log(emailAdd);

        }
        //contact
        function valContact() {
            var contactNum = document.getElementById('contact').value;
            idName = "contact";

            var contactRegEx = new RegExp(/^(\+94|0)(7){1}[0-2|4-8]{1}[0-9]{7}$/);

            if (contactRegEx.test(contactNum) == true) {
                valid();
                bContact = true;

            } else {
                shake()
                notValid();
                bContact = false;
                contactNum = "";
            }

            sbmt();
            console.log(contactNum);

        }

        //suggection
        function valSuggection() {
            var sugg = document.getElementById('suggection').value;
            // sugg = cName.trim();
            idName = "suggection";

            if (sugg.length >= 4) {
                valid();
                bSuggesction = true;

            } else {
                shake()
                notValid();
                bSuggesction = false;
                sugg = "";
            }

            sbmt();
            console.log(sugg);

        }


        //if not valid call the this function
        function notValid() {
            document.getElementById(idName).style.borderColor = "Crimson";
            console.log('Not Valid');
        }

        //if not valid call the this function
        function shake() {
            document.getElementById(idName).style.animation = 'shaker 0.05s ease 7';
            console.log("shake");

        }

        //this funtion call input field is valid
        function valid() {
            document.getElementById(idName).style.borderColor = "#00ffdd";
            console.log('Valid');
        }

        //active submit button
        function sbmt() {
            if (bName == true && bCompany == true && bEmail == true && bContact == true && bSuggesction == true) {
                document.getElementById('submit').disabled = false;
                console.log("Submit enable");

            } else {
                document.getElementById('submit').disabled = true;
                console.log("Submit disable");
            }
        }


        //reset function
        //for change border Color
        function rst() {
            document.getElementById('sugName').style.borderColor = "#00ffdd";
            document.getElementById('comName').style.borderColor = "#00ffdd";
            // document.getElementById('product').style.borderColor = "#00ffdd";
            document.getElementById('email').style.borderColor = "#00ffdd";
            document.getElementById('contact').style.borderColor = "#00ffdd";
            document.getElementById('suggection').style.borderColor = "#00ffdd";

            console.log("reset Button");

        }
    </script>


</body>

</html>






<!-- close the connection -->
<?php mysqli_close($con) ?>