<?php
include("config.php");
$id = decriptare($_GET['id']);

$sql = "SELECT a.id_utilizator, a.nume, a.prenume, SUM(b.scor) AS scor_total, COUNT(b.scor) AS teste_parcurse 
		FROM utilizatori a, utilizatori_teste b 
		WHERE a.id_utilizator = b.id_utilizator 
		GROUP BY b.id_utilizator 
		ORDER BY scor_total DESC, a.nume, a.prenume ";

$rezultat=mysqli_query($con,$sql);
if (!$rezultat)
	echo "Problema!";

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
<!--<div class="modal-dialog" role="document">-->
<div class="content-fluid" style="width:80%;margin:auto;">
<br><br>
	<div style="border-style: solid; border-width: 3px;	border-color: #bfbfbf; border-radius: 7px; box-shadow: 10px 10px 10px 0px #66b5ff;" class="modal-content bordura">
		<div style="background-color:#4da9ff;" class="modal-header fond-antet-subsol">
			<h4 class="modal-title"><i class="fa fa-list"></i>&nbsp;&nbsp;Topul bibliotecii</h4>
				</div>
				<form method="post">
				<div style="background-color:#cce6ff;" class="modal-body fond-body">
				
				<table class="tabel" style="width:90%;">
				<tr>
					<td class="cap" style="width:10%">Locul</td>
					<td class="cap" style="width:60%">Nume si prenume</td>
					<td class="cap" style="width:15%">Teste parcurse</td>
					<td class="cap" style="width:15%">Scor total</td>
				</tr>
				<?php
				$i = 1;
				while($linie=mysqli_fetch_assoc($rezultat))
				{
				if($linie['id_utilizator']==$id) //Utilizatorul curent va fi marcat diferit in tabel
				{
					echo "<tr>";
						echo "<td class='linie_cp'>".$i."</td>";
						echo "<td class='linie_stp'>".$linie['nume']." ".$linie['prenume']."</td>";
						echo "<td class='linie_cp'>".$linie['teste_parcurse']."</td>";
						echo "<td class='linie_drp'>".$linie['scor_total']."</td>";
					echo "</tr>";
				}
				else
				{
					echo "<tr>";
						echo "<td class='linie_c'>".$i."</td>";
						echo "<td class='linie_st'>".$linie['nume']." ".$linie['prenume']."</td>";
						echo "<td class='linie_c'>".$linie['teste_parcurse']."</td>";
						echo "<td class='linie_dr'>".$linie['scor_total']."</td>";
					echo "</tr>";					
				}
				$i++;
				}
				?>
				</table>

				</div>
				<div style="background-color:#4da9ff;" class="modal-footer fond-antet-subsol">
					<button type='button' class='btn btn-info' onClick='location.href = "teste.php?id=<?php echo criptare($id);?>"'>Inchide</button>
				</div>
				</form>
			</div>
		</div>


</body>
</html>
