<?php
include "config.php";
$id=decriptare($_GET['id']);
$id_test=decriptare($_GET['id_test']);
$sql="select intrebare1, v11, v12, v13, v14, v15, intrebare2, v21, v22, v23, v24, v25, intrebare3, v31, v32, v33, v34, v35, 
	intrebare4, v41, v42, v43, v44, v45, intrebare5, v51, v52, v53, v54, v55 from teste where id_test=".$id_test;
$rezultat=mysqli_query($con, $sql);
$linie= mysqli_fetch_assoc($rezultat);
$i1=$linie['intrebare1'];	
$v11=$linie['v11'];
$v12=$linie['v12'];
$v13=$linie['v13'];
$v14=$linie['v14'];
$v15=$linie['v15'];
$i2=$linie['intrebare2'];
$v21=$linie['v21'];
$v22=$linie['v22'];
$v23=$linie['v23'];
$v24=$linie['v24'];
$v25=$linie['v25'];
$i3=$linie['intrebare3'];
$v31=$linie['v31'];
$v32=$linie['v32'];
$v33=$linie['v33'];
$v34=$linie['v34'];
$v35=$linie['v35'];
$i4=$linie['intrebare4'];
$v41=$linie['v41'];
$v42=$linie['v42'];
$v43=$linie['v43'];
$v44=$linie['v44'];
$v45=$linie['v45'];
$i5=$linie['intrebare5'];
$v51=$linie['v51'];
$v52=$linie['v52'];
$v53=$linie['v53'];
$v54=$linie['v54'];
$v55=$linie['v55'];

if(isset($_POST['cmd_save']))
 {

	if(isset($_POST['radio1']))
		$r1=intval($_POST['radio1']);
	else
		$r1=0;

	if(isset($_POST['radio2']))
		$r2=intval($_POST['radio2']);
	else 
		$r2=0;

	if(isset($_POST['radio3']))
		$r3=intval($_POST['radio3']);
	else
		$r3=0;

	if(isset($_POST['radio4']))
		$r4=intval($_POST['radio4']);
	else
		$r4=0;

	if(isset($_POST['radio5']))
		$r5=intval($_POST['radio5']);
	else
		$r5=0;
	
	$scor=0;
	
$sql1="insert into utilizatori_teste(id_utilizator,id_test,raspuns_utilizator1,raspuns_utilizator2,raspuns_utilizator3,raspuns_utilizator4,raspuns_utilizator5,scor) 
		values(".$id.",".$id_test.",".$r1.",".$r2.",".$r3.",".$r4.",".$r5.",".$scor.")";
mysqli_query($con,$sql1);
mysqli_close($con);
header("location:verifica_test.php?id=".criptare($id)."&id_test=".criptare($id_test));

 }


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>InfoEd</title>
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
		<div   class="modal-dialog modal-lg">
		
			<div  class="modal-content bordura">


				<div  class="modal-header fond-antet-subsol">
					<h4 class="modal-title"><i class="fa fa-question-circle"></i>&nbsp;&nbsp;Test</h4>
				</div>
				
			
				<div><span id="display" style="color:#FF0000;font-size:15px"></span></div>
            	<div><span id="submitted" style="color:#FF0000;font-size:15px"></span></div>

				<form id="test1" method="post">
				
				<div  class="modal-body fond-body">
					<div class="form-group">

