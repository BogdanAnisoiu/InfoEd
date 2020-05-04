<?php
include("config.php");
$er_email="";
if(isset($_POST['cmd_save']))
{
	$ok=1;

	$email=mysqli_real_escape_string($con,trim($_POST['txtemail']));
	$sql="select email from utilizatori where email='".$email."'";
	$rezultat=mysqli_query($con,$sql);
	$cate=mysqli_num_rows($rezultat);
	if($cate != 1)
	{
		$er_email = "Adresa de email nu exista in baza de date";
		$ok=0;	
	}
	
	
if($ok==1)
{
    $parola=genereaza_parola();
    $subiect="InfoEd - Recuperare parola";
    $mesaj='<p style="font-size:pt; color:blue;"> Noua dumneavoastra parola este : <br> <b>'.$parola.'</b><br> Dupa ce v-ati logat intrati la schimbare parola sub mailul dumneavoastra,iar de acolo puteti sa va alegeti o parola mai convenabila </p>';
    trimite_mail($email,$mesaj,$subiect); 
    $parola=md5($parola);
    $sql="update utilizatori set parola='".$parola."' where email ='".$email."'";
    mysqli_query($con,$sql);
    header("location: mesaj_parola_uitata.php");
    
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
			<div class="modal-content bordura">
				<div class="modal-header fond-antet-subsol">
					<h4 class="modal-title"><i class="fa fa-unlock"></i>&nbsp;&nbsp;Recuperare parola</h4>
				</div>

				<form method="post">
				<div class="modal-body fond-body">
					
					
					<div class="form-group ">
					  <label class="eticheta_st" for="txtemail">Adresa de e-mail(*)</label>
					  <input type="email" class="text_litere gradient" name="txtemail" placeholder="you@yourdomain.com" required />
					  <div style="font-size:10pt;">Verificati si in spam</div>
					  <span class="eroare"><?php echo $er_email; ?></span>
					 </div>
					
					
				</div>
				<div class="modal-footer fond-antet-subsol">
					<button type="submit" name="cmd_save" class="btn btn-primary">Reseteaza parola</button>
					<button type='button' class='btn btn-danger' onClick="location.href = 'index.php'">Abandon</button>
				</div>
				</form>
			</div>
		</div>

 

</body>
</html>
