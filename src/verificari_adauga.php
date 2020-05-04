<?php
/*
require_once 'dbconfig.php';

$email = decriptare($_GET['a']);
$id_grup = utilizator($email);

if(isset($_POST['cmd_save']))
{
	$nume = htmlspecialchars(trim($_POST['txtnume']),ENT_QUOTES, "ISO-8859-1");
	$zile = htmlspecialchars(intval($_POST['txtzile']), ENT_QUOTES, "ISO-8859-1");
	$luni = htmlspecialchars(intval($_POST['txtluni']), ENT_QUOTES, "ISO-8859-1");
	$ani = htmlspecialchars(intval($_POST['txtani']), ENT_QUOTES, "ISO-8859-1");
	$valabilitate = $zile + $luni*30 + $ani*365;
	$mesaj = htmlspecialchars(trim($_POST['txtmesaj']),ENT_QUOTES, "ISO-8859-1");
	$inainte = htmlspecialchars(intval($_POST['txtinainte']), ENT_QUOTES, "ISO-8859-1");
	
	if($id_grup>0)
	{
	if ($valabilitate>0)
	{
	
	$x = new Database();
	$pdo = $x->dbConnection();
	$pdo->beginTransaction();
	
	try
{							

	$sql = "INSERT INTO verificari(denumire_verificare, zile, luni, ani, valabilitate, mesaj, inainte, id_grup) 
	VALUES(:nume,:zile,:luni,:ani,:valabilitate,:mesaj,:inainte,:id_grup)";

	$stmt = $pdo->prepare($sql);
	$stmt->bindparam(":nume",$nume);
	$stmt->bindparam(":zile",$zile);
	$stmt->bindparam(":luni",$luni);
	$stmt->bindparam(":ani",$ani);
	$stmt->bindparam(":valabilitate",$valabilitate);
	$stmt->bindparam(":mesaj",$mesaj);
	$stmt->bindparam(":inainte",$inainte);
	$stmt->bindparam(":id_grup",$id_grup);

	$stmt->execute();
	$pdo->commit();

	$x = null;
	$pdo = null;

	header("refresh:0.5;".$path."verificari_lista.php?a=".criptare($email));

}
catch(PDOException $ex)
{
	$pdo->rollback();
	echo $ex->getMessage();
	$x = null;
	$pdo = null;
}
	
}
else
{
	echo '<h2>Introduceti numarul de zile sau de luni sau de ani! Nu pot fi toate 0!</h2>';
}
}
else
{
	echo '<h2>Utilizatorul nu este alocat unui grup de utilizatori! Salvare imposibila!</h2>';
}
}
*/
?>


<!DOCTYPE html>
<html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap441/css/bootstrap.min.css">   
    <link rel="stylesheet" href="css/stil.css">

</head>
<body>
<!-- Adauga -->
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="addLabel">Adauga Verificare</h4>
				</div>
				<form method="post">
				<div class="modal-body">
					<div class="form-group">
						<label for="txtnume">Denumire Verificare(*)</label>
						<input type="text" class="text_litere gradient" name="txtnume" placeholder="" required /> 
					</div>
					<hr class="hr-primary" />
										
					<div class="form-group">
						<label >Valabilitatea expira in</label>
					</div>
					
					<div class="form-group">
						<label for="txtzile">Zile</label>
						<input type="text" class="text_cifre gradient" name="txtzile" placeholder="" pattern="\d*" />
					 </div>

					<div class="form-group">
						<label for="txtluni">Luni</label>
						<input type="text" class="text_cifre gradient" name="txtluni" placeholder="" pattern="\d*" />
					</div>
					<div class="form-group">
						<label for="txtani">Ani</label>
						<input type="text" class="text_cifre gradient" name="txtani" placeholder="" pattern="\d*" />
					</div>

					<hr class="hr-primary" />

					<div class="form-group">
						<label for="txtmesaj">Mesajul implicit de avertizare(ex: Atentie, ITP-ul se apropie de expirare! sau Atentie, contractul se apropie de expirare!)</label>
						<input type="text" class="text_litere gradient" name="txtmesaj" placeholder="" required />
					</div>
					<div class="form-group">
						<label for="txtinainte">Incepe sa ma anunti cu ..... zile inainte</label>
						<input type="text" class="text_cifre gradient" name="txtinainte" placeholder="" pattern="\d*" required />
					 </div>
					
				<div class="modal-footer">
<!--					<button type='button' class='btn btn-danger' onClick="location.href = --> 
						<?php //echo "'".$path.'verificari_lista.php?a='.criptare($email)."'"; ?>
<!--						">Abandon</button> -->

					<button type="submit" name="cmd_save" class="btn btn-primary">Salveaza</button>
					<button type='button' class='btn btn-danger'>Abandon</button>

				</div>
				</form>
				</div>
			</div>
		</div>
			


<!--	<script src="jquery1124/jquery.min.js"></script> 
    <script src="bootstrap441/js/bootstrap.min.js"></script>	-->
<!--	<script src="bootbox.min.js"></script> ->>

</body>
</html>