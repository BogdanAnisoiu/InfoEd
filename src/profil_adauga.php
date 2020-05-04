<?php
include("config.php");
$er_lungime = "";
$er_identice= "";
$er_email="";
if(isset($_POST['cmd_save']))
{
	$ok=1;

	$email=mysqli_real_escape_string($con,trim($_POST['txtemail']));
	$sql="select email from utilizatori where email='".$email."'";
	$rezultat=mysqli_query($con,$sql);
	$cate=mysqli_num_rows($rezultat);
	if($cate==1)
	{
		$er_email = "Adresa de email deja exista! Folosti Login->Parola uitata";
		$ok=0;	
	}
	$parola =mysqli_real_escape_string($con,trim($_POST['txtparola']));
	if(strlen($parola)<6 || strlen($parola)>20)
	{
		$er_lungime = "Parola trebuie sa aiba intre 6 si 20 de caractere!";
		$ok=0;
	}
	$parola1=mysqli_real_escape_string($con,trim($_POST['txtparola1']));
	if($parola != $parola1)
	{
		$er_identice = "Cele doua parole introduse nu coincid!";
		$ok=0;
	}
if($ok==1)
{
	$parola=md5($parola);
	$nume=mysqli_real_escape_string ($con,trim($_POST['txtnume']));
	$prenume=mysqli_real_escape_string ($con,trim($_POST['txtprenume']));
	$sql="insert into utilizatori(nume,prenume,email,parola) values('".$nume."','".$prenume."','".$email."','".$parola."')";
	mysqli_query($con,$sql);
	header("location: index.php");
}
		
}


?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Info Ed</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap441/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/stil.css">  
  <script src="ajax_jquery_341/jquery.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap441/js/bootstrap.min.js"></script>

</head>
<body>
		<div class="modal-dialog" role="document">
			<div style="border-style: solid;
 	border-width: 3px;
	border-color: #bfbfbf; /*#0084ff;*/
	border-radius: 7px;
	box-shadow: 10px 10px 10px 0px #66b5ff;" class="modal-content bordura">
				<div style="background-color:#4da9ff;" class="modal-header fond-antet-subsol">
					<h4 class="modal-title"><i class="fa fa-user"></i>&nbsp;&nbsp;Cont nou</h4>
				</div>

				<form method="post">
				<div style="background-color:#cce6ff;" class="modal-body fond-body">
					<div class="form-group ">
					  <label class="eticheta_st" for="txtnume">Nume(*)</label>
					  <input style="padding: 9px;
	border: solid 1px #0077B0;
	outline: 0;
	background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #cce6ff), to(#FFFFFF));
	background: moz-linear-gradient(top, #FFFFFF, #005ce6 1px, #FFFFFF 25px);
	box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;
	moz-box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;
	display: block;
width: 95%;
min-height: 15px;
font-family:Calibri;
font-size:11pt;
color:#005ce6;
text-align:left;
	webkit-box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;" type="text" class="text_litere gradient" name="txtnume" placeholder="numele de familie" required />
					 </div>
					<div class="form-group ">
					  <label class="eticheta_st" for="txtprenume">Prenume(*)</label>
					  <input style="padding: 9px;
	border: solid 1px #0077B0;
	outline: 0;
	background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #cce6ff), to(#FFFFFF));
	background: moz-linear-gradient(top, #FFFFFF, #005ce6 1px, #FFFFFF 25px);
	box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;
	moz-box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;
	webkit-box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;
	display: block;
width: 95%;
min-height: 15px;
font-family:Calibri;
font-size:11pt;
color:#005ce6;
text-align:left;" type="text" class="text_litere gradient" name="txtprenume" placeholder="prenumele" required />
					 </div>
					<div class="form-group ">
					  <label class="eticheta_st" for="txtemail">Adresa de e-mail(*)</label>
					  <input style="padding: 9px;
	border: solid 1px #0077B0;
	outline: 0;
	background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #cce6ff), to(#FFFFFF));
	background: moz-linear-gradient(top, #FFFFFF, #005ce6 1px, #FFFFFF 25px);
	box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;
	moz-box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;
	webkit-box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;
	display: block;
width: 95%;
min-height: 15px;
font-family:Calibri;
font-size:11pt;
color:#005ce6;
text-align:left;" type="email" class="text_litere gradient" name="txtemail" placeholder="you@yourdomain.com" required />
					  <span class="eroare"><?php echo $er_email; ?></span>
					 </div>
					<div class="form-group ">
					  <label class="eticheta_st" for="txtparola">Parola(*)</label>
					  <input style="padding: 9px;
	border: solid 1px #0077B0;
	outline: 0;
	background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #cce6ff), to(#FFFFFF));
	background: moz-linear-gradient(top, #FFFFFF, #005ce6 1px, #FFFFFF 25px);
	box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;
	moz-box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;
	webkit-box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;
	display: block;
width: 95%;
min-height: 15px;
font-family:Calibri;
font-size:11pt;
color:#005ce6;
text-align:left;" id="parola" type="password" class="text_litere gradient" name="txtparola" placeholder="intre 6 si 20 de caractere" aria-describedby="explicatie" required />
					  <span toggle="#parola" class="fa fa-fw fa-eye field-icon toggle-password"></span>
						<small id="explicatie" class="form-text text-muted">
						  Parola trebuie sa aiba intre 6 si 20 de caractere
						</small>				  
						<span class="eroare"><?php echo $er_lungime; ?></span>
					 </div>
					<div class="form-group ">
					  	<label class="eticheta_st" for="txtparola1">Confirmare parola(*)</label>
					  	<input style="padding: 9px;
border: solid 1px #0077B0;
	outline: 0;
	background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #cce6ff), to(#FFFFFF));
	background: moz-linear-gradient(top, #FFFFFF, #005ce6 1px, #FFFFFF 25px);
	box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;
	moz-box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;
	webkit-box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;
	display: block;
width: 95%;
min-height: 15px;
font-family:Calibri;
font-size:11pt;
color:#005ce6;
text-align:left;" id=parola1 type="password" class="text_litere gradient" name="txtparola1" placeholder="confirmati parola" required />
					  	<span toggle="#parola1" class="fa fa-fw fa-eye field-icon toggle-password"></span>
						<span class="eroare"><?php echo $er_identice; ?></span>
					 </div>
				</div>
				<div style="background-color:#4da9ff;" class="modal-footer fond-antet-subsol">
					<button type="submit" name="cmd_save" class="btn btn-primary">Creeaza cont</button>
					<button type='button' class='btn btn-danger' onClick="location.href = 'index.php'">Abandon</button>
				</div>
				</form>
			</div>
		</div>

 <script>
  $(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
  </script>	

</body>
</html>
