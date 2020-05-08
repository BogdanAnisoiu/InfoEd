<?php
include("config.php");
$id=decriptare($_GET['id']);
$er_lungime = "";
$er_identice= "";

if(isset($_POST['cmd_save']))
{
	
	if(isset($_POST['g-recaptcha-response']))
	{
    	$captcha=$_POST['g-recaptcha-response'];
    }
    if(!$captcha)
	{
	    echo '<h2>Bifati verificarea antispam!</h2>';
	    exit;
    }
        
	$secretKey = "6LeHRfQUAAAAADTw9HeksJodI1bjaK7vjb8L98Rr";
    $ip = $_SERVER['REMOTE_ADDR'];
    // post request to server
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
    $response = file_get_contents($url);
    $responseKeys = json_decode($response,true);
    // should return JSON with success as true
    if($responseKeys["success"])
	{
	
	
		$ok=1;
	
		
		
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
			
			$sql="update utilizatori set parola='".$parola."' where id_utilizator=".$id;
			mysqli_query($con,$sql);
			header("location: index.php");
		}
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
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="ajax_jquery_341/jquery.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap441/js/bootstrap.min.js"></script>

</head>
<body>
		<div class="modal-dialog" role="document">
			<div class="modal-content bordura">
				<div class="modal-header fond-antet-subsol">
					<h4 class="modal-title"><i class="fa fa-lock"></i>&nbsp;&nbsp;Schimbare parola</h4>
				</div>

				<form method="post">
				<div class="modal-body fond-body">
					
					<div class="form-group ">
					  <label class="eticheta_st" for="txtparola">Parola noua(*)</label>
					  <input id="parola" type="password" class="text_litere gradient" name="txtparola" placeholder="intre 6 si 20 de caractere" aria-describedby="explicatie" required />
					  <span toggle="#parola" class="fa fa-fw fa-eye field-icon toggle-password"></span>
						<small id="explicatie" class="form-text text-muted">
						  Parola trebuie sa aiba intre 6 si 20 de caractere
						</small>				  
						<span class="eroare"><?php echo $er_lungime; ?></span>
					 </div>
					<div class="form-group ">
					  	<label class="eticheta_st" for="txtparola1">Confirmare parola noua(*)</label>
					  	<input id=parola1 type="password" class="text_litere gradient" name="txtparola1" placeholder="confirmati parola" required />
					  	<span toggle="#parola1" class="fa fa-fw fa-eye field-icon toggle-password"></span>
						<span class="eroare"><?php echo $er_identice; ?></span>
					 </div>

	 				<div class="g-recaptcha" data-sitekey="6LeHRfQUAAAAAGa3fAvx8wTd-lIQkmbKeoJX_M9f"></div>

				</div>
				<div class="modal-footer fond-antet-subsol">
					<button type="submit" name="cmd_save" class="btn btn-primary">Schimba parola</button>
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