<!-- intrebarea 1-->				
						
						<p><?php echo $i1; ?></p>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio11" name="radio1" value="1">
  							<label class="form-check-label" style="font-family:calibri;font-size:14pt;margin-right:20px;" for="radio1"><?php echo $v11;?></label>
						</div>					
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio12" name="radio1" value="2">
  							<label class="form-check-label" style="font-family:calibri;font-size:14pt;margin-right:20px;" for="radio1"><?php echo $v12;?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio13" name="radio1" value="3">
  							<label class="form-check-label" style="font-family:calibri;font-size:14pt;margin-right:20px;" for="radio1"><?php echo $v13;?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio14" name="radio1" value="4">
  							<label class="form-check-label" style="font-family:calibri;font-size:14pt;margin-right:20px;" for="radio1"><?php echo $v14;?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio15" name="radio1" value="5">
  							<label class="form-check-label" style="font-family:calibri;font-size:14pt;margin-right:20px;" for="radio1"><?php echo $v15;?></label>
						</div>
						<hr class="linie">
						<!-- intrebarea 2-->	
								
						<p><?php echo $i2; ?></p>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio21" name="radio2" value="1">
  							<label class="form-check-label" style="font-family:calibri;font-size:14pt;margin-right:20px;" for="radio2"><?php echo $v21;?></label>
						</div>					
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio22" name="radio2" value="2">
  							<label class="form-check-label" style="font-family:calibri;font-size:14pt;margin-right:20px;" for="radio2"><?php echo $v22;?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio23" name="radio2" value="3">
  							<label class="form-check-label" style="font-family:calibri;font-size:14pt;margin-right:20px;" for="radio2"><?php echo $v23;?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio24" name="radio2" value="4">
  							<label class="form-check-label" style="font-family:calibri;font-size:14pt;margin-right:20px;" for="radio2"><?php echo $v24;?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio25" name="radio2" value="5">
  							<label class="form-check-label" style="font-family:calibri;font-size:14pt;margin-right:20px;" for="radio2"><?php echo $v25;?></label>
						</div>
						<hr class="linie">
						<!-- intrebarea 3-->
							
						<p><?php echo $i3; ?></p>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio31" name="radio3" value="1">
  							<label class="form-check-label" style="font-family:calibri;font-size:14pt;margin-right:20px;" for="radio3"><?php echo $v31;?></label>
						</div>					
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio32" name="radio3" value="2">
  							<label class="form-check-label" style="font-family:calibri;font-size:14pt;margin-right:20px;" for="radio3"><?php echo $v32;?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio33" name="radio3" value="3">
  							<label class="form-check-label" style="font-family:calibri;font-size:14pt;margin-right:20px;" for="radio3"><?php echo $v33;?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio34" name="radio3" value="4">
  							<label class="form-check-label" style="font-family:calibri;font-size:14pt;margin-right:20px;" for="radio3"><?php echo $v34;?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio35" name="radio3" value="5">
  							<label class="form-check-label" style="font-family:calibri;font-size:14pt;margin-right:20px;" for="radio3"><?php echo $v35;?></label>
						</div>
						<hr class="linie">
						<!-- intrebarea 4-->	
								
						<p><?php echo $i4; ?></p>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio41" name="radio4" value="1">
  							<label class="form-check-label" style="font-family:calibri;font-size:14pt;margin-right:20px;" for="radio4"><?php echo $v41;?></label>
						</div>					
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio42" name="radio4" value="2">
  							<label class="form-check-label" style="font-family:calibri;font-size:14pt;margin-right:20px;" for="radio4"><?php echo $v42;?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio43" name="radio4" value="3">
  							<label class="form-check-label" style="font-family:calibri;font-size:14pt;margin-right:20px;" for="radio4"><?php echo $v43;?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio44" name="radio4" value="4">
  							<label class="form-check-label" style="font-family:calibri;font-size:14pt;margin-right:20px;" for="radio4"><?php echo $v44;?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio45" name="radio4" value="5"> 
  							<label class="form-check-label" style="font-family:calibri;font-size:14pt;margin-right:20px;" for="radio4"><?php echo $v45;?></label>
						</div>
						<hr class="linie">
						<!-- intrebarea 5-->
								
						<p><?php echo $i5; ?></p>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio51" name="radio5" value="1"> 
  							<label class="form-check-label" style="font-family:calibri;font-size:14pt;margin-right:20px;" for="radio5"><?php echo $v51;?></label>
						</div>					
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio52" name="radio5" value="2">
  							<label class="form-check-label" style="font-family:calibri;font-size:14pt;margin-right:20px;" for="radio5"><?php echo $v52;?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio53" name="radio5" value="3">
  							<label class="form-check-label" style="font-family:calibri;font-size:14pt;margin-right:20px;" for="radio5"><?php echo $v53;?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio54" name="radio5" value="4">
  							<label class="form-check-label" style="font-family:calibri;font-size:14pt;margin-right:20px;" for="radio5"><?php echo $v54;?></label>
						</div>
						<div class="form-check form-check-inline">
  							<input type="radio" class="form-check-input" id="radio55" name="radio5" value="5">
  							<label class="form-check-label" style="font-family:calibri;font-size:14pt;margin-right:20px;" for="radio5"><?php echo $v55;?></label>
						</div>


				</div>					 
				<div  class="modal-footer fond-antet-subsol">
					<button type="submit" name="cmd_save" class="btn btn-primary">Verifica raspunsurile</button>
				</div>

			
			<script>
            var div = document.getElementById('display');
            var submitted = document.getElementById('submitted');

              function CountDown(duration, display) {

                        var timer = duration, minutes, seconds;

                      var interVal=  setInterval(function () {
                            minutes = parseInt(timer / 60, 10);
                            seconds = parseInt(timer % 60, 10);

                            minutes = minutes < 10 ? "0" + minutes : minutes;
                            seconds = seconds < 10 ? "0" + seconds : seconds;
                    display.innerHTML ="<b>Timp ramas: " + minutes + "m : " + seconds + "s" + "</b>";
                            if (timer > 0) {
                               --timer;
                            }else{
                       clearInterval(interVal)
                                SubmitFunction();
                             }

                       },1000);

                }

              function SubmitFunction(){
                submitted.innerHTML="Timpul a expirat!";
                document.getElementById("radio11").disabled=true;
                document.getElementById("radio12").disabled=true;
                document.getElementById("radio13").disabled=true;
                document.getElementById("radio14").disabled=true;
                document.getElementById("radio15").disabled=true;
				
                document.getElementById("radio21").disabled=true;
                document.getElementById("radio22").disabled=true;
                document.getElementById("radio23").disabled=true;
                document.getElementById("radio24").disabled=true;
                document.getElementById("radio25").disabled=true;

				document.getElementById("radio31").disabled=true;
                document.getElementById("radio32").disabled=true;
                document.getElementById("radio33").disabled=true;
                document.getElementById("radio34").disabled=true;
                document.getElementById("radio35").disabled=true;

				document.getElementById("radio41").disabled=true;
                document.getElementById("radio42").disabled=true;
                document.getElementById("radio43").disabled=true;
                document.getElementById("radio44").disabled=true;
                document.getElementById("radio45").disabled=true;

				document.getElementById("radio51").disabled=true;
                document.getElementById("radio52").disabled=true;
                document.getElementById("radio53").disabled=true;
                document.getElementById("radio54").disabled=true;
                document.getElementById("radio55").disabled=true;

				}

               CountDown(600,div);
            </script>

				</form>
			</div>
		</div>



</body>
</html>
