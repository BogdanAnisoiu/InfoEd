<?php
include("config.php");
$id = decriptare($_GET['id']);
$sql = "SELECT nume, prenume FROM utilizatori WHERE id_utilizator=".$id;
$rezultat = mysqli_query($con, $sql);
$linie = mysqli_fetch_assoc($rezultat);
$nume = $linie['nume'];
$prenume = $linie['prenume'];
if(isset($_POST['cmd_save']))
{
    $nume=mysqli_real_escape_string ($con,trim($_POST['txtnume']));
	$prenume=mysqli_real_escape_string ($con,trim($_POST['txtprenume'])); 
    
    $sql="UPDATE utilizatori SET nume='".$nume."', prenume='".$prenume."' WHERE id_utilizator=".$id;
	mysqli_query($con,$sql);   
    header("location: teste.php?id=".criptare($id));		
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
					<h4 class="modal-title"><i class="fa fa-user"></i>&nbsp;&nbsp;Modifica profil</h4>
				</div>

				<form method="post">
				<div style="background-color:#cce6ff;" class="modal-body fond-body">
					<div class="form-group ">
					  <label class="eticheta_st" for="txtnume">Nume(*)</label>
					  <input style="padding: 9px;border: solid 1px #0077B0;	outline: 0;	background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #cce6ff), to(#FFFFFF));
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
                                        webkit-box-shadow:rgba(0,0,0,0.1) 0px 0px 8px;" 
                        type="text" class="text_litere gradient" name="txtnume" value=<?php echo $nume; ?> required />
					 </div>
					<div class="form-group ">
					  <label class="eticheta_st" for="txtprenume">Prenume(*)</label>
					  <input style="padding: 9px; border: solid 1px #0077B0; outline: 0;
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
text-align:left;" type="text" class="text_litere gradient" name="txtprenume" value= <?php echo $prenume; ?>  required />
					 </div>
					
					  
				<div style="background-color:#4da9ff;" class="modal-footer fond-antet-subsol">
					<button type="submit" name="cmd_save" class="btn btn-primary">Salveaza</button>
					<button type='button' class='btn btn-danger' onClick='location.href = "teste.php?id=<?php echo criptare($id);?>"'>Abandon</button>
				</div>
				</form>
			</div>
		</div>

 

</body>
</html>
