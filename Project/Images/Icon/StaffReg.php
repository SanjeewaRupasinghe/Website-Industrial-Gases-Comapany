

<?php //include('includes/header/top.php'); ?>
<?php //include('includes/header/staffStyle.html'); ?>
<?php //include('includes/header/bottom.html'); ?>



<div class="headStf"></div>

<section class="staff">
	<h2 id="title">Staff Registration Form</h2>
	<form class="regForm" action="StaffReg.php" method ="post">
  <h3 name="info" id="info"></h3>
		<table class="regTable">
      <tr><td>Full Name</td><td><input type="text" placeholder="Ex.John Silva" name="fulName" /></td><td></td></tr>
      <tr><td>NIC</td><td><input id="nic" type="text" placeholder="Ex.961234567v" onfocusout="idCheck()" name="idNm"/></td><td><p class="lable" id="idLbl" name="idLbl"></p></td></tr>
      <tr><td>Contact Number</td><td><input id="cotNum" type="text" placeholder="Ex.0712345678" onfocusout="contactNuCheck()" name="conNu"/></td><td><p class="lable" id="cntLbl" name="cntLbl"></p></td></tr>
      <tr><td>Address</td><td><input type="textarea"  placeholder="Address" name="addrs"/></td><td></td></tr>
      <tr><td>Gender</td><td>
        <input type="radio" name="gender" value="m" checked="checked">Male</input> 
        <input type="radio" name="gender" value="f">Female</input>
        </td><td></td></tr>
      <tr><td>Email Address</td><td><input type="email" placeholder="Ex. example@abc.com" name="mail"/></td><td></td></tr>
      <tr><td>New Passwod</td><td><input id="newpw" type="password"  placeholder="New Passwod" name="pw1"/></td><td></td></tr>
      <tr><td>Confirm Password</td><td><input id="cnfpw" type="password" placeholder="Confirm Password" onfocusout="passwor()" name="pw"/></td><td><p class="lable" id="pwLbl" name="pwLbl"></p></td></tr>
      <tr><td></td><td><center><button name ="submit" id="btnSubmit" onclick="submitButten()">Register</button></center></td></tr>
        
      
        
        
        
			
			
		</table>
    <script>
      function idCheck(){
        var nic = document.getElementById("nic").value;
        if(nic.length<=10)
        {
          var check = new RegExp(/^[0-9]{9}(v|V|x|X)$/);
          if(check.test(nic)==false)
          {document.getElementById("idLbl").innerHTML="Wrong NIC number!";}
          else
          {document.getElementById("idLbl").innerHTML="";}
        }
        else{
          var check = new RegExp(/^(19|20|21)[0-9]{10}$/);
          if(check.test(nic)==false)
          {document.getElementById("idLbl").innerHTML="Wrong NIC number!";}
          else
          {document.getElementById("idLbl").innerHTML="";}
        }
      }

      function contactNuCheck(){
        var contact = document.getElementById("cotNum").value;
        
          var check = new RegExp(/^(\+94|0)[0-9]{9}$/);
          if(check.test(contact)==false)
          {document.getElementById("cntLbl").innerHTML="Wrong Contact Number!";}
          else
          {document.getElementById("cntLbl").innerHTML="";}
        
      }
      function passwor(){
        var new1 = document.getElementById("newpw").value;
        var newCnf = document.getElementById("cnfpw").value;
        
          if(new1!=newCnf)
          {
          document.getElementById("pwLbl").innerHTML="Password not match";
          }
          else{ document.getElementById("pwLbl").innerHTML="";}
        
      }

    </script>
	</form>
</section>

<?php

            if(isset($_POST['submit']))
            {
                $nic=$_POST['idNm'];
                $fname=$_POST['fulName'];
                $contact=$_POST['conNu'];
                $address=$_POST['addrs'];
                $gender=$_POST['gender'];
                $mail=$_POST['mail'];
                $pw1=$_POST['pw1'];
                $pw=$_POST['pw'];
                $cntLbl ="<script>document.write(document.getElementById('cntLbl').innerHTML);</script>"."test";
                $idLbl ='<script>document.write(document.getElementById("idLbl").innerHTML);</script>';
                $pwLbl ='<script>document.write(document.getElementById("pwLbl").innerHTML);</script>';
               //echo $cntLbl. " ".$pwLbl . " ". $idLbl;
                
              if(strlen($nic) !=0 && strlen($fname) !=0 && strlen($contact) !=0 && strlen($address) !=0 && 	strlen($gender)!=0 && strlen($mail)!=0 &&	strlen($pw) !=0 && $pw==$pw1) // && strlen($pwLbl== 0) && strlen($idLbl== 0) && strlen($cntLbl== 0)
              {
                
                $query ="INSERT INTO `staff`(`nic`, `fullNmae`, `contact`, `address`, `gender`, `email`, `pw`) VALUES ('{$nic}','{$fname}','{$contact}','{$address}','{$gender}','{$mail}','{$pw}')";

                  try {
                   // echo $query;
                    mysqli_query($connection,$query);
                  echo "<script>document.gerElementById('info').innerHTML='Successful Recorded!';</script>"; 
                  }
                  catch(Exception $e) {
                   echo "<script>document.gerElementById('info').innerHTML='Fail! because:  '+ <? php $e->getMessage();?>;</script>";
                  
                  }
          
              }
              else{
                echo "<script>document.gerElementById('info').innerHTML='Fill the whole form and Try again!';</script>";
              }
            }
          ?>
 <?php include('includes/footer.php'); ?>