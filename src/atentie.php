<?php
include("config.php");
$id = decriptare($_GET['id']);
$id_test = decriptare($_GET['id_test']);


$sql = "SELECT prenume, email FROM utilizatori WHERE id_utilizator=".$id;

$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$email = $row['email'];
$prenume = $row['prenume'];
if(isset($_POST['cmd_save']))

{

	header("location: test.php?id=".criptare($id)."&id_test=".criptare($id_test));
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
					<h4 class="modal-title"><i class="fa fa-unlock"></i>&nbsp;&nbsp;Atentie!</h4>
				</div>

				<form method="post">
				<div class="modal-body fond-body">
					
                
<br>
<br>

<h5>Testul poate sa fie dat o singura data, iar el are in compozitie 5 intrebari,fiecare cu 5 variante de raspuns, legate de lectura avuta anterior.Timpul este limitat,avand la dispozitie 10 minute pentru a raspunde la cele 5 intrebari</h5>
<br>
<h4>Succes!</h4>
<button type="submit" name="cmd_save" class="btn btn-primary" >Incepe testul</button>
					<button type='button' class='btn btn-danger' onClick="location.href = 'index.php'">Abandon</button>
					<div class="form-group ">
					 
				</div>
				</form>
			</div>
		</div>

</body>
</html>

