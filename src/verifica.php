<?php
include("config.php");

if(empty($_GET['id']) && empty($_GET['cod']))
{
	header("location: index.php");
}

if(isset($_GET['id']) && isset($_GET['cod']))
{
	$id = base64_decode($_GET['id']);
	$token = $_GET['cod'];
	$sql = "SELECT id_utilizator, activ FROM utilizatori WHERE id_utilizator = $id AND token = '$token'";
	$rezultat = mysqli_query($con,$sql);
	if(mysqli_num_rows($rezultat) > 0)
	{
		$linie=mysqli_fetch_assoc($rezultat);
		
		$activ = $linie['activ'];
		if($activ == 0)
		{
			$sql = "UPDATE utilizatori SET activ = 1 WHERE id_utilizator = ".$id;
			mysqli_query($con,$sql);
			$mesaj = "Contul dumneavoastra este acum activ si va puteti loga in InfoEd.";	
		}
		else
		{
			$mesaj = "Contul dumneavoastra este deja activ!";
		}
	}
	else
	{
		$mesaj = "Cont inexistent!";
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
		    <h4 class="modal-title"><i class="fa fa-unlock"></i>&nbsp;&nbsp;Activare cont</h4>
		</div>
		<div class="modal-body fond-body">               
            <br>
            <h5><?php echo $mesaj;?> </h5>
        </div>
        <div style="background-color:#4da9ff;" class="modal-footer fond-antet-subsol">
			<button type='button' class='btn btn-info' onClick='location.href = "index.php"'>Inchide</button>
		</div>
	</div>
</div>

</body>
</html>